<?php 
$db = new Mysqli;
$db->connect('localhost','emma','Emma@2000','ben');



if(!$db)
{
    echo("Connection failed");
}

$regno = $_POST['regno'];
$name = $_POST['name'];
$course = $_POST['course'];
$phn = $_POST['phn'];
$email = $_POST['email'];
$semester = $_POST['sem'];
$desc = $_POST['desc'];
$password = $_POST['password'];

$password = hash('sha512',$password);

$sql = "insert into user(regno,name,course,phone,email,semester,description,password) values ('$regno','$name','$course','$phn','$email','$semester','$desc','$password');";

$val = $db->query($sql);

if($val){
    header('location:login.html');
}



?>
