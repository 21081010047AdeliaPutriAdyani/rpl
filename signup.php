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
                <td>Id Karyawan</td>
                <td><input type="text" name="username"></td> 
            </tr>
            
            <tr> 
                <td>Nama Karyawan</td>
                <td><input type="text" name="password"></td> 
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
                <td>Jabatan</td>
                <td><input type="text" name="username"></td> 
            </tr>

            <tr> 
                <td><input type="submit" name="GET STARTED" value="GET STARTED"></td> 
            </tr>
        </table>
    </form>


    <?php

    if(isset($_POST['GET STARTED'])) {
        $id_employees = $_POST['id_employees'];
        $nama_karyawan = $_POST['nama_karyawan'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $jabatan = $_POST['jabatan'];

        include("koneksi.php");

        $hasil = mysql_query("INSERT INTO employees(id_employees,nama_karyawan,username,password,jabatan) VALUES('$id_employees','$nama_karyawan','$username','$password','$jabatan')");

        echo "User added successfully. <a href='add.php'>View Users</a>";
    }
    ?>
</body>
</html>