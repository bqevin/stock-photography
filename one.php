<?php
error_reporting(0);
session_start();
require_once 'templates/header.php'; ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<link href="css/portfolio-item.css" rel="stylesheet">
<!--- uncompress-->
<!-- <script type="text/javascript" src="more/js/jquery.elastislide.js"></script>
<script type="text/javascript" src="more/js/jquery.hoverdir.js"></script>
<script type="text/javascript" src="more/js/elastic_grid.js"></script> -->

<!-- compress version-->
    <style type="text/css" media="screen">
    h3, h2{color: #333;}
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
        <li id="side2"><a href="images.php"> Images </a>|</li>
        <li><a href="models.php"> Models</a>|</li>
        <li><a href="photography.php"> Photographers</a>|</li>
        <li><a href="mua.php"> MUA</a>|</li>
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
<!-- Page Content -->
    <div class="container">

        <!-- Portfolio Item Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Portfolio Item</h2>
            </div>
        </div>
        <!-- /.row -->

        <!-- Portfolio Item Row -->
        <div class="row">

            <div class="col-md-8">
                <img class="img-responsive" src="http://eskipaper.com/images/images-4.jpg" alt="">
            </div>

            <div class="col-md-4">
                <h2>Stock Photo</h2>
                <p>A young Indian guy traditionally covered with colorful holi festival powder.<br>
                <strong>Image ID: </strong> 59395930<br >
                <strong>Copyright:</strong> TheFinalMiracle<br>
                <strong>Release Information:</strong> Signed model release filed with Shutterstock, Inc</p>
                <br>
                <h2>Compare License Options</h2>
                <table class="table sizes standard ">
                <tbody>
                <tr id="small-jpg" class=""data-size="small" data-product="small_jpg">
                <td class="first"><input type="radio" name="size" value="small_jpg"></td>
                <td class="size-name pad-left-small">
                Small</td>
                <td>500<span class="lighten">&#8201;x&#8201;</span>333 px</td>
                <td>6.9&quot;<span class="lighten">&#8201;x&#8201;</span>4.6&quot;&#8201;<span class="lighten">(72dpi)</span>
                <td class="text-right last">249 KB</td>
                </tr>
                <tr id="medium-jpg" class=""data-size="medium" data-product="medium_jpg">
                <td class="first"><input type="radio" name="size" value="medium_jpg"></td>
                <td class="size-name pad-left-small">
                Medium</td>
                <td>1000<span class="lighten">&#8201;x&#8201;</span>667 px</td>
                <td>3.3&quot;<span class="lighten">&#8201;x&#8201;</span>2.2&quot;&#8201;<span class="lighten">(300dpi)</span>
                <td class="text-right last">973 KB</td>
                </tr>
                <tr id="huge-jpg" class="selected"data-size="huge" data-product="huge_jpg">
                <td class="first"><input type="radio" name="size" value="huge_jpg" checked="checked"></td>
                <td class="size-name pad-left-small">
                Large</td>
                <td>2700<span class="lighten">&#8201;x&#8201;</span>1800 px</td>
                <td>9.0&quot;<span class="lighten">&#8201;x&#8201;</span>6.0&quot;&#8201;<span class="lighten">(300dpi)</span>
                <td class="text-right last">3.8 MB</td>
                </tr>
                </tbody>
                </table>

                <button class="btn btn-primary btn-download pic-download" id="pic-download" name="submit_jpg" type="submit"><i class="icon-download-alt" aria-hidden="true"></i> Download</button>
                </fieldset>
                </form>
            </div>

        </div>
        <!-- /.row -->
         <!-- Related Projects Row -->
        <div class="row">

            <div class="col-lg-12">
                <h2 class="page-header">Similar Contributor</h2>
            </div>

<?php
            /* Attempt MySQL server connection. Assuming you are running MySQL
            server with default setting (user 'root' with no password) */
            $link = mysql_connect("localhost", "mjedevel_kev", "Token2016");
            mysql_select_db( "mjedevel_ia", $link);
            // Check connection
            if ($link === false) {
                die("ERROR: Could not connect. " . mysql_connect_error());
            }
            // Attempt select query execution 
            $sql = "SELECT * FROM images WHERE genre LIKE 'models' LIMIT 4";
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
                            $img_id = $row['id'];
                            $pesa =$row['price']." KES";
                            $src_water = $file_path_small . $start;
                            $src_medium = $file_path_medium . $start;
                            $src_large = $file_path_large . $start;
                            $kbs = filesize($src_water);
                            $kbm = filesize($src_medium);
                            $kbl = filesize($src_large);
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
                            $sql_similar = "SELECT * FROM images WHERE  author  LIKE '%$copywrite%' AND genre LIKE 'models' ";
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
                                    while ($row_three = mysql_fetch_array($result_three)) {
                                        $image_zcard = $file_path_thumb.$row_three['url'];
                                    }
                                }
                            }
                            ?>
                            <div class="col-sm-3 col-xs-6">
                                <a href="#">
                                    <img class="img-responsive portfolio-item" src="<?php echo $src;?>" alt="">
                                </a>
                            </div>
                            <?php
                            }
                            
                        mysql_free_result($result);
                    } else {
                    }
                }
            // Close connection
            mysql_close($link);
            //Format Unit sizes from here 
            function formatSizeUnits($bytes)
                {
                    if ($bytes >= 1073741824)
                    {
                        $bytes = number_format($bytes / 1073741824, 2) . ' GB';
                    }
                    elseif ($bytes >= 1048576)
                    {
                        $bytes = number_format($bytes / 1048576, 2) . ' MB';
                    }
                    elseif ($bytes >= 1024)
                    {
                        $bytes = number_format($bytes / 1024, 2) . ' KB';
                    }
                    elseif ($bytes > 1)
                    {
                        $bytes = $bytes . ' bytes';
                    }
                    elseif ($bytes == 1)
                    {
                        $bytes = $bytes . ' byte';
                    }
                    else
                    {
                        $bytes = '0 bytes';
                    }

                    return $bytes;
            }

  
            ?>
       
        </div>
        <!-- /.row -->
        <hr>


    </div>
    <!-- /.container -->
<?php require_once 'templates/footer.php'; ?>
</body>
</html>