<?php
$firstname = filter_input(INPUT_POST, 'firstname');
$lastname = filter_input(INPUT_POST, 'lastname');
$email = filter_input(INPUT_POST, 'email');
$password = filter_input(INPUT_POST, 'password');

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "loginandregistration";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}

$sql = "SELECT `email` FROM `register_table1` WHERE  `email`='".$email."'";
$result = $conn->query($sql);
if($result->num_rows >= 1) {
   echo "<script language='javascript'>";
            echo "alert('USER ALREADY EXISTS!')";
            echo "</script>";
}
    else{
$sql = "INSERT INTO register_table1 (firstname, lastname, email, password)
values ('$firstname','$lastname','$email','$password')";
if ($conn->query($sql)){
     echo "<script language='javascript'>";
            echo "alert('YOU HAVE REGISTERED SUCCESSFULLY!')";
            echo "</script>";

}
    }
$conn->close();


?>


