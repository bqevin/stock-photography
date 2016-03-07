<?php require_once 'templates/header.php'; ?>
<style>
a{background-color: !important;
border-radius:10px;
border:1 px solid #177856 !important;

}
</style>
</head>
<body>
	<div class="header">	
      <div class="container"> 
  	     <div class="logo">
			<h1><a href="#"><img src="assets/img/logo.png" alt=""></a></h1>
		 </div>
		 <div class="top_right">
		   <ul>
			<li><a href="register.php"><i class="fa fa-user-plus"> Register</i></a></li>|
			<li class="login" >
				 <div id="loginContainer"><a href="#" id="loginButton"><span> <i class="fa fa-user"> Login</i></span></a>
					  <div id="loginBox">                
						  <form id="loginForm">
			                <fieldset id="body">
			                	<fieldset>
			                          <label for="email">Email Address</label>
			                          <input type="text" name="email" id="email">
			                    </fieldset>
			                    <fieldset>
			                            <label for="password">Password</label>
			                            <input type="password" name="password" id="password">
			                     </fieldset>
			                    <input type="submit" id="login" value="Sign in">
			                	<label for="checkbox"><input type="checkbox" id="checkbox"> <i>Remember me</i></label>
			            	</fieldset>
			                 <span><a href="#">Forgot your password?</a></span>
						   </form>
				        </div>
			      </div>
			  </li>
		   </ul>
	     </div>
		 <div class="clearfix"></div>
		</div>
	</div>
	<div class="price">
		<div class="container">
   	   	 	<h2>Pricing Plans</h2>
   	   		<div class="col-md-4 span4">
   	   			<div class="plan-options">
   	   				<div class="plan-price">
   	   					<p class="plan-name">Gold</p>
						<strong>$20.99</strong>/mo
					</div>
					<ul class="plan-details">
						<li>Lorem ipsum dolor sit amet</li>
						<li>Consectetur adipiscing elit</li>
						<li><strong>Eiusmod</strong> tempor incididunt</li>
						<li>Ut labore et dolore magna aliqua</li>
						<li>Ut enim ad minim veniam</li>
					</ul>
					<a class="btn_4" href="register.php">Register</a>
				</div>
			 </div>
   	   		<div class="col-md-4 span4">
   	   			<div class="plan-options">
   	   				<div class="plan-price">
   	   					<p class="plan-name">Silver</p>
						<strong>$13.99</strong>/mo
					</div>
					<ul class="plan-details">
						<li>Lorem ipsum dolor sit amet</li>
						<li>Consectetur adipiscing elit</li>
						<li><strong>Eiusmod</strong> tempor incididunt</li>
						<li>Ut labore et dolore magna aliqua</li>
						<li>Ut enim ad minim veniam</li>
					</ul>
					<a class="btn_4" href="register.php">Register</a>
				</div>
			 </div>
			 <div class="col-md-4 span4">
   	   			<div class="plan-options">
   	   				<div class="plan-price">
   	   					<p class="plan-name">Starter</p>
						<strong>$12.99</strong>/mo
					</div>
					<ul class="plan-details">
						<li>Lorem ipsum dolor sit amet</li>
						<li>Consectetur adipiscing elit</li>
						<li><strong>Eiusmod</strong> tempor incididunt</li>
						<li>Ut labore et dolore magna aliqua</li>
						<li>Ut enim ad minim veniam</li>
					</ul>
					<a class="btn_4" href="register.php">Register</a>
				</div>
			 </div>
			 <div class="clearfix"> </div>
   	   	 </div>
	</div>
	<?php require_once 'templates/footer.php'; ?>
</body>
</html>		