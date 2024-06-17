<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Личный кабинет</title>
    <link rel="icon" href="../icons8-здание-50.png">
    <style>
              <?php echo file_get_contents("accaunt.css"); ?>
    </style>
</head>
<body>
    <div id="background">
        <div id ="back">
            <div id = "form">
            <div class='no'>
            <?php
                require_once('db.php');
                session_start();
                if(isset($_SESSION['username'])) {
                        $userName = $_SESSION['username'];
                }
            ?>
            </div>
            <div class="Name">
                <?php

                    // SQL-запрос для выборки данных пользователя на основе его имени
                    $sql = "SELECT * FROM users WHERE UserName = '$userName'";
                    $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            $row = $result->fetch_assoc();
                            $userID = $row["UserID"];
                            $userName = $row["UserName"];

                            // Здесь можно отобразить информацию о пользователе, например:
                            echo "Добро пожаловать, $userName!";
                        }

                ?>
            </div>
            <div class = "Price">
                <?php
                $sql = "SELECT UserID
                       FROM users
                       WHERE UserName = '$userName'";
                $result = $conn->query($sql);
                while($row = $result->fetch_assoc()) {
                   $numID =  $row["UserID"];
                }
                $sql_2 = "SELECT users.UserName, utilitybills.UtilityType, utilitybills.Amount, utilitybills.BillDate
                            FROM users
                            JOIN utilitybills ON Users.UserID = utilitybills.UserID
                            WHERE Users.UserID = '$numID'";
                $result_2 = $conn->query($sql_2);
                if ($result_2->num_rows > 0) {
                    while($row_2 = $result_2->fetch_assoc()) {
                         echo "<div class='info'>" . $row_2["UtilityType"]. "</div>";
                         echo "<div class='sum'> Итог <div class='cost'>" . $row_2["Amount"]. "</div></div>";
                         echo "<div class='month'>" . $row_2["BillDate"]. "</div>";;
                    } 
                } else {
                    echo "Нет данных о счетах.";
                }
                ?>
            </div>
            </div>
        </div>
    </div>
</body>
</html>