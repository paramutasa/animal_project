<?php
//session_start();
require_once 'db_connection.php';
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $userpassword = $_POST['userpassword'];

    $username = stripcslashes($username);
    $userpassword = stripcslashes(md5($userpassword));

    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $userpassword);
    $result =  "SELECT * FROM user WHERE username = '$username' and userpassword = '$password'";
    $query = mysqli_query($conn, $result);

    if (mysqli_num_rows($query) > 0) {
        echo "login successful";
       // $_SESSION['username'] = $username;
        header("Location:home.php");
    } else {
        echo "Error incorrect info";
        header('Location:login_form.php');
    }
}
