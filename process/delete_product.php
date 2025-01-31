<?php
require_once '../classes/Inventory.php';

$inventory = new Inventory();
$id = $_POST['id'] ?? null;

if ($id !== null) {
    $products = $inventory->getAllProducts();

    if (isset($products[$id])) {
        unset($products[$id]);
        file_put_contents(__DIR__ . '/../data/inventory.json', json_encode($products, JSON_PRETTY_PRINT));
        echo "success";
        exit;
    }
}

echo "error";