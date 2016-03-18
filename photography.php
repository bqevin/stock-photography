<?php
error_reporting(0);
session_start();
require_once 'templates/header.php'; ?>
    <link rel="stylesheet" type="text/css" href="more/css/demo.css" />
    <link rel="stylesheet" type="text/css" href="more/css/elastic_grid.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="more/js/modernizr.custom.js"></script>
<script src="more/js/classie.js"></script>
<!--- uncompress-->
<!-- <script type="text/javascript" src="more/js/jquery.elastislide.js"></script>
<script type="text/javascript" src="more/js/jquery.hoverdir.js"></script>
<script type="text/javascript" src="more/js/elastic_grid.js"></script> -->

<!-- compress version-->
<script type="text/javascript" src="more/js/elastic_grid.min.js"></script>
    <style type="text/css" media="screen">
      span.hr{
        //border-bottom: 1px solid #171717;
    padding-top: 8px;
    padding-bottom: 8px;
    margin-top: 2px;
    min-width: 200px;}
        input[type="submit"]{
        line-height: 3em;
        margin-top: 10px;
        width: 30%;
        color: #FFF;
        font-weight: bold;
        text-align: center;
        background: rgba(255, 255, 255, 0);
        border: 2px solid #fff;
        border-radius: 5px;
    }
     #side{margin-left:570px;}
  #side2{margin-left:10px;}
      #submit{
  margin-left:-5px;
  border-radius:5px;
  padding:5px;
  margin-left:-5px;
  width:50px;
  height:50px;
  border:none !important;
  }
.related_photo{width: 85%}
  i.fa{margin-left: 10px !important; padding-top: 15px !important;}
.elastislide-horizontal{
    padding: 0px;
}
.og-grid li>a img{border:none;} 

    </style>
</head>
<body style="background:#fff;">
<div class="top_right">
    
    <ul>
        <li id="side2"><a href="images.php">Images </a>|</li>
        <li><a href="models.php">Models</a>|</li>
        <li><a href="photography.php">Photographers</a>|</li>
        <li><a href="mua.php">MUA</a>|</li>
        <li id="side" <?php echo @$page_title == "Cart" ? "class='active'" : ""; ?> >
            <a href="templates/cart.php">
                <?php
                // count products in cart
                $cart_count = count(@$_SESSION['cart_items']);
                ?>
                <i class="fa fa-cart-plus"> </i> <span class="badge"
                                                       id="comparison-count"><?php echo $cart_count; ?></span>
            </a>
        </li>
        <li><a><i id="no" class="fa fa-phone">+254705825655</i></a></li>
        <li><a href="register.php"><i class="fa fa-user-plus"></i> Sign Up </a></li>
        <li><a href="users/login.php" id="loginButton"><i class="fa fa-user"></i> Log in</a>
        </li>
    </ul>
</div>

<!--/.nav-collapse -->
<div class="clearfix"></div>
</div>
</div>
    <!--/ Top bar-->
    <div class="clearfix"></div>
    
    <header>
<h1><a href="index.php"><img class="logo" src="assets/img/logo.png" alt=""></a></h1>
        <form id="mailing" name="mailinglist" method="post">
            <center>
                <div class="ui-widget">
                    <input type="text" id="tag" class="tag_img" name="search_text" required="required">
                    <button type="submit" name="model-submit" value="Join Our Mailing List" id="submit"
                            class=" button btn-primary"><i class="fa fa-search"></i></button>
                </div>
            </center>
        </form>
</header>
<div class="stock_box">
      <div class="col-md-2 stock_left">
        <div class="w_sidebar">
          <section class="sky-form">
            <h4>Assignment Photography</h4>
            <div class="col col-4">
              <label class="checkbox">
                <input type="checkbox" name="checkbox" checked=""><i></i>All </label>
            </div>
            <div class="col col-4">
              <label class="checkbox">
                <input type="checkbox" name="checkbox"><i></i>Potrait</label>
              <label class="checkbox">
                <input type="checkbox" name="checkbox"><i></i>Product</label>
           <label class="checkbox">
                <input type="checkbox" name="checkbox"><i></i>Fashion</label>
                <label class="checkbox">
                <input type="checkbox" name="checkbox"><i></i>Event</label>
                
                <label class="checkbox">
                <input type="checkbox" name="checkbox"><i></i>Conceptual</label>
                <label class="checkbox">
                <input type="checkbox" name="checkbox"><i></i>Fine Art</label>
                <label class="checkbox">
                <input type="checkbox" name="checkbox"><i></i>Sport</label>
                <label class="checkbox">
                <input type="checkbox" name="checkbox"><i></i>PhotoJournalism</label>
                <label class="checkbox">
                <input type="checkbox" name="checkbox"><i></i>Macro</label>
                <label class="checkbox">
                <input type="checkbox" name="checkbox"><i></i>Wildlife</label>
                <label class="checkbox">
                <input type="checkbox" name="checkbox"><i></i>Landscape</label>
            </div>
          </section>

         
        </div>
      </div>


<div id="elastic_grid_demo"></div>

<script type="text/javascript">
    $(function(){
        $("#elastic_grid_demo").elastic_grid({
            'showAllText' : 'All',
            'filterEffect': 'popup', // moveup, scaleup, fallperspective, fly, flip, helix , popup
            'hoverDirection': true,
            'hoverDelay': 0,
            'hoverInverse': false,
            'expandingSpeed': 500,
            'expandingHeight': 500,
            'items' :
            [
<?php
            /* Attempt MySQL server connection. Assuming you are running MySQL
            server with default setting (user 'root' with no password) */
            $link = mysql_connect("localhost", "mjedevel_kev", "Token2016");
            mysql_select_db( "mjedevel_ia", $link);
            // Check connection
            if ($link === false) {
                die("ERROR: Could not connect. " . mysql_connect_error());
            }
            //declaring variable
            $input = @$_POST["search_text"];
            $gender = @$_POST["search_gender"];
            $nationality = @$_POST["search_nationality"];
            $country = @$_POST["search_country"];
            $age = @$_POST["search_age"];
            $height = @$_POST["search_height"];
            $waist = @$_POST["search_waist"];
            // Attempt select query execution 
            $sql = "SELECT * FROM images WHERE genre LIKE 'photography'";
            $sql2 = "SELECT * FROM images WHERE keywords LIKE '$input' AND genre LIKE 'photography' ";
            $sql3 = "SELECT * FROM images WHERE keywords='$gender' OR keywords='$nationality'  AND genre LIKE 'photography' ";
            if (!empty(@$_POST['model-submit'])) {
                if ($result = mysql_query($sql2, $link)) {
                    if (mysql_num_rows($result) > 0) {
                        while ($row = mysql_fetch_array($result)) {
                            $file_path_thumb = 'users/assets/images/thumbs/';
                            $file_path_small = 'users/assets/images/small/';
                            $file_path_medium = 'users/assets/images/medium/';
                            $file_path_large = 'users/assets/images/original/';
                            $copywrite = $row['author'];
                            $description = $row['description'];
                            $start = $row['url'];
                            $title = $row['title'];
                            $category = $row['category'];
                            $src_water = $file_path_small . $start;
                            $src_medium = $file_path_medium . $start;
                            $src_large = $file_path_large . $start;
                            $src = $file_path_thumb . $start;
                            $test = getimagesize($file_path_thumb . $start);
                            $test_medium = getimagesize($file_path_medium . $start);
                            $test_large = getimagesize($file_path_large . $start);
                            $width = $test[0];
                            $height = $test[1];
                            $width_medium = $test_medium[0];
                            $height_medium = $test_medium[1];
                            $width_large = $test_large[0];
                            $height_large = $test_large[1];
                            $image_category = '';
                            $sql_zcard = "SELECT * FROM users WHERE email LIKE  '%$copywrite%' ";
                            $sql_similar = "SELECT * FROM images WHERE  author  LIKE '%$copywrite%' AND genre LIKE 'photography'";
                            if ($result_two = mysql_query($sql_zcard, $link)) {
                                if (mysql_num_rows($result_two) > 0) {
                                    while ($row_two = mysql_fetch_array($result_two)) {
                                        $copywrite = $row_two['name'];
                                        $weight = 'Weight :'. $row_two['weight'];
                                        $bust = 'Bust:'.$row_two['bust'];
                                        $country = 'Country:'.$row_two['country'];
                                    }
                                }
                            }
                            
                            if ($result_three = mysql_query($sql_similar, $link)) {
                                if (mysql_num_rows($result_three) > 0) {
                                    while ($row_three = mysql_fetch_array($result_three)) {
                                        $image_zcard = $file_path_thumb.$row_three['url'];
                                        $myArray .= "src = $image_zcard";
                                        $zcard = $arr[] = $myArray;
                                    }
                                }
                            }
                            ?>
                                {
                    'title'         : '<?php echo @$title ?>',
                    'description'   : 'Copyright: <?php echo @$copywrite ?> (<?php echo @$category ?>)<br><span class="hr"><input type="radio" name="size"> Small Dimensions: <?php echo $width ?> X <?php echo $height ?> px </span><br><span class="hr"><input type="radio" name="size" checked="checked"> Medium Dimensions: <?php echo $width_medium ?> X <?php echo $height_medium ?> px </span><br> <span class="hr"><input type="radio" name="size"> Large Dimensions: <?php echo $width_large ?> X <?php echo $height_large ?> px </span><br>',
                    'thumbnail'     : ['<?php echo $src ?>'],
                    'large'         : ['<?php echo $src_water ?>'],
                    'button_list'   :
                    [
                        { 'title':'Hire Photographer', 'url' : '#', 'new_window' : true },
                        { 'title':'Download', 'url':'#', 'new_window' : false}
                    ],
                    'tags'          : ['<?php echo $tags ?>']
                },
                            <?php
                        }
                        // Close result set
                        mysql_free_result($result);
                    } else {

                    }
                }
            } else if (!empty(@$_POST['contact-submit'])) {
                if ($result = mysql_query($sql3, $link)) {
                    if (mysql_num_rows($result) > 0) {
                        while ($row = mysql_fetch_array($result)) {
                            $file_path_thumb = 'users/assets/images/thumbs/';
                            $file_path_small = 'users/assets/images/small/';
                            $file_path_medium = 'users/assets/images/medium/';
                            $file_path_large = 'users/assets/images/original/';
                            $start = $row['url'];
                            $copywrite = $row['author'];
                            $description = $row['description'];
                            $src_water = $file_path_small . $start;
                            $src_medium = $file_path_medium . $start;
                            $src_large = $file_path_large . $start;
                            $src = $file_path_thumb . $start;
                            $test = getimagesize($file_path_thumb . $start);
                            $test_medium = getimagesize($file_path_medium . $start);
                            $test_large = getimagesize($file_path_large . $start);
                            $width = $test[0];
                            $height = $test[1];
                            $width_medium = $test_medium[0];
                            $height_medium = $test_medium[1];
                            $width_large = $test_large[0];
                            $height_large = $test_large[1];
                            $image_category = '';
                            $sql_zcard = "SELECT * FROM users WHERE email LIKE  '%$copywrite%' ";
                            $sql_similar = "SELECT * FROM images WHERE  author  LIKE '%$copywrite%' AND genre LIKE 'photography'";
                            if ($result_two = mysql_query($sql_zcard, $link)) {
                                if (mysql_num_rows($result_two) > 0) {
                                    while ($row_two = mysql_fetch_array($result_two)) {
                                        $copywrite = $row_two['name'];
                                        $weight = 'Weight :'. $row_two['weight'];
                                        $bust = 'Bust:' . $row_two['bust'];
                                        $country = 'Country:'. $row_two['country'];
                                    }
                                }
                            }
                            if ($result_three = mysql_query($sql_similar, $link)) {
                                if (mysql_num_rows($result_three) > 0) {
                                    while ($row_three = mysql_fetch_array($result_three)) {
                                        $image_zcard = $file_path_thumb . $row_three['url'];
                                        $myArray .= "$image_zcard";
                                        $zcard = $arr[] = $myArray;
                                    }
                                }
                            }
                            ?>
                                 {
                    'title'         : '<?php echo @$title ?>',
                    'description'   : 'Copyright: <?php echo @$copywrite ?> (<?php echo @$category ?>)<br><span class="hr"><input type="radio" name="size"> Small Dimensions: <?php echo $width ?> X <?php echo $height ?> px </span><br><span class="hr"><input type="radio" name="size" checked="checked"> Medium Dimensions: <?php echo $width_medium ?> X <?php echo $height_medium ?> px </span><br> <span class="hr"><input type="radio" name="size"> Large Dimensions: <?php echo $width_large ?> X <?php echo $height_large ?> px </span><br>',
                    'thumbnail'     : ['<?php echo $src ?>'],
                    'large'         : ['<?php echo $src_water ?>'],
                    'button_list'   :
                    [
                        { 'title':'Hire Photographer', 'url' : '#', 'new_window' : true },
                        { 'title':'Download', 'url':'#', 'new_window' : false}
                    ],
                    'tags'          : ['<?php echo $tags ?>']
                },
                            <?php
                        }
                        // Close result set
                        mysql_free_result($result);
                    } else {
                    }
                }
            } else {
                if ($result = mysql_query($sql, $link)) {
                    if (mysql_num_rows($result) > 0) {
                        while ($row = mysql_fetch_array($result)) {
                            $file_path_thumb = 'users/assets/images/thumbs/';
                            $file_path_small = 'users/assets/images/small/';
                            $file_path_medium = 'users/assets/images/medium/';
                            $file_path_large = 'users/assets/images/original/';
                            $copywrite = $row['author'];
                            $desc = $row['description'];
                            $start = $row['url'];
                            $title = $row['title'];
                            $category = $row['category'];
                            $tags = $row['keywords'];
                            $src_water = $file_path_small . $start;
                            $src_medium = $file_path_medium . $start;
                            $src_large = $file_path_large . $start;
                            $src = $file_path_thumb . $start;
                            $test = getimagesize($file_path_thumb . $start);
                            $test_medium = getimagesize($file_path_medium . $start);
                            $test_large = getimagesize($file_path_large . $start);
                            $width = $test[0];
                            $height = $test[1];
                            $width_medium = $test_medium[0];
                            $height_medium = $test_medium[1];
                            $width_large = $test_large[0];
                            $height_large = $test_large[1];
                            $sql_zcard = "SELECT * FROM users WHERE email LIKE  '%$copywrite%' ";
                            $sql_similar = "SELECT * FROM images WHERE  author  LIKE '%$copywrite%' AND genre LIKE 'photography' ";
                            if ($result_two = mysql_query($sql_zcard, $link)) {
                                if (mysql_num_rows($result_two) > 0) {
                                    while ($row_two = mysql_fetch_array($result_two)) {
                                        $copywrite = $row_two['name'];
                                        $weight = 'Weight :' . $row_two['weight'];
                                        $bust = 'Bust:' . $row_two['bust'];
                                        $country = 'Country:' . $row_two['country'];
                                    }
                                }
                            }
                            if ($result_three = mysql_query($sql_similar, $link)) {
                                if (mysql_num_rows($result_three) > 0) {
                                    $myArray = '';
                                    while ($row_three = mysql_fetch_array($result_three)) {
                                        $image_zcard = $file_path_thumb . $row_three['url'];
                                        $myArray .= $image_zcard;
                                        $zcard = $arr[] = $myArray;
                                    }
                                }
                            }
                            ?>
                                                {
                    'title'         : '<?php echo @$copywrite ?>',
                    'description'   : 'Description: <?php echo @$title ?>',
                    'thumbnail'     : ['<?php echo $src ?>'],
                    'large'         : ['<?php echo $src_water ?>'],
                    'button_list'   :
                    [
                        { 'title':'Hire Photographer', 'url' : '#', 'new_window' : true }
                        // { 'title':'Download', 'url':'#', 'new_window' : false}
                    ],
                    'tags'          : ['<?php echo $tags ?>']
                },

                            <?php
                            }
                            
                        mysql_free_result($result);
                    } else {
                    }
                }
            }
            // Close connection
            mysql_close($link);

            ?>
            ]
        });
    });
</script>
<?php require_once 'templates/footer.php'; ?>
</body>
</html>