<?php
/*
*
*Author: Kevin Barasa
*Phone : +254724778017
*Email : kevin.barasa001@gmail.com
*/
include_once('core/init.php');
//$user = DB::getInstance()->query("SELECT username FROM users WHERE username =?", array("Kevin"));
//$user = DB::getInstance()->get('users', array('username','=','Kevin'));
$user = DB::getInstance()->query("SELECT * FROM users");
// if (Session::exists('success')) {
//     echo "<p>";
//     echo Session::flash('success');
//     echo "</p>";
// }
$user = new User;
if ($user->isLoggedIn()) { 

include_once('inc/header.inc.php');
?>
</head>
<body>
<div id="fb-root"></div>
<!--Facebook Code -->
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=1473070283004984";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!--Facebook Code -->

    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Ivertise Africa</a>
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> <?php echo $user->data()->username;?> &nbsp; | <a href="logout.php" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>
           <!-- /. NAV TOP  -->
<!--SIDEBAR-->
<?php include_once('inc/sidebar.inc.php'); ?>
<!--SIDEBAR-->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Admin Dashboard</h2>
                        <h5>Welcome <?php echo $user->data()->name;?> , Love to see you back. </h5>
                    </div>
                </div>
                 <!-- /. ROW  -->
                  <hr />
                <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-6">
      <div class="panel panel-back noti-box">
                <span class="icon-box bg-color-red set-icon">
                    <i class="fa fa-picture-o"></i>
                </span>
                <br>
                <div class="text-box" >
                    <p class="main-text">
                    <?php echo DB::getInstance()->query("SELECT * FROM users WHERE stock='stock'")->count(); ?> Total
                    </p>
                    <p class="text-muted">Image Contributor(s)</p>
                </div>
             </div>
         </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">
      <div class="panel panel-back noti-box">
                <span class="icon-box bg-color-green set-icon">
                    <i class="fa fa-female"></i>
                </span>
                <br>
                <div class="text-box" >
                    <p class="main-text">
                    <?php echo DB::getInstance()->query("SELECT * FROM users WHERE model='model'")->count(); ?> Total
                    </p>
                    <p class="text-muted">Active Model(s)</p>
                </div>
             </div>
         </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">
      <div class="panel panel-back noti-box">
                <span class="icon-box bg-color-blue set-icon">
                    <i class="fa fa-edit"></i>
                </span>
                <br>
                <div class="text-box" >
                    <p class="main-text">
                    <?php echo DB::getInstance()->query("SELECT * FROM users WHERE mua='mua'")->count(); ?> Total
                    </p>
                    <p class="text-muted">Make-up Artist(s)</p>
                </div>
             </div>
         </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">
      <div class="panel panel-back noti-box">
                <span class="icon-box bg-color-brown set-icon">
                    <i class="fa fa-camera"></i>
                </span>
                <br>
                <div class="text-box" >
                    <p class="main-text">
                    <?php 
                    echo DB::getInstance()->query("SELECT * FROM users WHERE photographer='photographer'")->count(); ?> Total
                    </p>
                    <p class="text-muted">Pro Photographer</p>
                </div>
             </div>
         </div>
      </div>
                 <!-- /. ROW  -->
                <hr />
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12">
      <div class="panel panel-back adm noti-box">
                <span class="icon-box bg-color-blue">
                    <i class="fa fa-users"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text" >Other Administrators </p>
                    <p class="text-muted" >You can easily enable or disable an admin</p>
                    <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Full Name</th>
                                    <th>Username</th>
                                     <th>Email</th>
                                </tr>
                            </thead>
                            <tbody>

                            <?php
                            $index = 1;
                            $users = DB::getInstance()->query("SELECT * FROM users  ");
                            if (!$users->count()) {
                            echo "No User(s)!";
                            }else{
                                //echo $users->first()->username;
                                foreach ($users->results() as $users) {
                                    echo'<tr> <td>',$index++,'</td><td>',$users->name,'</td><td>',$users->username,'</td><td>'
                                    ,$users->email,'</td></tr>';
                                }
                            }
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                </div>
             </div>
         </div>


                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="panel back-dash" id="ss">
                         <div class="row">
                            <div class="col-xs-6"> Twitter </div>
                            <div class="col-xs-6">
                              <div class="text-temp"> <i class="fa fa-twitter fa-2x"></i> </div>
                            </div>
                            <!-- start tweets code -->                 
                            <a class="twitter-timeline" data-aria-polite="assertive"  width="300"  height="400" data-chrome="noheader" href="https://twitter.com/IvertiseAfrica" data-widget-id="697149811074715651">Tweets by @IvertiseAfrica</a>
                            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                             <!-- start tweets code -->
                          </div>
                               
                            
                             
                             
                        </div>

                    </div>
                    <div class="col-md-3 col-sm-12 col-xs-12 ">
                        <div class="panel ">
          <div class="main-temp-back" id="ss">
            <div class="panel-body">
              <div class="row">
                <div class="col-xs-6"> Facebook</div>
                <div class="col-xs-6">
                  <div class="text-temp"> <i class="fa fa-facebook"></i> </div>
                </div>
                <!--Facebook Display-->
                    <div class="fb-page" data-href="https://www.facebook.com/Ivertise-Africa-349555375204151/?fref=ts" data-tabs="timeline" data-width="300" data-height="400" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"></div>
                    <!--Facebook Display End-->
              </div>
            </div>
          </div>

        </div>

    </div>

        </div>
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("#contributors").click(function(){
        $("#page-inner").load("load/contributors.php");
    });
    $("#models").click(function(){
        $("#page-inner").load("load/models.php");
    });
    $("#mua").click(function(){
        $("#page-inner").load("load/mua.php");
    }); //photographers
    $("#photographers").click(function(){
        $("#page-inner").load("load/photographers.php");
    });
});
</script>
<?php } else {
    Redirect::to('login.php');
}
include_once('inc/footer_scripts.inc.php');
?>

</body>
</html>