<?php
  function selectDB($tableName, $stringField,$condition){
    $SQL = "SELECT ".$stringField." FROM ". $tableName." WHERE " .$condition;
    return $SQL;
  }
  function insertDB($tableName, $stringField,$value){
    $SQL = "INSERT INTO ".$tableName." ".$stringField. " VALUES (".$value.")";
    return $SQL;
  }
  function queryDB($connect,$SQL){
    $result = mysqli_query($connect,$SQL);
    return $result;
  }
?>
