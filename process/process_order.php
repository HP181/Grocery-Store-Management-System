<?php
require_once '../classes/Order.php';
require_once '../classes/Inventory.php';
require_once '../classes/DataStorage.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $inventory = new Inventory();
    $order = new Order($_POST['customerName']);

    foreach ($_POST['products'] as $productId => $quantity) {
        if ($quantity > 0) {
            $product = $inventory->getProduct($productId);
            if ($product) {
                $order->addProduct($productId, $quantity, $product['price']);
                $inventory->updateQuantity($productId, $product['quantity'] - $quantity);
            }
        }
    }

    $order->saveOrder();

    header('Location: ../forms/place_order.php?success=1');
    exit;
}
?>