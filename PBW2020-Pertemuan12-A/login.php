<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <form action="proses_login.php" method="post">
            <table class="login">
                <tr>
                    <td>Username</td>
                    <td><input type="text" name="user" required></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="pass" required></td>
                </tr>
                <tr>
                    <td colspan="2" align="right"><input type="submit" value="Login"></td>
                </tr>
            </table>
        </form>
    </body>
</html>