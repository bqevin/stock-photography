<?php

require_once 'core/init.php';
include_once('inc/header.inc.php');

//var_dump(Token::check(Input::get('token')));

if (Input::exists()) {
    if (Token::check(Input::get('token'))) {
        //echo "I have been run <br>";
        //echo Input::get('username');
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
?>

</head>
<body>
    <div class="container">
        <div class="row text-center  ">
            <div class="col-md-12">
                <br /><br />
                <h2> Ivertise Africa : Register</h2>
               
                <h5>( Register yourself to get access )</h5>
                 <br />
            </div>
        </div>
         <div class="row">
               
                <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                        <strong>  New User ? Sign Up </strong>  
                            </div>
                            <div class="panel-body">
                                <form role="form" action="" method="post">
<br/>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-circle-o-notch"  ></i></span>
                                            <input name="name" value="<?php echo escape(Input::get('name'));?>" type="text" class="form-control" placeholder="Your Name" />
                                        </div>
                                     <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                                            <input type="text" name="username" value="<?php echo escape(Input::get('username'));?>" class="form-control" placeholder="Desired Username" />
                                        </div>
                                         <div class="form-group input-group">
                                            <span class="input-group-addon">@</span>
                                            <input type="text"  name="email" value="<?php echo escape(Input::get('email'));?>" class="form-control" placeholder="Your Email" />
                                        </div>
                                      <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <input type="password" name="password"  class="form-control" placeholder="Enter Password" />
                                        </div>
                                     <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <input type="password"  name="password_again" class="form-control" placeholder="Retype Password" />
                                        </div>
                                     <input type="hidden" name="token" value="<?php echo Token::generate();?>">
                                     <input type="submit"  class="btn btn-success " value="Register">
                                    <hr />
                                    Already Registered ?  <a href="login.php" >Login here</a>
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
