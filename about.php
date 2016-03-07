<?php require_once 'templates/header.php'; ?>
<title>Ivertise | About US</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style type="text/css">
section.main{height:400px;}

div.body{
	padding-right:200px;
	padding-left:200px;
	font-weight:400;
	padding-top:50px;
	font-size:20px;
	padding-bottom:200px;
}
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
		<div class="body">
		<Strong><center>About Us</center></strong><br><br>
		
Welcome to Ivertise Africa, We aim to make image based communication easier for Brands targeting Africans. We do so by providing access to commercial photography in the form of stock and assignment photography.


We focus on Photography because it is crucial to the promotion of business as images are a powerful tool for persuasion. Moreover, 93% of communication is nonverbal. In addition to photography, we provide professional models and makeup artists to enhance your advertising campaigns.<br><br>


<strong>Stock Photography</strong><br>


Our images of Africa depict Africa in its true form whether you seek people in an urban or rural setting, studio images, family portraits or people in business amongst other requirements; we aim to satisfy your imagery needs. Search our database and be amazed.


Our images are all High Resolution captured using Digital single-lens Reflex (DSLR) camera’s by professional photographers throughout Africa. We provide Royalty Free and Rights Managed images inclusive of release forms for your commercial use. We also have a collection of Editorial images.<br><br>


<strong>Models</strong><br>


Searching for models has never been easier, simply select the details of the type of model you seek to find and choose the model that suits your need. In addition to assignment photography uses, our models may be hired for other jobs such as Television Commercials, Brand Activation’s and Fashion Shows.<br><br>


<strong>Assignment Photography</strong><br>


Are you seeking to hire a commercial photographer? Look no further. We offer a list of photographers that practice commercial photography genres. Enquire about our database off Portrait, Product, Fashion, Event or any other type of commercial photography.<br><br>


<strong>Makeup Artists</strong><br>

Our database of Makeup artists will interpret your makeup requirements and produce both a creative and technically accurate visual representation. Contact us and for your Beauty, Fashion, Theatre or Television makeup needs.<br><br>

 
		</div>
	
<?php require_once 'templates/footer.php'; ?>
</body>
</html>		