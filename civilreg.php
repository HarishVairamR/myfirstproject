<?php

   $hostname = "localhost";
   $username = "root";
   $password = "";
   $databaseName = "camp";   
	
    	
	
    $name = $_POST['name'];
	$rollno = $_POST['rollno'];
	$dept = $_POST['dept'];
	$sslc = $_POST['sslc'];
	$hsc = $_POST['hsc'];
	$dip = $_POST['dip'];
	$ug = $_POST['ug'];
	$pg = $_POST['pg'];
	$arrear = $_POST['arrear'];
	$paper = $_POST['paper'];
	$mailid = $_POST['mailid'];
	$cellno = $_POST['cellno'];
 
  $conn = mysqli_connect($hostname,$username,$password,$databaseName);
 
  if($conn->connect_error)
 {
    die("Connection failed: " . $conn->connect_error);
 }
 
 if(isset($_POST['submit'])){ 
 
  
 
  $query = "INSERT INTO `civil`(`name`, `rollno`, `dept`, `sslc`, `hsc`, `dip`, `ug`, `pg`, `arrear`, `paper`, `mailid`, `cellno`) VALUES 
  ('$name','$rollno','$dept','$sslc','$hsc','$dip','$ug','$pg','$arrear','$paper','$mailid','$cellno')";
 
   $result = mysqli_query($conn,$query);
 
 
 if($result)
  {
	
  header("location:viewcivil.php");	
  echo 'Record inserted successfully';
  }
  else
  {
	  echo 'insertion failed';
  }
  
 
 }
 ?>