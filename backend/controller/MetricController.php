<?php

/**
 * Created by PhpStorm.
 * User: ntinos
 * Date: 22/9/2015
 * Time: 1:48 μμ
 */
include '../../backend/model/Metric.php';
class MetricController
{
    /**
     * @param $obj
     * @return mixed
     */
    function insert($obj){
        $metric = new Metric();
        return $metric->insert($obj);
        header('Location:list.php');
    }

    /**
     * @param $obj
     * @param $id
     * @return mixed
     */
    function update($obj,$id){
        $metric = new Metric();
        return $metric->update($obj,$id);
    }

    /**
     * @param $obj
     * @param $id
     * @return mixed
     */
    function delete($obj,$id){
        $metric = new Metric();
        return $metric->delete($obj,$id);
    }

    /**
     * @param null $id
     */
    function find($id = null){
        //TODO
    }

    /**
     * @return mixed
     */
    function findAll(){
        $metric = new Metric();

        return $metric->findAll();
    }
}