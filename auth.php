<?php 

$db = new Mysqli;
$db->connect('localhost','emma','Emma@2000','ben');

if(!$db)
{
    echo'coudnt connect to server';
}
$email =  $_POST['email'];
$password = $_POST['password'];

$password = hash('sha512',$password);



$sql =  "select * from user where email='$email' and password='$password'";
$result = $db->query($sql);

if($result->num_rows>0){
    echo("Success");
}

if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {
        echo "Register Number : " . $row['regno'] . "<br>";
        echo "Name : " . $row['name'] . "<br>";
        echo "Course : " . $row['course'] . "<br>";
        echo "Phone : " . $row['phone'] . "<br>";
        echo "Email : " . $row['email'] . "<br>";
        echo "Semester : " . $row['semester'] . "<br>";
        echo "Description : " . $row['description'] . "<br>";
        
   }
} else {
    echo "Wrong username or password.";
}
 ?>