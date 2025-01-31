<?php
require_once '../classes/Inventory.php';
require_once '../classes/DataStorage.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $inventory = new Inventory();

    $productId = $inventory->generateUniqueProductId();
    $productName = $_POST['productName'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];

    $inventory->addProduct($productId, $productName, $price, $quantity);

    header('Location: ../index.php?success=1');
    exit;
}
?>