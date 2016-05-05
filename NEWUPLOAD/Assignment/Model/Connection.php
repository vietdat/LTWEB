<?php
	function connectDB(){
		$dbhandle = mysqli_connect('localhost','root','','furniture') or die("Can't connect to Server");
		return $dbhandle;
	}
?>
