<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Portal</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <b>Register</b>
        <form method="post" action="register.php">
            <input type="text" name="username" placeholder="Username" required>
            <input type="text" name="password" placeholder="Password" required>
            <input type="submit" name="register" placeholder="Register" required>
        </form>

        <b>Login</b>
        <form method="post" action="login.php">
            <input type="text" name="username" placeholder="Username" required>
            <input type="text" name="password" placeholder="Password" required>
            <input type="submit" name="login" placeholder="Login" required>
        </form>

        <script src="" async defer></script>
    </body>
</html>