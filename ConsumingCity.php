<?php
include_once "DBClass.php";

class ConsumingCity extends Database 
{
    
    public function GetAll(){
        return parent::GetData("SELECT lng,lat from consuming_cities ORDER BY id desc ");
    }
    public function GetTopElectricity(){
        return parent::GetData("SELECT city,electricity from consuming_cities ORDER BY electricity  desc LIMIT 5");
    }
    public function GetTopNaturalGas(){
         return parent::GetData("SELECT city,natural_gas from consuming_cities ORDER BY natural_gas  desc LIMIT 5");
    }
}
