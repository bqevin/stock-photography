<?php
require_once 'core/init.php';
if (Session::exists('home')) {
    echo "<p>";
    echo Session::flash('home');
    echo "</p>";
}
if (Input::exists()) {
    if (Token::check(Input::get('token'))) {
        $validate = new Validate();
        $validation = $validate->check($_POST, array(
            'username' => array('required' => true),
            'password' => array('required' => true)
            ));
        if ($validation->passed()) {
            //login User
            $user = new User();
            $remember = (Input::get('remember') === 'on') ? true : false;
            $login = $user->login(Input::get('username'), Input::get('password'), $remember);
            if ($login) {
               //echo "Success";
                Redirect::to('index.php');
            } else {
                echo "Sorry, Login faied";
            }
        } else {
            foreach ($validation->errors() as $error) {
                echo $error, '<br>';
            }
        }
    }
}
?>
<?php include_once('../admin/inc/header.inc.php');?>
<style type="text/css">
input{border:1px solid #177856 !important;
      border-radius:5px !important;

}
.button{
  background-color:white !important;
  border:1px solid #177856 !important;
  color:black !important;
  border-radius:5px;


}


a{color:#177856;}
</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

</head>
<body>
    <div class="container">
        <div class="row text-center ">
            <div class="col-md-12">
                <br /><br />
                <h1><img src="logo.png"></h1>
                 <br />
            </div>
        </div>
         <div class="row ">
               
                  <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                         <i class="fa fa-user"> Log in</i>
                            </div>
                            <div class="panel-body">
                                <form role="form" action="" method="post">
                                       <br />
                                     <div class="form-group input-group">
                                            
                                           <input type="text" name="username" class="form-control" placeholder="Your Username " />
                                        </div>
                                                                              <div class="form-group input-group">
                                            
                                            <input type="password" name="password" class="form-control"  placeholder="Your Password" />
                                        </div>
                                    <div class="form-group">
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="remember" /> Remember me
                                            </label>
                                            <span class="pull-right">
                                                   <a href="#" >Forgot password ? </a> 
                                            </span>
                                        </div>
                          
                                     <input type="hidden" name="token" value="<?php echo Token::generate();?>">
                                     <button class="button btn-primary " type="submit" name="" value="Login">Log In</button>
                                    <hr />
                                    Not Signed Up? <a href="register.php" >click here </a> 
                                    </form>
                            </div>
                           
                        </div>
                    </div>
                
                
        </div>
    </div>

<?php include_once('../admin/inc/footer_scripts.inc.php'); ?>
   
</body>
</html>
