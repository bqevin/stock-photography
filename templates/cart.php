<?php
 
session_start();
error_reporting(0);

$page_title="Cart";
 include 'header.php';
?>
<link href="../ph/css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Custom Theme files -->


<div class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="container">
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li <?php echo $page_title=="Index" ? "class='active'" : ""; ?> >
                  <a href="../index.php">Back to Images</a>
              </li>

            </ul>
        </div><!--/.nav-collapse -->

    </div>
</div>
<!-- /navbar -->

<?
$action = isset($_GET['action']) ? $_GET['action'] : "";
$title = isset($_GET['title']) ? $_GET['title'] : "";

if($action=='removed'){
    echo "<div class='alert alert-info'>";
        echo "<strong>{$title}</strong> was removed from your cart!";
    echo "</div>";
}

else if($action=='quantity_updated'){
    echo "<div class='alert alert-info'>";
        echo "<strong>{$title}</strong> quantity was updated!";
    echo "</div>";
}

if(count($_SESSION['cart_items'])>0){

    // get the product ids
    $ids = "";
    foreach($_SESSION['cart_items'] as $id=>$value){
        $ids = $ids . $id . ",";
    }

    // remove the last comma
    $ids = rtrim($ids, ',');

    //start table
    echo "<table class='table table-hover table-responsive table-bordered'>";

        // our table heading
        echo "<tr>";
            echo "<th class='textAlignLeft'>Image Name</th>";
            echo "<th>Price (USD)</th>";
            echo "<th>Action</th>";
        echo "</tr>";

        $query = "SELECT id, title, price FROM images WHERE id IN ({$ids}) ORDER BY title";

        $stmt = $con->prepare( $query );
        $stmt->execute();

        $total_price=0;
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            extract($row);

            echo "<tr>";
                echo "<td>{$title}</td>";
                echo "<td>&#36;{$price}</td>";
                echo "<td>";
                    echo "<a href='remove_from_cart.php?id={$id}&title={$title}' class='btn btn-danger'>";
                        echo "<span class='glyphicon glyphicon-remove'></span> Remove from cart";
                    echo "</a>";
                echo "</td>";
            echo "</tr>";

            $total_price+=$price;
        }

        echo "<tr>";
                echo "<td><b>Total</b></td>";
                echo "<td>&#36;{$total_price}</td>";
                echo "<td>";
                    echo "<a href='#' class='btn btn-success'>";
                        echo "<span class='glyphicon glyphicon-shopping-cart'></span> Checkout";
                    echo "</a>";
                echo "</td>";
            echo "</tr>";

    echo "</table>";
}

else{
    echo "<div class='alert alert-danger'>";
        echo "<strong>No Images found</strong> in your cart!";
    echo "</div>";
}

if (isset($_POST['submit'])) {
  if(isset($_POST['radio']))
  {
    echo "You have selected :".$_POST['radio'];  //  Displaying Selected Value
  }
}

include 'layout_foot.php';

?>