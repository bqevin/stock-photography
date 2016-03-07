<?php
require_once 'core/init.php';
if (Input::exists()) {
    if (Token::check(Input::get('token'))) {
        $validate = new Validate();
        $validation = $validate->check($_POST, array(
            //NB:Fiels matches field names in DB
            'username' => array(
                'required' => true,
                'min' => 2,
                'max' => 20,
                //table name to check if value already exists
                'unique' => 'users'
                ),
            'password' => array(
                'required' => true,
                'min' => 6
                ),
            'password_again' => array(
                'required' => true,
                'matches' => 'password'
                ),
            'name' => array(
                'required' => true,
                'min' => 2,
                'max' => 50
                )
            ));
        if ($validation->passed()) {
            $user = new User();
            $salt = Hash::salt(32);// Db is 32 length
            // die();
            try{
                //DB names
                $user->create(array(
                        'username' => Input::get('username'),
                        'password' => Hash::make(Input::get('password'), $salt),
                        'salt' => $salt,
                        'email' => Input::get('email'),
                        'name' => Input::get('name'),
                        'joined' => date('Y-m-d H:i:s'),
                        'group' => 3
                    ));
                Session::flash('home', 'Thank you for registering :)');
               Redirect::to('login.php');
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
include_once('../admin/inc/header.inc.php');
?>
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
        <div class="row text-center  ">
            <div class="col-md-12">
                <br /><br />
                <h1><img src="logo.png"></h1>
                 <br />
            </div>
        </div>
         <div class="row">
                <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                     <i class="fa fa-user-plus"> Sign Up</i> 
                            </div>
                            <div class="panel-body">
                                <form role="form" action="" method="post">
<br/>
                                        <div class="form-group input-group">
                                            
                                            <input name="name" value="<?php echo escape(Input::get('name'));?>" type="text" class="form-control" placeholder="Your Name" />
                                        </div>
                                     <div class="form-group input-group">
                                           
                                            <input type="text" name="username" value="<?php echo escape(Input::get('username'));?>" class="form-control" placeholder=" Username" />
                                        </div>
                                         <div class="form-group input-group">
                                           
                                            <input type="text"  name="email" value="<?php echo escape(Input::get('email'));?>" class="form-control" placeholder="Your Email" />
                                        </div>
                                      <div class="form-group input-group">
                                           
                                            <input type="password" name="password"  class="form-control" placeholder="Enter Password" />
                                        </div>
                                     <div class="form-group input-group">
                                            
                                            <input type="password"  name="password_again" class="form-control" placeholder="Confirm Password" />
                                        </div>
                                     <input type="hidden" name="token" value="<?php echo Token::generate();?>">
                                     <div class="form-group">
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="tandc" required="required"/> Accept T &amp; C
                                            </label>
                                            <span class="pull-right">
                                                   <a href="terms.php" >Terms and Conditons </a> 
                                            </span>
                                        </div>
                                     <button type="submit"  class="button btn-success " value="Register">Sign Up </button>
                                    <hr />
                                    Already Registered ?  <a href="login.php" >Log in here</a>
                                    </form>
                            </div>
                           
                        </div>
                    </div>
                
                
        </div>
    </div>


     <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
   
</body>
</html>