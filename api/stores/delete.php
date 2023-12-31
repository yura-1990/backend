<?php

use App\Models\Store;

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

include_once '../../core/Database.php';
include_once '../../models/Store.php';

$db = new Database();
$pdo = $db->connect();

$store = new Store('stores' ,$pdo);

$id = $_POST['id'] ?? die('Something went wrong');

$result=$store->delete($id);

echo json_encode($result);
