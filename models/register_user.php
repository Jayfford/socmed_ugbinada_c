<?php
require 'dbconnection.php';



$un = htmlspecialchars($_POST['uname']);
$fn = htmlspecialchars($_POST['fname']);
$ln = htmlspecialchars($_POST['lname']);
$em = htmlspecialchars($_POST['email']);
$gender = htmlspecialchars($_POST['gender']);
$bdate = htmlspecialchars($_POST['bdate']);
$pass = htmlspecialchars($_POST['pass']);
$cpass = htmlspecialchars($_POST['conpass']);

echo "Username: ".$un."<br>";
echo "Firstname: ".$fn."<br>";
echo "Lastname: ".$ln."<br>";
echo "Gender: ".$gender."<br>";
echo "Birthdate: ".$bdate."<br>";
echo "Password: ".$pass."<br>";
echo "Confirm Password: ".$cpass."<br>";

$con=create_connection();

if($con->connect_error) {
    die("Connection Failed".$connect_error);
}
$uname_error=0;


$sql_uname="SELECT * FROM user WHERE username='$un'";

$result_uname=$con->query($sql_uname);

if($result_uname->num_rows>0){
    $uname_error = 1;
}

$email_error=0;


$sql_email="SELECT * FROM user WHERE email='$em'";

$result_email=$con->query($sql_email);

if($result_email->num_rows>0){
    $email_error = 1;
}

$password_error=0;

if(strcmp($pass, $cpass)!=0) {
    $password_error=1;
}

if($uname_error==0 && $email_error==0 && $password_error==0){
    
$sql_insert="INSERT INTO user VALUES(0,'$un','$fn','$ln','$em','$gender','$bdate','$pass')";

$con->query($sql_insert);

header("location:../login.php?regsuccess=1");
}
else{
    header("location:../registration.php?uname_error=".$uname_error."email_error=".$email_error."&pas_error=".$password_error);
}