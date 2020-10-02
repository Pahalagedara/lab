<?php
include "db.php";

$name=$_REQUEST['name'];
$price=$_REQUEST['price'];

$image_name = $_FILES["image"]["name"];
$image_type = $_FILES["image"]["type"];
$image_tmp_name=$_FILES["image"]["tmp_name"];
$image_data = file_get_contents($_FILES["image"]["tmp_name"]); 

$stmt = $conn->prepare("INSERT INTO images VALUES ('',?,?,?)");

$stmt->bindParam(1,$image_type);
$stmt->bindParam(2,$image_data);
$stmt->bindParam(3,$image_name);

$stmt->execute();

header("location:admin.php?message=1");



?>