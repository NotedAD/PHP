<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Registration</title>
</head>
<body>
    <form action="vendor/registration.php" method="post" enctype="multipart/form-data">
        <label for="user_login">Login:</label><br>
        <input type="text" name="user_login" minlength="6" placeholder="Введите логин"><br>
        <label for="password">Password:</label><br>
        <input type="password" id="lname" name="password"  minlength="6" placeholder="Введите пароль"><br>
        <label for="password_repeat">Repeat Password:</label><br>
        <input type="password" id="lname" name="password_repeat"  minlength="6" placeholder="Повторите пароль"><br>
        <label for="email">Email:</label><br>
        <input type="email" id="lname" name="email" placeholder="Введите почту"><br>
        <label for="name_user">Name:</label><br>
        <input type="text" id="lname" name="name_user" minlength="2" placeholder="Введите имя"><br>
        <p>
            You already have an account? - <a href="index.php">log in</a>
        </p>
        <button>Зарегистриоваться</button>
    </form>
</body>
</html>