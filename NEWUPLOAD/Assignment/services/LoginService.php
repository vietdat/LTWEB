<?php
  include("../Model/Connection.php");
  include("../Model/InteractDB.php");
  //SELECT DATABASE ACCOUNT
  //
  function selectDataLoginFromDatabase($username, $password){
    $connect = connectDB();
    $tableName = "account";
    $fieldName = "*";
    $condition = "Username = '$username' AND Password = '$password'";
    $SQL = selectDB($tableName,$fieldName,$condition);
    $result = queryDB($connect,$SQL);
    if (mysqli_num_rows($result)>0){
      $row = mysqli_fetch_assoc($result);
      return $row;
    }
    else{
      return null;
    }
  }
  //INSERT ACCOUNT
  function insertDataAccount($value){
    $connect = connectDB();
    $tableName = " account ";
    $stringField = " (Username,Password,Fullname,SNID,Email,Birthday) ";
    $SQL = insertDB($tableName,$stringField,$value);
    $result = queryDB($connect,$SQL);
    return $result;
  }
?>
