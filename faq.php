<?php require_once 'templates/header.php'; ?>
<title>Frequently Asked Questions</title>
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
div.body{
	padding-right:200px;
	padding-left:200px;
	font-weight:400;
	padding-top:50px;
	font-size:20px;
	padding-bottom:200px;
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
	  <div class="body">
	  <strong><center>FAQ</center></strong><br><br>
	  	<strong>Digital Single-lens Reflex (DSLR) Cameras:</strong> They are Digital; using a chip rather than film. A Single-lens reflex camera (SLR) typically uses a mirror and prism system (hence "reflex", from the mirror's reflection) that permits the photographer to view through the lens and see exactly what will be captured, contrary to viewfinder cameras where the image could be significantly different from what will be captured.<br><br>

<strong>Dots per Inch (DPI): </strong> indicates the resolution of images; the more dots per inch, the higher the resolution.<br><br>

<strong>High Resolution Images:</strong>  The term defines Images that are sharp and finely detailed<br><br>

<strong>Model and Property Release:</strong><br><br>

A photo that contains recognizable images of people or property, need to have a model or property release form in order to sell/use the photo for commercial use.<br>

A release is a contract between a photographer and either a model or a property owner. It serves as proof that the model and/or property owner has given the photographer the permission to use and sell the photos covered by the release, without compensation beyond what is agreed on, at the time of the shoot. <br>

The main purpose of the release is to protect a photographer, stock photography agency and end-user from any future lawsuits the model or property owner may file for such as claims of defamation and invasion of privacy.<br><br>

<strong>When Should One Procure a Property Release?</strong><br><br>

The requirements for a property release aren’t as clear-cut as for a model release, because there is no specific right of privacy that attaches to property, as it does to people. Ivertise Africa recommends that a property release be obtained when the image contains When using pictures that contain clearly recognizable places, buildings, or other property (such as pets, automobiles, or artwork), a property release protects you against legal claims by the owner of the property for offenses such as invasion of property.<br>

The rule of thumb of obtaining a Property Release is; the more recognizable and unique the property (and the more the owner's identity might be connected to or determined from the property) the greater the need for a property release.<br><br>

<strong>Rights Managed:</strong> refers to a license which, upon purchase by a user, allows the one time use of the photo as specified by the license<br><br>

<strong>Royalty Free:</strong> a licence allowing clients to pay only once for an image, which can then be used for multiple projects and an unlimited time period<br><br>

<strong>Stock Photography: </strong> the supply of photographs, which are often licensed for specific uses. It is used to fulfil the needs of creative assignments instead of hiring a photographer.<br><br>

 
	  </div>
	</div>
		
<?php require_once 'templates/footer.php'; ?>
</body>
</html>		