<?php
$firstname = isset($_POST['firstname']) ? $_POST['firstname'] : '';
$lastname = isset($_POST['lastname']) ? $_POST['lastname'] : '';
$gender = isset($_POST['gender']) ? $_POST['gender'] : '';
$subject = isset($_POST['subject']) ? $_POST['subject'] : '';
//Database connection
$conn = new mysqli('localhost', 'root', '', 'contactus');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}
else{
    $stmt = $conn->prepare("insert into contact(firstname, lastname, country, subject) values(?, ?, ?, ?)");
    $stmt->bind_param("ssss", $firstname, $lastname, $country, $subject);
    $stmt->execute();
    echo "Thankyou for contacting us!";
    $stmt->close();
    $conn->close();
}
?>