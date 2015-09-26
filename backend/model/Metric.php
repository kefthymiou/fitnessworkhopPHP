<?php

/**
 * Created by PhpStorm.
 * User: ntinos
 * Date: 22/9/2015
 * Time: 1:40 μμ
 */
include '../../backend/config/Connection.php';
class Metric extends Connection
{
    /**
     * @var
     */
    private $id;

    /**
     * @var
     */
    private $location1Thickness;

    /**
     * @var
     */
    private $location2Thickness;

    /**
     * @var
     */
    private $location3Thickness;

    /**
     * @var
     */
    private $weight;

    /**
     * @var
     */
    private $measurementDate;

    /**
     * @var
     */
    private $fat;

    /**
     * @var
     */
    private $ffmi;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getLocation1Thickness()
    {
        return $this->location1Thickness;
    }

    /**
     * @param mixed $location1Thickness
     */
    public function setLocation1Thickness($location1Thickness)
    {
        $this->location1Thickness = $location1Thickness;
    }

    /**
     * @return mixed
     */
    public function getLocation2Thickness()
    {
        return $this->location2Thickness;
    }

    /**
     * @param mixed $location2Thickness
     */
    public function setLocation2Thickness($location2Thickness)
    {
        $this->location2Thickness = $location2Thickness;
    }

    /**
     * @return mixed
     */
    public function getLocation3Thickness()
    {
        return $this->location3Thickness;
    }

    /**
     * @param mixed $location3Thickness
     */
    public function setLocation3Thickness($location3Thickness)
    {
        $this->location3Thickness = $location3Thickness;
    }

    /**
     * @return mixed
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @param mixed $weight
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
    }

    /**
     * @return mixed
     */
    public function getMeasurementDate()
    {
        return $this->measurementDate;
    }

    /**
     * @param mixed $measurementDate
     */
    public function setMeasurementDate($measurementDate)
    {
        $this->measurementDate = $measurementDate;
    }

    /**
     * @return mixed
     */
    public function getFat()
    {
        return $this->fat;
    }

    /**
     * @param mixed $fat
     */
    public function setFat($fat)
    {
        $this->fat = $fat;
    }

    /**
     * @return mixed
     */
    public function getFfmi()
    {
        return $this->ffmi;
    }

    /**
     * @param mixed $ffmi
     */
    public function setFfmi($ffmi)
    {
        $this->ffmi = $ffmi;
    }

    /**
     * @param $obj
     * @return mixed
     */
    public function insert($obj){
        $sql = "INSERT INTO metrics(location_1_thickness, location_2_thickness, location_3_thickness, weight, measurement_date, fat, ffmi) VALUES (:location1Thickness, :location2Thickness, :location3Thickness, :weight, :measurementDate, :fat, :ffmi)";
        $statement = Connection::prepare($sql);
        $statement->bindValue('location1Thickness',  $obj->location1Thickness);
        $statement->bindValue('location2Thickness', $obj->location2Thickness);
        $statement->bindValue('location3Thickness' , $obj->location3Thickness);
        $statement->bindValue('weight' , $obj->weight);
        $statement->bindValue('measurementDate' , $obj->measurementDate);
        $statement->bindValue('fat' , $obj->fat);
        $statement->bindValue('ffmi' , $obj->ffmi);
        return $statement->execute();
    }

    /**
     * @param $obj
     * @param null $id
     * @return bool
     */
    public function update($obj,$id = null){
        $sql = "UPDATE metrics SET (location_1_thickness, location_2_thickness, location_3_thickness, weight, measurement_date, fat, ffmi) VALUES (:location1Thickness, :location2Thickness, :location3Thickness, :weight, :measurementDate, :fat, :ffmi)";
        $statement = Connection::prepare($sql);
        $statement->bindValue('location_1_thickness',  $obj->location1Thickness);
        $statement->bindValue('location_2_thickness', $obj->location2Thickness);
        $statement->bindValue('location_3_thickness' , $obj->location3Thickness);
        $statement->bindValue('weight' , $obj->weight);
        $statement->bindValue('measurement_date' , $obj->measurementDate);
        $statement->bindValue('fat' , $obj->fat);
        $statement->bindValue('ffmi' , $obj->ffmi);
        return $statement->execute();
    }

    /**
     * @param $obj
     * @param null $id
     */
    public function delete($obj,$id = null){
        $sql =  "DELETE FROM metrics WHERE id = :id";
        $statement = Connection::prepare($sql);
        $statement->bindValue('id',$id);
        $statement->execute();
    }


    public function find($id = null){
        //TODO
    }

    /**
     * @return mixed
     */
    public function findAll(){
        $sql = "SELECT * FROM metrics";
        $statement = Connection::prepare($sql);
        $statement->execute();
        return $statement->fetchAll();
    }
}