<?php
class Database
{
    var $conn;
    function __construct()
    {
        $this->conn=mysqli_connect("localhost","root","","heatmap");
    }
    
    //to search
  function GetData($select)
  {
    $result= mysqli_query($this->conn,$select);
    return $result;
  }

}

?>