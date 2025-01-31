<?php
require_once '../classes/Inventory.php';
require_once '../classes/DataStorage.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $inventory = new Inventory();

    $productId = $_POST['product'];
    $newQuantity = $_POST['newQuantity'];

    $inventory->updateQuantity($productId, $newQuantity);

    header('Location: ../forms/update_inventory.php?success=1');
    exit;
}
?>