<?php
  //session_start();
  
   require_once 'templates/header.php'; ?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="less/css/demo.css" />
<link rel="stylesheet" type="text/css" href="less/css/tabc.css" />
<script src="//code.jquery.com/jquery-1.10.2.js"></script> 
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<style type="text/css"> 
  #submit{
  margin-left:-5px;
  border-radius:5px; 
  padding:5px;
  margin-left:-5px;
  width:50px;
  height:45px;
  border:none !important;
  }
li{list-style:none !important;}
  img.logo{border:0px;}
  img{border:0.2px solid gray;}
  #register{
  border-radius:5px;
  color:black;
  border:1px solid #177856;
  margin-top:25px;
  padding:5px;
  }
  select{font-size:10px;}
  option{font-size:10px;}
  #login{
  border-radius:5px;
  color:black;
  border:1px solid #177856;
  margin-top:25px;
  }
 
  i#no{font-size:13px;}
  #tag{ 
  width: 40%;
  height:45px !important;
  padding:10px; 
  border:none;
  border-radius:5px;
  border-bottom:1px solid gray;
  }
  #sel1{width:160px;
 }
  form{width:70%;
 
  padding:5px;
  margin-left:300px;
  
  }
  
  #h3{background-color:white!important;
    color:#177856 !important;
  }
  #side{margin-left:270px;}
  #side2{margin-left:100px;}
  select.form-control{overflow:hidden;
   -webkit-appearance: none;
    -moz-appearance: none;
    text-indent: 1px;
    text-overflow: '';
    border:none;
    border-left:1px solid gray;
    padding:5px !important;
    height:45px!important;
    border-radius:5px !important;
   
    font-size:15px !important;
  }
  div.top_right{border:none !important ;}
  div.tabs{padding:none!important;}
  /*body{width:1300px!important;}*/
</style>
</head>
<body>
  <?php
    $page_title="Index";
    ?>

     
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
            <i class="fa 5x fa-cart-plus"> </i> <span class="badge" id="comparison-count"><?php echo $cart_count; ?></span>
            </a>
          </li>
        <li ><a><i id ="no"class="fa fa-phone">+254705825655</i></a></li>
        <li ><a href="register.php"><i class="fa fa-user-plus"></i> Sign  Up </a> </li>
       <li ><a href="users/login.php" id="loginButton"><i class="fa fa-user"></i> Log  in</a>    
        </li>
      </ul>
    </div>
    </div>
    
      <!--/.nav-collapse -->
      <div class="clearfix"></div>
    </div>
  </div>
  
<div class="banner">


 <div class="bar">
    
         
              <form  class="input "action="search.php" method="post">
            
                 <select name="category" class="form-control" id="sel1">
                    <option>Images</option>
                    <option>Photographers</option>
                   <option>Models</option>
                 </select>
                 <input placeholder="Enter Keyword to search"  id="tag" name="search_text"   required="required"></input> <button id="submit" type="submit" class=" button btn-primary" ><i class="fa fa-search"></i></button>
               
              </form>
           
    </div>
    <h1 id="h3">African Commercial Photography through Stock Photography and Assignment Photography. We also provide Models and Makeup artist services for your advertising needs.</h1>
  </div>
  <section class="category" >
    <div class="container">
      <div class="row">
        <div>
          <!-- Nav tabs -->
      <div id="tabs" class="tabs">
        <nav>
          <ul>
            <li><a href="#stock"><i class="fa fa-image"></i> <span>Stock Images</span></a></li>
            <li><a href="#photography"><i class="fa fa-camera"></i> <span>Photography</span></a></li>
            <li><a href="#models" ><i class="fa fa-user"></i> <span>Models</span></a></li>
            <li><a href="#mua"><i class="fa fa-paint-brush"></i> <span>Make-Up Artists</span></a></li>
          </ul>
        </nav>
        <div class="content">
          <section id="stock">
<?php
                    $link = mysql_connect("localhost", "mjedevel_kev", "Token2016");
                    
                    mysql_select_db( "mjedevel_ia", $link);
                    
                    // Check connection
                    if($link === false){
                      die("ERROR: Could not connect. " . mysqli_connect_error());
                      }
                    
                    
                    
                    
                    
                    // Attempt select query execution
                    $sql = "SELECT * FROM images WHERE `genre` = 'images'";
                    if($result = mysql_query($sql)){
                          if(mysql_num_rows($result) > 0){
                            while($row = mysql_fetch_array($result)){
                    
                              $file_path_thumb = 'users/assets/images/thumbs/';
                              $file_path_small = 'users/assets/images/small/';
                              $file_path_medium = 'users/assets/images/medium/';
                              $file_path_large= 'users/assets/images/original/';
                    
                              $start =  $row['url'];
                              $title = $row['title'];
                              $id  = $row['id'];
                               $genre = $row['genre'];
                    
                              $ref = $genre.".php";
                              $price = '$'.' '.$row['price'];
                              $price_medium = '$'.' '.$row['price'];
                              $price_large = '$'.' '.$row['price'];
                    
                              $copywrite = $row['author'];
                              $description = $row['description'];
                    
                              $src_water=$file_path_small.$start;
                              $src_medium=$file_path_medium.$start;
                              $src_large=$file_path_large.$start;
                              $src = $file_path_thumb.$start;
                    
                              
                    
                    
                    $_SESSION['regName'] = "michael";
                    
                    
                            ?>
                  <li>
                    <a href="<?php echo $ref ?>"><img src="<?php echo $src ?>" alt="not in folder"/></a>
                    </form>
                  </li>
                  <?php
                    }
                    // Close result set
                    mysql_free_result($result);
                    } else{
                    }
                    } else{
                    }
                    // Close connection
                    mysql_close($link);
                    ?>
          </section>
          <section id="photography">
 <?php
                  $link = mysql_connect("localhost", "mjedevel_kev", "Token2016");
                  
                  mysql_select_db( "mjedevel_ia", $link);
                  
                  // Check connection
                  if($link === false){
                    die("ERROR: Could not connect. " . mysqli_connect_error());
                    }
                  
                  
                  
                  
                  
                  // Attempt select query execution
                  $sql = "SELECT * FROM images WHERE `genre` = 'photography'";
                  if($result = mysql_query($sql)){
                        if(mysql_num_rows($result) > 0){
                          while($row = mysql_fetch_array($result)){
                  
                            $file_path_thumb = 'users/assets/images/thumbs/';
                            $file_path_small = 'users/assets/images/small/';
                            $file_path_medium = 'users/assets/images/medium/';
                            $file_path_large= 'users/assets/images/original/';
                  
                            $start =  $row['url'];
                            $title = $row['title'];
                            $id  = $row['id'];
                             $genre = $row['genre'];
                  
                            $ref = $genre.".php";
                            $price = '$'.' '.$row['price'];
                            $price_medium = '$'.' '.$row['price'];
                            $price_large = '$'.' '.$row['price'];
                  
                            $copywrite = $row['author'];
                            $description = $row['description'];
                  
                            $src_water=$file_path_small.$start;
                            $src_medium=$file_path_medium.$start;
                            $src_large=$file_path_large.$start;
                            $src = $file_path_thumb.$start;
                  
                            
                  
                  
                  $_SESSION['regName'] = "michael";
                  
                  
                          ?>
                <li>
                  <a href="<?php echo $ref ?>"><img src="<?php echo $src ?>" alt="not in folder"/></a>
                  </form>
                </li>
                <?php
                  }
                  // Close result set
                  mysql_free_result($result);
                  } else{
                  }
                  } else{
                  }
                  // Close connection
                  mysql_close($link);
                  ?>
          </section>
          <section id="models">
<?php
                  $link = mysql_connect("localhost", "mjedevel_kev", "Token2016");
                  
                  mysql_select_db( "mjedevel_ia", $link);
                  
                  // Check connection
                  if($link === false){
                    die("ERROR: Could not connect. " . mysqli_connect_error());
                    }
                  
                  
                  
                  
                  
                  // Attempt select query execution
                  $sql = "SELECT * FROM images WHERE `genre` = 'models'";
                  if($result = mysql_query($sql)){
                        if(mysql_num_rows($result) > 0){
                          while($row = mysql_fetch_array($result)){
                  
                            $file_path_thumb = 'users/assets/images/thumbs/';
                            $file_path_small = 'users/assets/images/small/';
                            $file_path_medium = 'users/assets/images/medium/';
                            $file_path_large= 'users/assets/images/original/';
                  
                            $start =  $row['url'];
                            $title = $row['title'];
                            $id  = $row['id'];
                             $genre = $row['genre'];
                  
                            $ref = $genre.".php";
                            $price = '$'.' '.$row['price'];
                            $price_medium = '$'.' '.$row['price'];
                            $price_large = '$'.' '.$row['price'];
                  
                            $copywrite = $row['author'];
                            $description = $row['description'];
                  
                            $src_water=$file_path_small.$start;
                            $src_medium=$file_path_medium.$start;
                            $src_large=$file_path_large.$start;
                            $src = $file_path_thumb.$start;
                  
                            
                  
                  
                  $_SESSION['regName'] = "michael";
                  
                  
                          ?>
                <li>
                  <a href="<?php echo $ref ?>"><img src="<?php echo $src ?>" alt="not in folder"/></a>
                  </form>
                </li>
                <?php
                  }
                  // Close result set
                  mysql_free_result($result);
                  } else{
                  }
                  } else{
                  }
                  // Close connection
                  mysql_close($link);
                  ?>
          </section>
          <section id="mua">
<?php
                  $link = mysql_connect("localhost", "mjedevel_kev", "Token2016");
                  
                  mysql_select_db( "mjedevel_ia", $link);
                  
                  // Check connection
                  if($link === false){
                    die("ERROR: Could not connect. " . mysqli_connect_error());
                    }
                  
                  
                  
                  
                  
                  // Attempt select query execution
                  $sql = "SELECT * FROM images WHERE `genre` = 'mua'";
                  if($result = mysql_query($sql)){
                        if(mysql_num_rows($result) > 0){
                          while($row = mysql_fetch_array($result)){
                  
                            $file_path_thumb = 'users/assets/images/thumbs/';
                            $file_path_small = 'users/assets/images/small/';
                            $file_path_medium = 'users/assets/images/medium/';
                            $file_path_large= 'users/assets/images/original/';
                  
                            $start =  $row['url'];
                            $title = $row['title'];
                            $id  = $row['id'];
                             $genre = $row['genre'];
                  
                            $ref = $genre.".php";
                            $price = '$'.' '.$row['price'];
                            $price_medium = '$'.' '.$row['price'];
                            $price_large = '$'.' '.$row['price'];
                  
                            $copywrite = $row['author'];
                            $description = $row['description'];
                  
                            $src_water=$file_path_small.$start;
                            $src_medium=$file_path_medium.$start;
                            $src_large=$file_path_large.$start;
                            $src = $file_path_thumb.$start;
                  
                            
                  
                  
                  $_SESSION['regName'] = "michael";
                  
                  
                          ?>
                <li>
                  <a href="<?php echo $ref ?>"><img src="<?php echo $src ?>" alt="not in folder"/></a>
                  </form>
                </li>
                <?php
                  }
                  // Close result set
                  mysql_free_result($result);
                  } else{
                  }
                  } else{
                  }
                  // Close connection
                  mysql_close($link);
                  ?>
          </section>
        </div><!-- /content -->
      </div><!-- /tabs -->

        </div>
      </div>
    </div>
  </section>
  <script src="assets/js/jquery.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="less/js/cbpFWTabs.js"></script>
  <script>
    $(function(){
      Grid.init();
    });
    </script>
    <script type="text/javascript">
      new CBPFWTabs( document.getElementById( 'tabs' ) );
    </script>
  <?php require_once 'templates/footer_home.php'; ?>
</body>
</html>