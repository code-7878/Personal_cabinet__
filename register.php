<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Вход в систему</title>
     <style>
          <?php echo file_get_contents("register.css"); ?>
     </style>
    <link rel="icon" href="../icons8-здание-50.png">
</head>
<body>
    <div id="background">
        <div id ="back">
            <div id = "form">
                <h1>Регистрация</h1>
                <form action="register_users.php" method="post">
                    <div class="text-field__address">
                        <label class="text-field__label__address" for="username_address"></label>
                        <input class="text-field__input__address" type="text" name="username" id="username_address" placeholder="Имя...">
                    </div>
                    <div class="text-field__password">
                        <label class="text-field__label__password" for="username_password"></label>
                        <input class="text-field__input__password" type="password" name="password" id="username_password" placeholder="Пароль...">
                    </div>
                    <div class="text-field__email" >
                        <label class="text-field__label__email" for="username_email"></label>
                        <input class="text-field__input__email" type="text" name="email" id="username_email" placeholder="Email...">
                    </div>
                        <button id="button1" type="submit">Войти</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>