<?php
  /*
  *Author: Kevin Barasa
  *Phone : +254724778017
  *Email : kevin.barasa001@gmail.com
  */
  error_reporting(0);
  require_once 'core/init.php';
  //$user = DB::getInstance()->query("SELECT username FROM users WHERE username =?", array("Kevin"));
  //$user = DB::getInstance()->get('users', array('username','=','Kevin'));
  $user = DB::getInstance()->query("SELECT * FROM users");
  if (!$user->count()) {
      echo "No User(s)!";
  }
  // else{
  //     //echo $user->first()->username;
  //     foreach ($user->results() as $user) {
  //         echo $user->username, '<br>', $user->email,'<br>',  $user->name,'<br><br>';
  //     }
  // }
  
  // if (Session::exists('success')) {
  //     echo "<p>";
  //     echo Session::flash('success');
  //     echo "</p>";
  // }
  if (Session::exists('home')) {
      echo "<p>";
      echo Session::flash('home');
      echo "</p>";
  }
  $user = new User;
  if ($user->isLoggedIn()) { 
    if ( $user->data()->city !=null OR $user->data()->eye !=null ) {?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="CloudCore Technologies">
    <meta name="keyword" content="Stock photography">
    <title>Ivertise Africa | Connecting brands with artists</title>
    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="https://npmcdn.com/flickity@1.1/dist/flickity.css">
    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,100,700,900' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="ivert.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript">
      $( document ).ready(function() {
      $("#upload").click(function(){

        setTimeout(function(){
            $("#dynamic").load("load/uploadm.php"); 
        }, 3000);
        $("#dynamic").load("load/loading.html");
         
      });
      });
    </script>
    <style>
     .gallery-cell{width:30%;}
    </style>
  </head>
  <body>
    <section id="container" >
      <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg" style="padding-top:5px;" >
        <div class="sidebar-toggle-box">
          <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
        </div>
        <!--logo start-->
        <a href="index.php" class="logo"><b><img src="logo.png"></b></a>
        <!--logo end-->
        <div class="nav notify-row" id="top_menu">
          <!--  notification start -->
          <ul class="nav top-menu">
            <!-- settings start -->
            <!-- settings end -->
            <!-- inbox dropdown start-->
            <li id="header_inbox_bar" class="dropdown">
              <a data-toggle="dropdown" class="dropdown-toggle" href="#">
              <i class="fa fa-envelope-o"></i>
              <span class="badge bg-theme">0</span>
              </a>
              <ul class="dropdown-menu extended inbox">
                <div class="notify-arrow notify-arrow-green"></div>
                <li>
                  <p class="green">You have 0 new messages</p>
                </li>
                <li>
                  <a href="index.php#">
                  <span class="photo"><img alt="avatar" src="http://assets.coolhunting.com/coolhunting/mt_asset_cache/assets_c/2012/08/african-lookbook1-thumb-1000x667-45859.jpg"></span>
                  <span class="subject">
                  <span class="from">Admin</span>
                  <span class="time">Just now</span>
                  </span>
                  <span class="message">
                  Hi, welcome to Ivertisie Africa!
                  </span>
                  </a>
                </li>
                <li>
                  <a href="#">See all messages</a>
                </li>
              </ul>
            </li>
            <!-- inbox dropdown end -->
          </ul>
          <!--  notification end -->
        </div>
        <div class="top-menu">
          <ul class="nav pull-right top-menu">
            <!-- <li><a class="logout" href="../cart.html"> <i class="fa fa-shopping-cart"></i> Cart</a></li> -->
            <li><a class="logout" href="logout.php"><i class="fa fa-sign-out"></i> Sign-out </a></li>
          </ul>
        </div>
      </header>
      <!--header end-->
      <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
      <aside>
        <div id="sidebar"  class="nav-collapse " style="padding-top:20px;">
          <!-- sidebar menu start-->
          <ul class="sidebar-menu" id="nav-accordion">
           <!--  <h5 class="centered"><a href="display.php?user=<?php echo $user->data()->username; ?>"><?php echo $user->data()->name; ?></a></h5> -->
            <?php 
              $email = $user->data()->email; 
              $_SESSION['email'] = $email;
              ?>
            <li class="mt">
              <a href="display.php?user=<?php echo $user->data()->username; ?>">
              <i class="fa fa-dashboard"></i>
              <span>Profile</span>
              </a>
            </li>
            <li class="sub-menu">
              <a href="javascript:;" >
                <!-- <i class="fa fa-money"></i> -->
                <span>Payment History <i class="fa fa-chevron-down"></i></span>
              </a>
              <ul class="sub">
                <li><a  href="#">Balance</a></li>
                <li><a  href="#">Cash Accumulated</a></li>
                <!-- <li><a  href="#">Visa</a></li> -->
              </ul>
            </li>
            <li class="sub-menu">
              <a class="active" href="models.php" >
              <i class="fa fa-user"></i>
              <span>Account Details</span>
              </a>
            </li>
            <li class="sub-menu">
              <a href="models.php" >
              <i class="fa fa-pencil"></i>
              <span>Edit profile</span>
              </a>
            </li>
            <li class="sub-menu">
              <a  href="mgallery.php" >
              <i class="fa fa-image"></i>
              <span>Portfolio gallery</span>
              </a>
            </li>
            <li class="sub-menu">
              <a  href="mapproved.php" >
              <i class="fa fa-thumbs-up"></i>
              <span>Approved photos</span>
              </a>
            </li>
            <li class="sub-menu">
              <a href="mdisapproved.php" >
              <i class="fa fa-thumbs-down"></i>
              <span>Disapproved photos</span>
              </a>
            </li>
            <li class="sub-menu">
              <a href="javascript:;"  >
              <i class="fa fa-cloud-download"></i>
              <span>Download History</span>
              </a>
            </li>
            <!--                   <li class="sub-menu">
              <a href="javascript:;" >
                  <i class="fa fa-book"></i>
                  <span>Buy Licences</span>
              </a>
              <ul class="sub">
                  <li><a  href="#">Public</a></li>
                  <li><a  href="#">General</a></li>
              
              </ul>
              </li> -->
          </ul>
          <!-- sidebar menu end-->
    </section>
    <!--/wrapper -->
    </section><!-- /MAIN CONTENT -->
    <section id="main-content">
      <section class="wrapper site-min-height"  id="dynamic">
        <link href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css" rel="stylesheet" media="screen">
        <h1>Models Dashboard</h1>
        <div class="container">
          <div class="row user-menu-container square">
            <div class="col-md-7 user-details">
              <div class="row coralbg white">
                <div class="col-md-6 no-pad">
                  <div class="user-pad">
                    <h3>Welcome back, <?php echo $user->data()->name; ?></h3>
                    <h4 class="white"><i class="fa fa-check-circle-o"></i> <?php echo $user->data()->city; ?>, <?php echo $user->data()->country; ?></h4>
                    <h4 class="white"><i class="fa fa-twitter"></i> <?php echo $user->data()->twitter; ?></h4>
                    <span>
                    <button id="upload"  type="button" class="btn btn-labeled btn-info">
                    <span class="btn-label"><i class="fa fa-pencil"></i></span>Upload Photos
                    </button>
                    </span>
                  </div>
                </div>
                <div class="col-md-6 no-pad">
                  <div class="user-image">
                    <img src="http://cdn.quotationof.com/images/modeling-quotes-1.jpg" class="img-responsive thumbnail">
                  </div>
                </div>
              </div>
              <div class="row overview">
                <div class="col-md-4 user-pad text-center">
                  <h3>Uploads</h3>
                  <h4>0</h4>
                </div>
                <div class="col-md-4 user-pad text-center">
                  <h3>Downloads</h3>
                  <h4>0</h4>
                </div>
                <div class="col-md-4 user-pad text-center">
                  <h3>Appreciations</h3>
                  <h4>0</h4>
                </div>
              </div>
            </div>
            <div class="col-md-1 user-menu-btns">
              <div class="btn-group-vertical square" id="responsive">
                <a href="#" class="btn btn-block btn-default active">
                <i class="fa fa-bell-o fa-3x"></i>
                </a>
                <a href="#" class="btn btn-default">
                <i class="fa fa-envelope-o fa-3x"></i>
                </a>
                <a href="#" class="btn btn-default">
                <i class="fa fa-laptop fa-3x"></i>
                </a>
                <a href="#" class="btn btn-default">
                <i class="fa fa-cloud-upload fa-3x"></i>
                </a>
              </div>
            </div>
            <div class="col-md-4 user-menu user-pad">
              <div class="user-menu-content active">
                <h3>
                  Recent Updates
                </h3>
                <ul class="user-menu-list">
                  <li>
                    <h4><i class="fa fa-user coral"></i> Ivertise adds ZCard for models</h4>
                  </li>
                  <li>
                    <h4><i class="fa fa-heart-o coral"></i> You can now refine search images.</h4>
                  </li>
                  <li>
                    <h4><i class="fa fa-paper-plane-o coral"></i> Directly chat with admin</h4>
                  </li>
                  <li>
                    <button type="button" class="btn btn-labeled btn-success" href="#">
                    <span class="btn-label"><i class="fa fa-bell-o"></i></span>View all activity</button>
                  </li>
                </ul>
              </div>
              <!-- <div class="user-menu-content ">
                <h3>
                  Your Inbox
                </h3>
                <ul class="user-menu-list">
                  <li>
                    <h4>From Roselyn Smith <small class="coral"><strong>NEW</strong> <i class="fa fa-clock-o"></i> 7:42 A.M.</small></h4>
                  </li>
                  <li>
                    <h4>From Jonathan Hawkins <small class="coral"><i class="fa fa-clock-o"></i> 10:42 A.M.</small></h4>
                  </li>
                  <li>
                    <h4>From Georgia Jennings <small class="coral"><i class="fa fa-clock-o"></i> 10:42 A.M.</small></h4>
                  </li>
                  <li>
                    <button type="button" class="btn btn-labeled btn-danger" href="#">
                    <span class="btn-label"><i class="fa fa-envelope-o"></i></span>View All Messages</button>
                  </li>
                </ul>
              </div> -->
            </div>
          </div>
        </div>
        <div class="row mt gallery js-flickity" data-flickity-options='{ "wrapAround": true ,"imagesLoaded": true,  "pageDots": false, "autoPlay": true}'>
          <?php
            $img = DB::getInstance()->query("SELECT * FROM images WHERE author = '$email' AND genre='models' ");
            if (!$img->count()) {
            echo "No photos uploaded by you. You need some help doing so?";
            }else{
            //echo $img->first()->username;
            foreach ($img->results() as $item) {
            echo '<div class="gallery-cell col-lg-4 col-md-4 col-sm-4 col-xs-12 desc">
            <div class="project-wrapper">
            <div class="project">
                <div class="photo-wrapper">
                    <div class="photo">
                      <a class="fancybox" href="assets/images/medium/',$item->url,'"><img class="img-responsive" src="assets/images/medium/',$item->url,'" alt="Your Image has an error loading. Delete & upload new copy"></a>
                    </div>
                    <div class="overlay"></div>
                </div>
            </div>
            </div>
            </div>';
            }
            }
            ?>
        </div>
        <!-- /row -->
      </section>
    </section>
    <!--main content end-->
    <!--footer start-->
    <footer class="site-footer">
      <div class="text-center">
        Copyright IvertiseAfrica 2016. 
        <a href="blank.html#" class="go-top">
        <i class="fa fa-angle-up"></i>
        </a>
      </div>
    </footer>
    <!--footer end-->
    </section>
    <!-- js placed at the end of the document so the pages load faster -->
    <script src="https://npmcdn.com/flickity@1.1/dist/flickity.pkgd.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/jquery-ui-1.9.2.custom.min.js"></script>
    <script src="../assets/js/jquery.ui.touch-punch.min.js"></script>
    <script class="include" type="text/javascript" src="../assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="../assets/js/jquery.scrollTo.min.js"></script>
    <script src="../assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <!--common script for all pages-->
    <script src="../assets/js/common-scripts.js"></script>
    <!--script for this page-->
    <script>
      //custom select box
      
      $(function(){
          $('select.styled').customSelect();
      });
      $(document).ready(function() {
      var $btnSets = $('#responsive'),
      $btnLinks = $btnSets.find('a');
      
      $btnLinks.click(function(e) {
        e.preventDefault();
        $(this).siblings('a.active').removeClass("active");
        $(this).addClass("active");
        var index = $(this).index();
        $("div.user-menu>div.user-menu-content").removeClass("active");
        $("div.user-menu>div.user-menu-content").eq(index).addClass("active");
      });
      });
      
      $( document ).ready(function() {
      $("[rel='tooltip']").tooltip();
      
      $('.view').hover(
        function(){
            $(this).find('.caption').slideDown(250); //.fadeIn(250)
        },
        function(){
            $(this).find('.caption').slideUp(250); //.fadeOut(205)
        }
      );
      });
    </script>
</html>
<?php } 
  Redirect::to('mcomplete.php');
  } else{
    Redirect::to('../');
  } ?>