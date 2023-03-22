<?php
include('./dbconnect.php');

//collecting data from the ajax request
$name=$_POST["name"];
$occ=$_POST["occupation"];
$age=$_POST["age"];
$phone=$_POST["phone"];

//inserting into the database
$query="INSERT INTO relatives(name,age,designation,contact) VALUES(?,?,?,?)";
$stmt=$pdo->prepare($query);
$stmt->bindParam(1,$name,PDO::PARAM_STR);
$stmt->bindParam(2,$age,PDO::PARAM_INT);
$stmt->bindParam(3,$occ,PDO::PARAM_STR);
$stmt->bindParam(4,$phone,PDO::PARAM_INT);
$status=$stmt->execute();
$response=[];
if(!$status){
  $response["error"]="Failed to save into database";
  echo json_encode($response);
}else{
  $response["success"]="Data added successfully into the database";
  echo json_encode($response);
}


