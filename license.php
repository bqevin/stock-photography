<?php 
session_start();

require_once 'templates/header.php'; ?>
 
		<link rel="stylesheet" type="text/css" href="Grid/css/default.css" />
		<link rel="stylesheet" type="text/css" href="Grid/css/component.css" />
		<link rel="stylesheet" href="mike/table.css" type="text/css"/>

		<script src="Grid/js/modernizr.custom.js"></script>

  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<style type="text/css">
div.body{
	padding-right:200px;
	padding-left:200px;
	font-weight:400;
	padding-top:50px;
	font-size:20px;
	padding-bottom:200px;
}
button.en{
	border-radius:5px;
	border:1px solid #177856;
	padding:5px;
	margin-top:30px;

}
#side{margin-left:270px;}
  #side2{margin-left:100px;}
</style>
</head>
<body>

<?php
	 $page_title="Index";
	?>

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
        <div class="body"><strong><center>Licenses</center></strong><br><br>
        In Stock Photography, images are not sold; they are licensed. This means that:

    The photographer retains the copyright ownership of the photo but grants permission for other to use it.
    When customers buy images they purchase the right to use them in a particular way

There are two ways of licensing images at Ivertise Africa:<br><br>

<strong>Royalty-free (RF) :</strong> refers to the right to use an image multiple times, without paying royalty or a licence fee for each use, or some time period of use. RF images are available under a non-transferable, non-exclusive, worldwide, multiple-use license.

These images are the best choice for budget-minded designers and marketers as they have the more lenient permissible uses for both commercial and personal projects.<br><br>

<strong>Rights Managed (RM): </strong>refers to a license which, upon purchase by a user, allows the one time use of the photo as specified by the license. That is, RM licenses are granted on a pay-per-use basis, meaning the stock image can only be used for one particular project, for a set period of time, and in certain geographical areas.  Due to its more limited distribution, RM images are suited for more high profile projects.<br><br>

<strong>How Prices are Determined at Ivertise Africa</strong><br>

In order to satisfy both our clientele and contributors, the pricing of images depends on the collection the images fall under. There are three image collections based on the level of work, research, resources and artistic input involved in the images.

Image Collection and Licensing Options

image collection and licensing<br>

<strong>Royalty Free</strong><br>

The RF license is considered to be the most popular and affordable license type in stock photography. At Ivertise Africa, fees are determined by the type of image and the image resolution. The higher the resolution (determined by DPI (dots per inch) and file size) the higher the cost. Note that all our images have at least 10 Megapixels and 200 DPI. <br><br>

<strong>Rights Managed</strong><br>

Images licensed under the RM License are those considered to premium images. The images selected to be sold with an RM license have the following characteristics:

    High Demand: This requires hard work and research in order to provide tend-driven images and difficult to produce images. For example, crowd shots where the contributor has procured releases from each model are scarce and are therefore on demand.
    Difficult Settings: Images taken in locations with restricted access such as airports, hospitals and factories and the relevant property, model and any other third party releases have been procured.
    Emotion: Images where ‘authentic’ emotion is captured are rare and far between.
    Retouched Images: Images that undergo vigorous retouch resulting in high quality, attractive, clean images at high resolution.
    Only images uploaded exclusively to Ivertise Africa shall be considered.

Fees are determined on a case by case basis depending on:  the project, the term, geographical reach, media type, size of the print run or distribution and the size of reproduction.

 

 
        </div>
       
	<?php require_once 'templates/footer.php'; ?>
</body>
</html>