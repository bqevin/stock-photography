<?php

require_once 'core/init.php';

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
            'email' => array(
                'required' => true,
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
                        'email' => Input::get('email'),
                        'password' => Hash::make(Input::get('password'), $salt),
                        'salt' => $salt,
                        'name' => Input::get('name'),
                        'joined' => date('Y-m-d H:i:s'),
                        'group' => 1
                    ));
                Session::flash('home', '<strong> Success! </strong> You have been registered and can now log in.');
               Redirect::to('users/login.php');
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

<?php require_once 'templates/header.php'; ?>
<style type="text/css">
#register{
  border-radius:5px;
  color:black; 
  border:1px solid #177856;
  margin-top:25px;

   
  
}
input[type="text"],input[type="password"],input[type="email"]{
  border-color:#177856 !important;
  border-radius:5px!important;
  border:1px solid;
  
  
}
div.top_right{border:none !important ;background:none !important;}
#side{margin-left:270px;}
  #side2{margin-left:100px;}
.sn{margin-bottom:20px;
  padding:5px;
  margin-left:10px;}
#loginContainer{
border-radius:50px;
}
i{margin-bottom:30px;
  
}
span.big{font-size:20px;}
label.sn{margin-right:50px;}
</style>
</head>
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
     <div class="clearfix"></div>
    </div>
  </div>
  <div class="register">
  <?php
  // Echo Success
  if (Session::exists('home')) {
      echo "<p style='color: #009000; font-size: inherit; padding: 0 0 40px;'>";
      echo Session::flash('home');
      echo "</p>";
  }
  ?>
    <div class="container">
<span>*required</span>
       <center><form action="" method="post">
       
         
          <i class="fa fa-user-plus"><span class ="big"> Register</span></i><br>
          
            <label class="lsn">*Full Name</label><br><input name="name" class="sn" placeholder="fullname"value="<?php echo escape(Input::get('name'));?>" type="text">
           <br>
          
            <label class="lsn">*Username</label><br><input type="text" class="sn" name="username" value="<?php echo escape(Input::get('username'));?>">
           
           <br>
            <label class="lsn">  *Email   </label><br><input value="<?php echo escape(Input::get('email'));?>" class="sn" type="email" name="email">
          <br>
          
         
          <label class="lsn" >*Password</label><br>
          <input type="password" name="password" class="sn"value="<?php echo escape(Input::get('password'));?>">
              <br>
          <label class="lsn">*Confirm Password</label><br>
          <input type="password" name="password_again" value="<?php echo escape(Input::get('password'));?>">
                                <input type="hidden" class="sn" name="token" value="<?php echo Token::generate();?>"><br>
              <br>
              <br>
              <input type="checkbox" value="" required ="required"><label class="lsn">I have read and understood the <strong><a href="terms.php">Terms and Conditons of Ivertise Africa</a></strong></label><br>
              

        
        
            
          
             <button id="register" type="submit" value="submit" class= button btn-primary>Register</button>
             <div class="clearfix"> </div>
              
           </form></center>
        </div>
       </div>
  </div>
<?php require_once 'templates/footer.php'; ?>
</body>
</html>