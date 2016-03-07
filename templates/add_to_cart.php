<?php
session_start();

// get the product id
$id = isset($_GET['id']) ? $_GET['id'] : "";
$title = isset($_GET['title']) ? $_GET['title'] : "";
$quantity = isset($_GET['quantity']) ? $_GET['quantity'] : "";

/*
 * check if the 'cart' session array was created
 * if it is NOT, create the 'cart' session array
 */
if(!isset($_SESSION['cart_items'])){
    $_SESSION['cart_items'] = array();
}

// check if the item is in the array, if it is, do not add
if(array_key_exists($id, $_SESSION['cart_items'])){
    // redirect to product list and tell the user it was added to cart
    header('Location: ../index.php?action=exists&id' . $id . '&title=' . $title);
}

// else, add the item to the array
else{
    $_SESSION['cart_items'][$id]=$title;

    // redirect to product list and tell the user it was added to cart
    header('Location: ../index.php?action=added&id' . $id . '&title=' . $title);
}
?>
