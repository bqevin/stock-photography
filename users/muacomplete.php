<?php
  /*
  *Author: Kevin Barasa
  *Phone : +254724778017
  *Email : kevin.barasa001@gmail.com
  */
  require_once 'core/init.php';
  if (Input::exists()) {
    if (Token::check(Input::get('token'))) {
        $validate = new Validate();
        $validation = $validate->check($_POST, array(
            //NB:Fiels matches field names in DB
            'phone' => array(
                'required' => true,
                'min' => 10,
                'max' => 20,
                //table name to check if value already exists
                //'unique' => 'users'
                ),
            'country' => array(
                'required' => true,
                //'min' => 6
                ),
            'twitter' => array(
                'required' => true,
                ),
            'gender' => array(
                'required' => true,
                ),
            'dob' => array(
                'required' => true,
                )
            ));
        if ($validation->passed()) {
            $user = new User();
            // die();
            try{
                //DB names
                $user->update(array(
                        'phone' => Input::get('phone'),
                        'country' => Input::get('country'),
                        'dob' => Input::get('dob'),
                        'twitter' => Input::get('twitter'),
                        'mua' => Input::get('mua'),
                        'gender' => Input::get('gender')
                    ));
                Session::flash('home', 'Thank you for completing the registration process :)');
               Redirect::to('mua.php');
            }catch(Exception $e){
                die($e->getMessage());
                //Alternative is rediect user to a failure page
            }
            //echo "Passed!";
            // Session::flash('success', 'You  have registered succefully!');
  
        }else{
            //State Errors
            foreach($validation->errors() as $error){
                echo $error, '<br>';
                //echo Input::get('username');
            };
        }
    }
  }
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
      font-weight: 400;
      }
      a{color: #177856;
      text-decoration: none;}
      #main-content {
      margin-left: 100px;
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
      .smpl-step > .smpl-step-step.disabled > .progress > .progress-bar {
      background-color: #9C9C9B;
      }
      .smpl-step > .smpl-step-step:first-child.active > .progress > .progress-bar {
      width: 0%;
      }
      .smpl-step > .smpl-step-step:last-child.active > .progress > .progress-bar {
      width: 100%;
      }
      .smpl-step > .smpl-step-step.disabled > .smpl-step-icon {
      background-color: #9C9C9B;
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
      background: #9C9C9B;
      }
      .smpl-step > .smpl-step-step.disabled a.smpl-step-icon {
      pointer-events: none;
      }
      #register{
      border-radius:5px;
      color:black; 
      border:1px solid #177856;
      margin-top:25px;
      }
      aside {float:left;}
      aside.right{float:right;}
      input[type="text"],input[type="password"],input[type="email"]{
      border-color:#177856 !important;
      border-radius:5px!important;
      border:1px solid;
      }
      input{border-color:#177856 !important;
      border-radius:5px!important;
      border:1px solid;}
      .sn{margin-bottom:20px;
      padding:5px;
      margin-left:10px;}
      #loginContainer{
      border-radius:50px;
      }
      span.big{font-size:20px;}
      label.sn{margin-right:50px;}
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
    </section>
    <!--/wrapper -->
    </section><!-- /MAIN CONTENT -->
    <section id="main-content">
      <section class="wrapper site-min-height">
        <link href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css" rel="stylesheet" media="screen">
        <div class="container">
          <div class="row">
            <h1><strong><?php echo $user->data()->name; ?></strong>, your Make-up Artist profile is almost done&raquo;</h1>
          </div>
          <br><br>
          <div class="row smpl-step" style="border-bottom: 0; min-width: 500px;">
            <div class="col-xs-3 smpl-step-step complete">
              <div class="text-center smpl-step-num">Basic Information</div>
              <div class="progress">
                <div class="progress-bar"></div>
              </div>
              <a class="smpl-step-icon"><i class="fa fa-check" style="font-size: 55px; padding-left: 5px; padding-top: 10px; color: #fff;"></i></a>
              <div class="smpl-step-info text-center">Login details provided </div>
            </div>
            <div class="col-xs-3 smpl-step-step complete">
              <div class="text-center smpl-step-num">Profession</div>
              <div class="progress">
                <div class="progress-bar"></div>
              </div>
              <a class="smpl-step-icon"><i class="fa fa-check" style="font-size: 55px; padding-left: 5px; padding-top: 10px; color: #fff;"></i></a>
              <div class="smpl-step-info text-center">Pro photographer</div>
            </div>
            <div class="col-xs-3 smpl-step-step disabled">
              <div class="text-center smpl-step-num">Crucial information</div>
              <div class="progress">
                <div class="progress-bar"></div>
              </div>
              <a class="smpl-step-icon"><i class="fa fa-pencil" style="font-size: 45px; padding-left: 17px; padding-top: 11px; color: #fff;"></i></a>
              <div class="smpl-step-info text-center">Client need this to hire/buy from you</div>
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
          <hr>
          <div class="row">
          <aside>
            <form action="" method="post">
              <label class="lsn">*Phone Number</label><br><input name="phone" value="<?php echo Input::get('phone');?>" class="sn" placeholder="Contact Number" type="text">
              <br>
              <label class="lsn">*Country</label><br><input type="text" class="sn" value="<?php echo Input::get('country');?>" name="country" placeholder="Country of Origin" >
              <br>
          </aside>
          <aside class="right">
              <label class="lsn">  *Date of Birth </label><br>
              <input  class="lsn" name="dob" min="1950-01-01" max="2013-01-01" type="date" placeholder="yy-mm-dd "><br>
              <br>
              <input type="radio" name="gender" value="Male" checked> Male
              <input type="radio" name="gender" value="Female"> Female
              <input type="radio" name="gender" value="Other"> Other
              <br><br>
              <label class="lsn">*Link to twitter</label><br>
              <input type="text" name="twitter" value="<?php echo Input::get('twitter');?>" placeholder="http://www.twitter.com/@username">
              <br>
              <input type="hidden" name="token" value="<?php echo Token::generate();?>">
              <input type="hidden" name="mua" value="mua">
              <button id="register" type="submit" value="submit" class= button btn-primary>Complete</button>
          </aside>
            </form>
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