<?php 
session_start();  
require_once 'templates/header.php'; ?>
    <link rel="stylesheet" type="text/css" href="less/css/default.css" />
    <link rel="stylesheet" type="text/css" href="less/css/component.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/flickity@1.1/dist/flickity.css">
    <script src="less/js/modernizr.custom.js"></script>
    <script src="https://unpkg.com/flickity@1.1/dist/flickity.pkgd.js"></script>
  </head>
  <style type="text/css">
   #side{margin-left:270px;}
  #side2{margin-left:100px;}
  .w_sidebar{width:200px;
  margin-top:10px;
  }
  .stock_box{border-radius:15px !important;}
  #submit{
  margin-left:-5px;
  border-radius:5px;
  padding:5px;
  margin-left:-5px;
  width:50px;
  height:50px;
  border:none !important;
  } 
  .modalDialog {
    position: fixed;
    font-family: Arial, Helvetica, sans-serif;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    background: rgba(0, 0, 0, 0.8);
    z-index: 99999;
    opacity:0;
    -webkit-transition: opacity 400ms ease-in;
    -moz-transition: opacity 400ms ease-in;
    transition: opacity 400ms ease-in;
    pointer-events: none;
}
.modalDialog:target {
    opacity:1;
    pointer-events: auto;
}
h2{height:10px !important;
width:150px !important; 
}
.modalDialog > div {
    width: 600px;
    position: relative;
    margin: 10% auto;
    margin-top:35px !important;
    padding: 5px 20px 13px 20px;
    border-radius: 10px;
    background: #fff;
    background: -moz-linear-gradient(#fff, #999);
    background: -webkit-linear-gradient(#fff, #999);
    background: -o-linear-gradient(#fff, #999);
}
.close {
    background: #606061;
    color: #FFFFFF;
    line-height: 25px;
    position: absolute;
    right: -12px;
    text-align: center;
    top: -10px;
    width: 24px;
    text-decoration: none;
    font-weight: bold;
    -webkit-border-radius: 12px;
    -moz-border-radius: 12px;
    border-radius: 12px;
    -moz-box-shadow: 1px 1px 3px #000;
    -webkit-box-shadow: 1px 1px 3px #000;
    box-shadow: 1px 1px 3px #000;
}
.close:hover {
    background: #00d9ff;
}
.w_sidebar{background-color:transparent !important;}
label{color:white !important;}
  </style>
  <script type="text/javascript">
    $('.js-flickity').flickity({
      // options
      cellAlign: 'left',
      pageDots: false,
      imagesLoaded: true,
      contain: true,
      autoPlay:true
    });
  </script>
  <body>
      <div class="top_right">
      <h1><a href="index.php"><img class="logo" src="assets/img/logo.png" alt=""></a></h1>
      <ul>
        <li id="side2"><a href="images.php">Images </a>|</li> 
        <li><a href="models.php">Models</a>|</li> 
        <li><a href="photography.php">Photographers</a>|</li> 
        <li><a href="mua.php">MUA</a>|</li>
        <li id="side" <?php echo $page_title=="Cart" ? "class='active'" : ""; ?> >
            <a href="templates/cart.php">
            <?php
              // count products in cart
              $cart_count=count($_SESSION['cart_items']);
            ?>
            <i class="fa fa-cart-plus"> </i> <span class="badge" id="comparison-count"><?php echo $cart_count; ?></span>
            </a>
          </li>
        <li ><a><i id ="no"class="fa fa-phone">+254705825655</i></a></li>
        <li ><a href="register.php"><i class="fa fa-user-plus"></i> Sign  Up </a> </li>
       <li ><a href="users/login.php" id="loginButton"><i class="fa fa-user"></i> Log  in</a>    
        </li>
      </ul>
    </div>
     
        <!--/.nav-collapse -->
        <div class="clearfix"></div>
      </div>
      </div>
    <div class="container">
      <!--/ Codrops top bar -->
      <header class="clearfix">
        <h1>Ivertise Photography <span>Pro shots taken by our photographers</span></h1>
        <form id="mailing" name="mailinglist" method="post">
        <center>
        <div class="ui-widget">
                      <input type="text" id="tag" class="tag_img" name="search_text" required="required" > 
                      <button type="submit" name="photographers-submit"  id="submit"   class=" button btn-primary" ><i class="fa fa-search"></i></button>
          </div></center>
        </form>
        <a href="#openModal">Refine Search</a>

<div id="openModal" class="modalDialog">
    <div>	<a href="#close" title="Close" class="close">X</a>

        	<h2>Refine Search</h2>

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
          
<input class="submit"type="submit" name="contact-submit" value="Search" />
         
        </div>
      </div>
    </div>
</div>
      </header>
      <div class="main">
        <ul id="og-grid" class="og-grid">
          <?php
            /* Attempt MySQL server connection. Assuming you are running MySQL
            server with default setting (user 'root' with no password) */
            $link = mysql_connect("localhost", "mjedevel_kev", "Token2016");
            mysql_select_db( "mjedevel_ia", $link);
            // Check connection
            if($link === false){
              die("ERROR: Could not connect. " . mysql_connect_error());
              }
              //declaring variable
              $input = $_POST["search_text"]; 
              $gender = $_POST["search_gender"]; 
              $nationality = $_POST["search_nationality"];              
              $country = $_POST["search_country"]; 
              $age = $_POST["search_age"]; 
              $height = $_POST["search_height"]; 
              $waist = $_POST["search_waist"]; 
            // Attempt select query execution 
            $sql = "SELECT * FROM images WHERE genre LIKE 'photography'";
            $sql2 = "SELECT * FROM images WHERE keywords LIKE '$input' AND genre LIKE 'photography' ";
            $sql3 = "SELECT * FROM images WHERE keywords='$gender' OR keywords='$nationality'  AND genre LIKE 'photography' ";
            if (!empty($_POST['photographers-submit'])) {
            if($result = mysql_query($sql2,$link)){
                  if(mysql_num_rows($result) > 0){
                    while($row = mysql_fetch_array($result)){
                      $file_path_thumb = 'users/assets/images/thumbs/';
                      $file_path_small = 'users/assets/images/small/';
                      $file_path_medium = 'users/assets/images/medium/';
                      $file_path_large= 'users/assets/images/original/';
                      $copywrite = $row['author'];
                      $description = $row['description'];          
                      $start =  $row['url'];
                      $title=$row['title'];
                      $src_water=$file_path_small.$start;
                      $src_medium=$file_path_medium.$start;
                      $src_large=$file_path_large.$start;
                      $src = $file_path_thumb.$start;
                      $test = getimagesize($file_path_thumb.$start);
                      $test_medium = getimagesize($file_path_medium.$start);
                      $test_large = getimagesize($file_path_large.$start);
                      $filesize = "";
                      $size = "";
                      $size_medium = "";
                      $size_large = "";
                      $width = $test[0];
                      $height = $test[1];
                      $width_medium = $test_medium[0];
                      $height_medium = $test_medium[1];
                      $width_large = $test_large[0];
                      $height_large = $test_large[1];
                     $image_category ='';
                     $sql_zcard  = "SELECT * FROM users WHERE email LIKE  '%$copywrite%' ";
                     $sql_similar = "SELECT * FROM images WHERE  author  LIKE '%$copywrite%' AND genre LIKE 'photography'";
                    if($result_two = mysql_query($sql_zcard,$link)){
                     if(mysql_num_rows($result_two) > 0){
                     while($row_two = mysql_fetch_array($result_two)){
                      $copywrite ='Name: '.$row_two['name'];
                      $price = 'Height: '.$row_two['height'];
                      $price_medium = 'Weight :'.$row_two['weight'];
                      $price_large = 'Bust:'.$row_two['bust'];
                      $dimension_small = 'Country:'.$row_two['country'];
                        }
                      }
                    }
                    $title='';
                     if($result_three = mysql_query($sql_similar,$link)){
                     if(mysql_num_rows($result_three) > 0){
                     while($row_three = mysql_fetch_array($result_three)){   
                            $image_zcard = $file_path_thumb.$row_three['url'];
                            $myArray .= "<img src = $image_zcard>";
                            $title =    $arr[] = $myArray;
                          } 
                        } 
                      }
                      $zcard = $title;                                       
            ?> 
          <li >
            <a href="" data-largesrc="<?php echo $src_water ?>"  data-title="<?php $copywrite ?>"
              data-price="<?php echo $price ?>" data-price_medium="<?php echo $price_medium ?>" data-price_large="<?php echo $price_large ?>"
              data-size="<?php echo $size ?>"  data-size_medium="<?php echo $size_medium ?>"   data-size_large="<?php echo $size_large ?>"
              data-description="{$description} | {$price} | " data-copywrite="<?php echo $copywrite ?>"
              data-image_category="<?php echo $image_category  ?>" data-dimension_small="<?php echo $dimension_small ?>"
              data-dimension_medium="<?php echo $dimension_medium ?>"    data-dimension_large="<?php echo $dimension_large ?>"
                data-zcard="<?php echo $zcard ?>"  
              data><img src="<?php echo $src ?>" alt="not in folder"/>
            </a> 
          </li>
          <?php
            }
            // Close result set
            mysql_free_result($result);
            } else{

            }
          }
        } else if (!empty($_POST['contact-submit'])) {
            if($result = mysql_query($sql3,$link)){
            if(mysql_num_rows($result) > 0){
            while($row = mysql_fetch_array($result)){
              $file_path_thumb = 'users/assets/images/thumbs/';
              $file_path_small = 'users/assets/images/small/';
              $file_path_medium = 'users/assets/images/medium/';
              $file_path_large= 'users/assets/images/original/';
              $start =  $row['url'];
              $copywrite = $row['author'];
              $description = $row['description'];   
              $src_water=$file_path_small.$start;
              $src_medium=$file_path_medium.$start;
              $src_large=$file_path_large.$start;
              $src = $file_path_thumb.$start;
              $test = getimagesize($file_path_thumb.$start);
              $test_medium = getimagesize($file_path_medium.$start);
              $test_large = getimagesize($file_path_large.$start);
              $filesize = "";
              $size = "";
              $size_medium = "";
              $size_large = "";
              $width = $test[0];
              $height = $test[1];
              $width_medium = $test_medium[0];
              $height_medium = $test_medium[1];
              $width_large = $test_large[0];
              $height_large = $test_large[1];
              $image_category ='';
             $sql_zcard  = "SELECT * FROM users WHERE email LIKE  '%$copywrite%' ";
             $sql_similar = "SELECT * FROM images WHERE  author  LIKE '%$copywrite%' AND genre LIKE 'photography'";
            if($result_two = mysql_query($sql_zcard,$link)){
             if(mysql_num_rows($result_two) > 0){
             while($row_two = mysql_fetch_array($result_two)){
              $copywrite = $row_two['name'];
              $price = 'height:'.$row_two['height'];
              $price_medium = 'weight :'.$row_two['weight'];
              $price_large = 'bust:'.$row_two['bust'];
              $dimension_small = 'county:'.$row_two['country'];
            }
          }
        }
             if($result_three = mysql_query($sql_similar,$link)){
             if(mysql_num_rows($result_three) > 0){
             while($row_three = mysql_fetch_array($result_three)){ 
                     $image_zcard = $file_path_thumb.$row_three['url'];
                     $myArray .= "<img src = $image_zcard>";
                     $title =    $arr[] = $myArray;
                   } 
                 } 
               }
               $zcard = $title;                             
            ?> 
          <li >
            <a href="" data-largesrc="<?php echo $src_water ?>"  data-title="<?php $title ?>"
              data-price="<?php echo $price ?>" data-price_medium="<?php echo $price_medium ?>" data-price_large="<?php echo $price_large ?>"
              data-size="<?php echo $size ?>"  data-size_medium="<?php echo $size_medium ?>"   data-size_large="<?php echo $size_large ?>"
              data-description="<?php echo $description  ?>" data-copywrite="<?php echo $copywrite ?>"
              data-image_category="<?php echo $image_category  ?>" data-dimension_small="<?php echo $dimension_small ?>"
              data-dimension_medium="<?php echo $dimension_medium ?>"    data-dimension_large="<?php echo $dimension_large ?>"
                data-zcard="<?php echo $zcard ?>"  
              data><img src="<?php echo $src ?>" alt="not in folder"/>
            </a> 
          </li>
          <?php
            }
            // Close result set
            mysql_free_result($result);
            } else{
            }
          }
        } else{
          if($result = mysql_query($sql,$link)){
            if(mysql_num_rows($result) > 0){
              while($row = mysql_fetch_array($result)){
              $file_path_thumb = 'users/assets/images/thumbs/';
              $file_path_small = 'users/assets/images/small/';
              $file_path_medium = 'users/assets/images/medium/';
              $file_path_large= 'users/assets/images/original/';
              $copywrite = $row['author'];
              $description = $row['description'];
              $start =  $row['url']; 
              $src_water=$file_path_small.$start;
              $src_medium=$file_path_medium.$start;
              $src_large=$file_path_large.$start;
              $src = $file_path_thumb.$start;
              $test = getimagesize($file_path_thumb.$start);
              $test_medium = getimagesize($file_path_medium.$start);
              $test_large = getimagesize($file_path_large.$start);
              $filesize = "";
              $size = "";
              $size_medium = "";
              $size_large = "";
              $width = $test[0];
              $height = $test[1];
              $width_medium = $test_medium[0];
              $height_medium = $test_medium[1];
              $width_large = $test_large[0];
              $height_large = $test_large[1];
            $image_category ='';
             $sql_zcard  = "SELECT * FROM users WHERE email LIKE  '%$copywrite%' ";
             $sql_similar = "SELECT * FROM images WHERE  author  LIKE '%$copywrite%' AND genre LIKE 'photography' ";
            if($result_two = mysql_query($sql_zcard,$link)){
             if(mysql_num_rows($result_two) > 0){
             while($row_two = mysql_fetch_array($result_two)){
                      $copywrite = $row_two['name'];
                       $price = 'height:'.$row_two['height'];
                       $price_medium = 'weight :'.$row_two['weight'];
                       $price_large = 'bust:'.$row_two['bust'];
                       $size_small = 'country:'.$row_two['country'];
                     }
                   }
                 }
            $title='';
             if($result_three = mysql_query($sql_similar,$link)){
             if(mysql_num_rows($result_three) > 0){
             while($row_three = mysql_fetch_array($result_three)){
                     $image_zcard = $file_path_thumb.$row_three['url'];
                     $myArray .= "<img src = $image_zcard />";
                              $title =    $arr[] = $myArray;
                    } 
                  } 
                }     
                 $zcard = $title;                              
            ?> 
          <li>
            <a  class ="trial"href="" data-largesrc="<?php echo $src_water ?>"  data-title="<?php echo $copywrite ?>"
              data-price="<?php echo $price ?>" data-price_medium="<?php echo $price_medium ?>" data-price_large="<?php echo $price_large ?>"
              data-size="<?php echo $size ?>"  data-size_medium="<?php echo $size_medium ?>"   data-size_large="<?php echo $size_large ?>"
              data-description="<?php echo $description  ?>" data-copywrite="<?php echo $copywrite ?>"
              data-image_category="<?php echo $image_category  ?>" data-dimension_small="<?php echo $dimension_small ?>"
              data-dimension_medium="<?php echo $dimension_medium ?>"    data-dimension_large="<?php echo $dimension_large ?>"
                data-zcard="<?php echo $zcard ?>"  
              data><img src="<?php echo $src ?>" alt="not in folder"/>
            </a>
          </li>
          <?php
            }
            // Close result set
            mysql_free_result($result);
            } else{ 
            }
          }
        }
            // Close connection
            mysql_close($link);
            ?>
        </ul>
      </div>
    </div>
    <?php require_once 'templates/footer.php'; ?>
    <!-- /container -->
    <script src="less/js/grid.js"></script>
    <script>
      $(function() {
        Grid.init();
      });
    </script>
  </body>
</html>