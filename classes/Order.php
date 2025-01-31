<?php
class Order {
    private $storage;
    private $orderId;
    private $customerName;
    private $products = [];
    private $totalPrice = 0;
    private $orderDate;
    
    public function __construct($customerName) {
        $this->storage = new DataStorage();
        $this->orderId = uniqid();
        $this->customerName = $customerName;
        $this->orderDate = date('Y-m-d H:i:s');
    }
    
    public function addProduct($productId, $quantity, $price) {
        $this->products[$productId] = [
            'quantity' => intval($quantity),
            'price' => floatval($price)
        ];
        $this->calculateTotal();
    }
    
    private function calculateTotal() {
        $this->totalPrice = 0;
        foreach ($this->products as $product) {
            $this->totalPrice += $product['quantity'] * $product['price'];
        }
    }
    
    public function saveOrder() {
        $orders = $this->storage->loadData('orders');
        $orders[$this->orderId] = $this->getOrderSummary();
        $this->storage->saveData('orders', $orders);
    }
    
    public function getOrderSummary() {
        return [
            'orderId' => $this->orderId,
            'customerName' => $this->customerName,
            'products' => $this->products,
            'totalPrice' => $this->totalPrice,
            'orderDate' => $this->orderDate
        ];
    }
}
?>