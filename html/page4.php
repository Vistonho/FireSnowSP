<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Регистрация</title>
    <link rel="stylesheet" href="../css/master.css">
</head>
<body>

    <!-- <img src="img/image1.jpg" style="width: 100%; height: 100%;"> -->


    <form action="" method="POST">
        <div class="register-form">
            <input type="text" name="login" placeholder="Введите логин:">
            <input type="text" name="password" placeholder="Введите пароль:">
            <input type="text" name="confirm_password" placeholder="Подтвердите пароль:">
            <input type="text" name="FIO" placeholder="Введите ФИО:">
            <input type="text" name="date" placeholder="Введите дату рождения:">
            <input type="text" name="email" placeholder="Введите почту:">
            <input type="submit" name="button">
        </div>
    </form>

    <?php
        


        $login = $_POST["login"];
        $pass = $_POST["password"];

        $mysql = new mysqli('localhost', 'root', '', 'exam');

        $mysql -> query("INSERT INTO `user` (`login`, `pass`)
            VALUES('$login', '$password')");
        $mysql -> close();
    ?>
    
</body>
</html>