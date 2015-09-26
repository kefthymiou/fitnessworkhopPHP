<?php
/**
 * Created by PhpStorm.
 * User: ntinos
 * Date: 22/9/2015
 * Time: 1:50 μμ
 */

include '../../backend/controller/MetricController.php';
$metricController = new MetricController();

header('Content-Type: application/json');

foreach($metricController->findAll() as $metric){
    echo json_encode($metric);
}