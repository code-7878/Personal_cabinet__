<?php
require_once('db.php');

$name = $_POST['username'];
$password = $_POST['password'];

if(empty($name) || empty($password)){
    echo "Заполните все поля";
} else{
    $sql = "SELECT * FROM users WHERE UserName = '$name' AND Password = '$password'";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){

            session_start();
            $_SESSION['username'] = $name; // Сохранение имени пользователя в сессии
            header('Location: http://localhost/Project/accaunt/accaunt.php');
            exit;
        }
    } else{
        echo "Try again";
    }
}
?>