<?php
$firstname = filter_input(INPUT_POST, 'firstname');
$lastname = filter_input(INPUT_POST, 'lastname');
$country = filter_input(INPUT_POST, 'country');
$subject = filter_input(INPUT_POST, 'subject');

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "contactus";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO contact24 (firstname, lastname, country, subject)
values ('$firstname','$lastname','$country','$subject')";
if ($conn->query($sql)){
     echo "<script language='javascript'>";
            echo "alert('Thanks for contacting us!')";
            echo "</script>";
    
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}

?>