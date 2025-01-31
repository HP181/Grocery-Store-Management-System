<?php
require_once '../classes/Sales.php';
require_once '../classes/DataStorage.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $sales = new Sales();
    $period = $_POST['reportPeriod'];
    $comments = $_POST['comments'];

    $report = $sales->getSalesReport();

    header('Content-Type: application/json');
    echo json_encode($report);
    exit;
}
?>