<?php
include("./dbconnect.php");
$query="SELECT * FROM relatives";
$stmt=$pdo->prepare($query);
$stmt->execute();
$results=$stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($results);//sent to the browser