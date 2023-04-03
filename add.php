<html>
<head>
    <title>LOGIN</title>
</head>

<body>
    <h2 style="text-align:center">LOGIN</h2>
    <p>
        <img src="login.png" height="100" width="100" style="display:block; margin:auto;"/>
    </p>
    <form action="add.php" method="post" name="form1">
        <table style="margin:auto; width=25%; border=0;">
            <tr> <td>USERNAME</td> </tr>
            <tr> <td><input type="text" name="username"></td> </tr>
            
            <tr> <td>PASSWORD</td> </tr>
            <tr> <td><input type="text" name="password"></td> </tr>

            <tr><td><input type="submit" name="Submit" value="ENTER"></td> </tr>

            <tr> <td>Belum Punya Akun?</td> </tr>
            <tr> <td> <a href="signup.php"> SIGN UP </a> </td> </tr>
        </table>
    </form>


    <?php

    if(isset($_POST['Submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        include("koneksi.php");

        $hasil = mysql_query("INSERT INTO employees(username, password) VALUES('$username','$password')");

        echo "User added successfully. <a href='admin.php'>View Users</a>";
    }
    ?>
</body>
</html>