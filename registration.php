<?php

$firstname = $_POST['firstname'];
$surname = $_POST['surname'];
$nationality = $_POST['nationality'];
$email = $_POST['email'];
$phonenumber = $_POST['phonenumber'];
$username = $_POST['username'];
$userpassword = md5($_POST['userpassword']);
$confirmpassword = md5($_POST['confirmpassword']);
$identificationNo = $_POST['identificationNo'];
$gender = $_POST['gender'];
$picture = $_POST['picture'];


$serverName = "localhost";
$userName   = "root";
$password   = "";
$dbName = "animal_db";

$conn = new mysqli($serverName, $userName, $password, $dbName);

if (mysqli_connect_errno()) {
    echo "failed connection" . mysqli_connect_error();
} else {
    $SELECT = "SELECT email From user Where email=? Limit 1";
    $INSERT = "INSERT Into user(firstname,surname,nationality,email,phonenumber,username,userpassword,confirmpassword,identificationNo,gender,picture)
                                    values(?,?,?,?,?,?,?,?,?,?,?)";
    $stmt = $conn->prepare($SELECT);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->bind_result($email);
    $stmt->store_result();
    $rnum = $stmt->num_rows;

    if ($rnum == 0) {
        $stmt->close();

        $stmt = $conn->prepare($INSERT);
        $stmt->bind_param("sssssssssss", $firstname, $surname, $nationality,$email, $phonenumber, $username, $userpassword, $confirmpassword, $identificationNo, $gender, $picture);
        $stmt->execute();
        //header("Location:login.php");
    } else {
        echo "someone already registered with that email please use a different one";
       // header('Location:sign.html');
    }
    $stmt->close();
    $conn->close();
}