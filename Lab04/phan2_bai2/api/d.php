<?php
    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json; charset=UTF-8');

    include_once('../config/db.php');
    include_once('../model/data.php');

    $data = json_decode(file_get_contents("php://input"));
    $db = new db();
    $connect = $db->connect();

    $data1 = new Data($connect);
    // $result = $data1->add('7','Laptop', 'Hay', 1000,'');
    $result = $data1->delete($data->id);

    
?>