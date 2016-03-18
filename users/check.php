<?php
/*
*Author: Kevin Barasa
*Phone : +254724778017
*Email : kevin.barasa001@gmail.com
*/
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
if ($user->isLoggedIn()) { ?>

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
    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,100,700,900' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="ivert.css">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  <style type="text/css" media="screen">

  .container{
        font-family: "Lato",Sans-serif;
        font-weight: 800;
  }
  a{color: #177856;
    text-decoration: none;}
    #main-content {
    margin-left: 100px;
}
a:hover, a:focus {
    color: #131313;
    text-decoration: none;
}
.site-min-height {
    min-height: 400px;
}
    .smpl-step {
        border-bottom: solid 1px #e0e0e0;
        padding: 0 0 10px 0;
    }

    .smpl-step > .smpl-step-step {
        padding: 0;
        position: relative;
    }   

    .smpl-step > .smpl-step-step .smpl-step-num {
        font-size: 17px;
        margin-top: -20px;
        margin-left: 47px;
    }

    .smpl-step > .smpl-step-step .smpl-step-info {
        font-size: 14px;
        padding-top: 27px;
    }

    .smpl-step > .smpl-step-step > .smpl-step-icon {
        position: absolute;
        width: 70px;
        height: 70px;
        display: block;
        background: #177856;
        top: 45px;
        left: 50%;
        margin-top: -35px;
        margin-left: -15px;
        border-radius: 50%;
    }

    .smpl-step > .smpl-step-step > .progress {
        position: relative;
        border-radius: 0px;
        height: 8px;
        box-shadow: none;
        margin-top: 37px;
    }

   .smpl-step > .smpl-step-step > .progress > .progress-bar {
       width: 0px;
       box-shadow: none;
       background: #177856;
   }

    .smpl-step > .smpl-step-step.complete > .progress > .progress-bar {
        width: 100%;
    }

    .smpl-step > .smpl-step-step.active > .progress > .progress-bar {
        width: 50%;
    }

    .smpl-step > .smpl-step-step:first-child.active > .progress > .progress-bar {
        width: 0%;
    }

    .smpl-step > .smpl-step-step:last-child.active > .progress > .progress-bar {
        width: 100%;
    }

    .smpl-step > .smpl-step-step.disabled > .smpl-step-icon {
        background-color: #f5f5f5;
    }

    .smpl-step > .smpl-step-step.disabled > .smpl-step-icon:after {
        opacity: 0;
    }

    .smpl-step > .smpl-step-step:first-child > .progress {
        left: 50%;
        width: 50%;
    }

    .smpl-step > .smpl-step-step:last-child > .progress {
        width: 50%;
    }

    .smpl-step > .smpl-step-step.disabled a.smpl-step-icon {
        pointer-events: none;
    }
  </style>
  </head>

  <body>
  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg" style="padding-top:5px;" >
             <!--  <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div> -->
              <!--logo start-->
            <a href="../" class="logo"><b><img src="logo.png"></b></a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
                <ul class="nav top-menu">
                    <!-- settings start -->

                    <!-- settings end -->
                    <!-- inbox dropdown start-->

                    <!-- inbox dropdown end -->
                </ul>
                <!--  notification end -->
            </div>
            <div class="top-menu">
             <!--  <ul class="nav pull-right top-menu">
              <li><a class="logout" href="../cart.html"> <i class="fa fa-shopping-cart"></i> Cart</a></li>
                    <li><a class="logout" href="logout.php">Logout</a></li>
              </ul> -->
            </div>
        </header>
      <!--header end-->

      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->

      <!--sidebar start-->

        </section><!--/wrapper -->
      </section><!-- /MAIN CONTENT -->
      <section id="main-content">
          <section class="wrapper site-min-height">
            <link href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css" rel="stylesheet" media="screen">
<div class="container">
<div class="row">
  <h1>Login as &raquo; </h1>
</div>
<br><br>
    <div class="row smpl-step" style="border-bottom: 0; min-width: 500px;">
        <div class="col-xs-3 smpl-step-step complete">
            <div class="text-center smpl-step-num"><a href="contributor.php">Image Contributor</a></div>
            <div class="progress">
                <div class="progress-bar"></div>
            </div>
            <a class="smpl-step-icon"><i class="fa fa-image" style="font-size: 50px; padding-left: 5px; padding-top: 10px; color: #fff;"></i></a>
            <div class="smpl-step-info text-center">Contribute your stock photos</div>
        </div>
        <div class="col-xs-3 smpl-step-step complete">
            <div class="text-center smpl-step-num"><a href="photography.php">Photographer</a></div>
            <div class="progress">
                <div class="progress-bar"></div>
            </div>
            <a class="smpl-step-icon"><i class="fa fa-camera" style="font-size: 50px; padding-left: 5px; padding-top: 10px; color: #fff;"></i></a>
            <div class="smpl-step-info text-center">Upload your creative shots for world to see</div>
        </div>
        <div class="col-xs-3 smpl-step-step complete">           
            <div class="text-center smpl-step-num"><a href="models.php">Model</a></div>
            <div class="progress">
                <div class="progress-bar"></div>
            </div>
            <a class="smpl-step-icon"><i class="fa fa-female" style="font-size: 58px; padding-left: 15px; padding-top: 5px; color: #fff;"></i></a>
            <div class="smpl-step-info text-center">Get hired + create an online portfolio</div>
        </div>
        <div class="col-xs-3 smpl-step-step active">          
            <div class="text-center smpl-step-num"><a href="mua.php">Make-up Artist</a></div>
            <div class="progress">
                <div class="progress-bar"></div>
            </div>
            <a class="smpl-step-icon"><i class="fa fa-edit" style="font-size: 50px; padding-left: 7px; padding-top: 11px; color: #fff;"></i></a>
            <div class="smpl-step-info text-center">Showcase your work on art of beauty</div>
        </div>
       <!--  <div class="col-xs-3 smpl-step-step disabled">           
            <div class="text-center smpl-step-num">Step 4</div>
            <div class="progress">
                <div class="progress-bar"></div>
            </div>
            <a class="smpl-step-icon"><i class="fa fa-download" style="font-size: 60px; padding-left: 8px; padding-top: 4px; color: black; opacity: 0.3;"></i></a>
            <div class="smpl-step-info text-center">Download product after receiving confirmation email.</div>
        </div> -->
    </div>

</div>
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
    <script src="../assets/js/jquery.js"></script>
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

  </body>
</html>

<?php } else{
    echo "<p> You need to <a href='login.php'>log in</a> or <a href='register.php'>Register</p>";
} ?>