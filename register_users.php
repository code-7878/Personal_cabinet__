<?php
require_once('db.php');
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
if(empty($username) || empty($password) || empty($email)){
    echo "Заполните все поля";
} else{
    $sql = "INSERT INTO users (UserName, Password, Email) VALUES ('$username', '$password', '$email')";

    $conn -> query($sql);

    header('Location: http://localhost/Project/entry/entry.php');
}
?>