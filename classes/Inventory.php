<?php
require_once __DIR__ . '/DataStorage.php';

class Inventory
{
    private $storage;
    private $products;

    public function __construct()
    {
        $this->storage = new DataStorage();
        $this->products = $this->storage->loadData('inventory');
    }

    public function generateUniqueProductId()
    {
        $maxId = 0;
        foreach ($this->products as $id => $product) {
            if ($id > $maxId) {
                $maxId = $id;
            }
        }
        return $maxId + 1;
    }

    public function addProduct($id, $name, $price, $quantity)
    {
        $this->products[$id] = [
            'name' => $name,
            'price' => floatval($price),
            'quantity' => intval($quantity)
        ];
        $this->storage->saveData('inventory', $this->products);
    }

    public function updateQuantity($id, $newQuantity)
    {
        if (isset($this->products[$id])) {
            $this->products[$id]['quantity'] = intval($newQuantity);
            $this->storage->saveData('inventory', $this->products);
            return true;
        }
        return false;
    }

    public function getProduct($id)
    {
        return isset($this->products[$id]) ? $this->products[$id] : null;
    }

    public function getAllProducts()
    {
        return $this->products;
    }
}
?>