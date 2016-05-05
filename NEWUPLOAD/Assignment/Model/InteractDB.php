<?php
  function selectDB($tableName, $stringField,$condition){
    $SQL = "SELECT ".$stringField." FROM ". $tableName." WHERE " .$condition;
    return $SQL;
  }
  function queryDB($connect,$SQL){
    $result = mysqli_query($connect,$SQL);
    return $result;
  }
?>
