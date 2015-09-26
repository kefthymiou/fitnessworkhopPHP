<?php
/**
 * Created by PhpStorm.
 * User: ntinos
 * Date: 22/9/2015
 * Time: 6:27 μμ
 */
include '../../backend/controller/MetricController.php';

//$data = file_get_contents('php://input');
$data = file_get_contents('insert.json');
$obj =  json_decode($data);


if(!empty($data)) {
    $metricController = new MetricController();
    $metricController->insert($obj);
    header('Location:list.php');
    }