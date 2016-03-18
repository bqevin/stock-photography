<?php require_once 'templates/header.php'; ?>
<title>Ivertise Africa  | Support &Contact</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Quicksand:300,400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
<script src="js/menu_jquery.js"></script> 
<style type="text/css">
input.text{border:1px solid #177856 !important;
      border-radius:5px;
}
textarea{border:1px solid #177856 !important;
      border-radius:5px;}
      button.button{
      border:1px solid #177856 !important;
      border-radius:5px;
      background-color:white;
      color:black;
      }
div.top_right{border:none !important ;background:none !important;}
      #side{margin-left:270px;}
  #side2{margin-left:100px;}
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
	  <div class="container">
	  	 <div class="map">
			<small><iframe width="100%" height="900" src="http://www.maps.ie/create-google-map/map.php?width=100%&amp;height=600&amp;hl=en&amp;q=Karen%2CNairobi%20%2CKenya+(Ivertise%20Africa)&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=A&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="http://www.maps.ie/create-google-map/">Google Maps iframe generator</a> by <a href="http://www.maps.ie/">Maps.ie</iframe>View Larger Map</a></small>
		 </div>
		   <div class="section group">
				<div class="col-md-9 support_left">
				  <h3>Contact Form</h3>
				  <form>
					<div class="contact-to">
                     	<input type="text" class="text" value="Name..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name...';}">
					 	<input type="text" class="text" value="Email..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email...';}" style="margin-left: 10px">
					 	<input type="text" class="text" value="Subject..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Subject...';}" style="margin-left: 10px">
					</div>
					<div class="text2">
	                   <textarea value="Message:" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}">Message..</textarea>
	                </div>
	               <span><a href="mailto:info@ivertiseafrica.com"><button type="submit" class="button btn-primary" value="Submit">Submit</button></a></span>
	                <div class="clearfix"></div>
	              </form>
				</div>
                <div class="col-md-3 support_right">
			       <h3>Contact Info</h3>
			       <div class="address">
				                <p><i class="fa fa-home"></i></p><p>Karen,</p><p>Kenya</p>
						 <p><i class="fa fa-phone-square"></i> : +254705825655</p>
				   		<p><i class="fa fa-fax"></i> : (000) 000 00 00 0</p>
				 	 	<p><i class="fa fa-envelope-o"></i> : <span>info@ivertiseafrica.com</span></p>
				   		<p><i class="fa fa-mouse-pointer"></i> <i class="fa fa-facebook">  Facebook</i>, <i class="fa fa-twitter">  Twitter</i>
				   </div>
			    </div>
		        <div class="clearfix"></div>	
		   </div>
	  </div>
	</div>
	<?php require_once 'templates/footer.php'; ?>
</body>
</html>		