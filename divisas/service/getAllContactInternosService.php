<?php
require ('../model/Model_divisas.php');

$status = new Model_divisas();

$result = $status->getAllContactExternos();

//if(count($result)){
$json_data = [
    "data" => $result
];
echo json_encode($json_data);
//}
