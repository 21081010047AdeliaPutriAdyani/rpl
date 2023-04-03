<?php 
    include ('koneksi.php');

    $status = '';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id_employees = $_POST['id_employees'];
        $nama_karyawan = $_POST['nama_karyawan'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $jabatan = $_POST['jabatan'];

        $query = "INSERT INTO employees(id_employees,nama_karyawan,username,password,jabatan) VALUES('$id_employees','$nama_karyawan','$username','$password','$jabatan')";
        
        $result = mysqli_query(connection(),$query);
        if ($result) {
          $status = 'ok';
        }
        else{
          $status = 'err';
        }
    }
?>
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
            <?php 
                          if ($status=='ok') {
                            echo '<br><br><div class="alert alert-success" role="alert">Data Customer berhasil disimpan</div>';
                          }
                          elseif($status=='err'){
                            echo '<br><br><div class="alert alert-danger" role="alert">Data Customer gagal disimpan</div>';
                          }
                        ?>
        </table>
    </form>
</body>
</html>