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
  if ($user->isLoggedIn()) { 
    ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Ivertise Africa |  Connecting brands with artists</title>
    <meta name="description" content=" Connecting brands with artists" />
    <meta name="keywords" content="Ivertise Africa |  Connecting brands with artists" />
    <meta name="author" content="Kevin Barasa" />
    <link rel="shortcut icon" href="img/favicon/favicon.ico">
    <meta name="msapplication-TileColor" content="#663fb5">
    <meta name="msapplication-TileImage" content="img/favicon/mstile-144x144.png">
    <meta name="msapplication-config" content="img/favicon/browserconfig.xml">
    <meta name="theme-color" content="#663fb5">
    <link rel="stylesheet" href="css/landio.css">
  </head>

  <body>

    <!-- Navigation
    ================================================== -->

    <nav class="navbar navbar-dark bg-inverse bg-inverse-custom navbar-fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">
          <span class="icon-logo"></span>
          <span class="sr-only">Ivertise Africa</span>
        </a>
        <a class="navbar-toggler hidden-md-up pull-xs-right" data-toggle="collapse" href="#collapsingNavbar" aria-expanded="false" aria-controls="collapsingNavbar">
        &#9776;
      </a>
        <a class="navbar-toggler navbar-toggler-custom hidden-md-up pull-xs-right" data-toggle="collapse" href="#collapsingMobileUser" aria-expanded="false" aria-controls="collapsingMobileUser">
          <span class="icon-user"></span>
        </a>
        <div id="collapsingNavbar" class="collapse navbar-toggleable-custom" role="tabpanel" aria-labelledby="collapsingNavbar">
        
          <ul class="nav navbar-nav pull-xs-right">
            
            <li class="nav-item nav-item-toggable">
              <a class="nav-link" href="#" target="_blank">Welcome, <?php echo $user->data()->name; ?></a>
            </li>
            <li class="nav-item nav-item-toggable hidden-md-up">
              <form class="navbar-form">
                <input class="form-control navbar-search-input" type="text" placeholder="Type your search &amp; hit Enter&hellip;">
              </form>
            </li>
            <li class="navbar-divider hidden-sm-down"></li>
            <li class="nav-item dropdown nav-dropdown-search hidden-sm-down">
              <a class="nav-link dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="icon-search"></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right dropdown-menu-search" aria-labelledby="dropdownMenu1">
                <form class="navbar-form">
                  <input class="form-control navbar-search-input" type="text" placeholder="Type your search &amp; hit Enter&hellip;">
                </form>
              </div>
            </li>
            <li class="nav-item dropdown hidden-sm-down textselect-off">
              <a class="nav-link dropdown-toggle nav-dropdown-user" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img src="img/face5.jpg" height="40" width="40" alt="Avatar" class="img-circle"> <span class="icon-caret-down"></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right dropdown-menu-user dropdown-menu-animated" aria-labelledby="dropdownMenu2">
                <div class="media">
                  <div class="media-left">
                    <img src="img/face5.jpg" height="60" width="60" alt="Avatar" class="img-circle">
                  </div>
                  <div class="media-body media-middle">
                    <h5 class="media-heading"><?php echo $user->data()->name; ?></h5>
                    <h6><?php echo $user->data()->email; ?></h6>
                  </div>
                </div>
                <a href="display.php?user=<?php echo $user->data()->username; ?>" class="dropdown-item text-uppercase">View profile</a>
                <a href="#" class="dropdown-item text-uppercase">Upload images</a>
                <a href="#" class="dropdown-item text-uppercase">Downloads history</a>
                <a href="#" class="dropdown-item text-uppercase">Billing history</a>
                <a href="logout.php" class="dropdown-item text-uppercase text-muted">Log out</a>
                <a href="#" class="btn-circle has-gradient pull-xs-right">
                  <span class="sr-only">Edit</span>
                  <span class="icon-edit"></span>
                </a>
              </div>
            </li>
          </ul>
        </div>
        <div id="collapsingMobileUser" class="collapse navbar-toggleable-custom dropdown-menu-custom p-x-1 hidden-md-up" role="tabpanel" aria-labelledby="collapsingMobileUser">
          <div class="media m-t-1">
            <div class="media-left">
              <img src="img/face5.jpg" height="60" width="60" alt="Avatar" class="img-circle">
            </div>
            <div class="media-body media-middle">
              <h5 class="media-heading"><?php echo $user->data()->name; ?></h5>
              <h6><?php echo $user->data()->email; ?></h6>
            </div>
          </div>
            <a href="display.php?user=<?php echo $user->data()->username; ?>" class="dropdown-item text-uppercase">View profile</a>
            <a href="#" class="dropdown-item text-uppercase">Upload images</a>
            <a href="#" class="dropdown-item text-uppercase">Downloads history</a>
            <a href="#" class="dropdown-item text-uppercase">Billing history</a>
            <a href="logout.php" class="dropdown-item text-uppercase text-muted">Log out</a>
            <a href="#" class="btn-circle has-gradient pull-xs-right">
              <span class="sr-only">Edit</span>
              <span class="icon-edit"></span>
            </a>
          </div>
      </div>
    </nav>

    <!-- Hero Section
    ================================================== -->

    <header class="jumbotron bg-inverse text-xs-center center-vertically" role="banner">
      <div class="container">
        <h1 class="display-3">Ivertise Africa</h1>
        <h2 class="m-b-3">Connecting brands with artistes.</h2>
        <a class="btn btn-secondary-outline m-b-1" href="check.php" role="button">Start selling now</a>
          <div class="text-xs-center nav nav-inline social-share">
            <!-- SOCIAL icon buttons
            ================================================== -->

            <a href="#" class="btn btn-social btn-social-icon btn-social-facebook">
              <span class="icon-facebook"></span>
            </a>
            <a href="#" class="btn btn-social btn-social-icon btn-social-twitter">
              <span class="icon-twitter"></span>
            </a>
            <a href="#" class="btn btn-social btn-social-icon btn-social-google">
              <span class="icon-google"></span>
            </a>
            <a href="#" class="btn btn-social btn-social-icon btn-social-linkedin">
              <span class="icon-linkedin"></span>
            </a>
          </div>
      </div>
    </header>

    <!-- Text Content
    ================================================== -->

    <section class="section-text">
      <div class="container">
        <h3 class="text-xs-center">Make your mark on the product industry</h3>
        <div class="row p-y-3">
          <div class="col-md-5">
            <p class="wp wp-7">A posuere donec senectus suspendisse bibendum magna ridiculus a justo orci parturient suspendisse ad rhoncus cursus ut parturient viverra elit aliquam ultrices est sem. Tellus nam ad fermentum ac enim est duis facilisis congue a lacus adipiscing consequat risus consectetur scelerisque integer suspendisse a mus integer elit massa ut.</p>
          </div>
          <div class="col-md-5 col-md-offset-2 separator-x">
            <p class="wp wp-8">A posuere donec senectus suspendisse bibendum magna ridiculus a justo orci parturient suspendisse ad rhoncus cursus ut parturient viverra elit aliquam ultrices est sem. Tellus nam ad fermentum ac enim est duis facilisis congue a lacus adipiscing consequat risus consectetur scelerisque integer suspendisse a mus integer elit massa ut.</p>
          </div>
        </div>
      </div>
    </section>
    <!-- Footer
    ================================================== -->

    <footer class="section-footer bg-inverse" role="contentinfo">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-5">
            <div class="media">
              <div class="media-left">
                <span class="media-object icon-logo display-1"></span>
              </div>
              <small class="media-body media-bottom">
                &copy; Ivertise Africa 2016. <br>
                Designed by CloudCore Technologies.
              </small>
            </div>
          </div>
          <div class="col-md-6 col-lg-7">
            <ul class="nav nav-inline">
             <!--  <li class="nav-item">
                <a class="nav-link" href="./index-carousel.html"><small>NEW</small> Slides<span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item"><a class="nav-link" href="ui-elements.html">UI Kit</a></li>
              <li class="nav-item"><a class="nav-link" href="#" target="_blank">GitHub</a></li> -->
              <li class="nav-item"><a class="nav-link scroll-top" href="#totop">Back to top <span class="icon-caret-up"></span></a></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="js/landio.min.js"></script>
  </body>
</html>

<?php } else{
  Redirect::to('get_in.html');
  } ?>