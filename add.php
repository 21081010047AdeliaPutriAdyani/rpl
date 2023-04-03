<html>
<head>
    <title>LOGIN</title>
</head>

<body>
    <h2 style="text-align:center">LOGIN</h2>
    <p>
        <img src="images/login.png" height="100" width="100" style="display:block; margin:auto;"/>
    </p>
    <form action="add.php" method="post" name="form1">
        <table style="margin-left: auto; margin-right: auto; width=25%; border=0;">
            <tr> <td>USERNAME</td> </tr>
            <tr> <td><input type="text" name="username"></td> </tr>
            
            <tr> <td>PASSWORD</td> </tr>
            <tr> <td><input type="text" name="password"></td> </tr>

            <tr> <td>Lupa Password?</td> </tr>
            <tr><td><input type="submit" name="Submit" value="ENTER"></td> </tr>

            <tr> <td>Belum Punya Akun?</td> </tr>
            <tr> <td>Sign Up</td> </tr>
        </table>
    </form>


    <?php

    if(isset($_POST['Submit'])) {
        $id_jenis = $_POST['id_jenis'];
        $jenis = $_POST['jenis'];
        $keterangan = $_POST['keterangan'];

        include("koneksi.php");

        $hasil = mysql_query("INSERT INTO tb_jenis(id_jenis,jenis,keterangan) VALUES('$id_jenis','$jenis','$keterangan')");

        echo "User added successfully. <a href='index.php'>View Users</a>";
    }
    ?>
</body>
</html>