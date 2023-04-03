<html>
<head>
    <title>SIGN UP</title>
</head>

<body>
    <h2 style="text-align:center">SIGN UP</h2>
    <p>
        <img src="login.png" height="100" width="100" style="display:block; margin:auto;"/>
    </p>
    <form action="add.php" method="post" name="form1">
        <table style="margin-left: auto; margin-right: auto; width=25%; border=0;">
            <tr> 
                <td>First Name</td>
                <td><input type="text" name="username"></td> 
            </tr>
            
            <tr> 
                <td>Last Name</td>
                <td><input type="text" name="password"></td> 
            </tr>

            <tr> 
                <td>Email</td>
                <td><input type="text" name="username"></td> 
            </tr>
            
            <tr> 
                <td>Username</td>
                <td><input type="text" name="password"></td> 
            </tr>

            <tr> 
                <td>Password</td>
                <td><input type="text" name="username"></td> 
            </tr>

            <tr> 
                <td>GET STARTED</td> 
                <td><input type="submit" name="Submit" value="ENTER"></td> 
            </tr>

            <tr> <td>Belum Punya Akun?</td> </tr>
            <tr> <td>Sign Up</td> </tr>
        </table>
    </form>


    <?php

    if(isset($_POST['Submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        include("koneksi.php");

        $hasil = mysql_query("INSERT INTO employees(username,password) VALUES('$username','$password')");

        echo "User added successfully. <a href='add.php'>View Users</a>";
    }
    ?>
</body>
</html>