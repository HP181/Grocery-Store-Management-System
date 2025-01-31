<?php
class Sales {
    private $storage;
    private $salesRecords;
    
    public function __construct() {
        $this->storage = new DataStorage();
        $this->salesRecords = $this->storage->loadData('orders') ?? [];
    }
    
    public function getTotalSales() {
        $total = 0;
        if (!empty($this->salesRecords)) {
            foreach ($this->salesRecords as $sale) {
                $total += $sale['totalPrice'];
            }
        }
        return $total;
    }
    
    public function getSalesReport() {
        return $this->salesRecords ?? [];
    }
}
?>