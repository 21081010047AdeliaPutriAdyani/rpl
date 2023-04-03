<?php 
    include ('koneksi.php');

    $status = '';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id_karyawan = $_POST['id_karyawan'];
        $nama_karyawan = $_POST['nama_karyawan'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $jabatan = $_POST['jabatan'];

        $query = "INSERT INTO employees (id_employees,nama_karyawan,username,password,jabatan) VALUES('$id_karyawan','$nama_karyawan','$username','$password','$jabatan')";
        
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
    <form action="kasir.html" method="POST">
        <table style="margin-left: auto; margin-right: auto; width=25%; border=0;">
            <tr> 
                <td>Id Karyawan</td>
                <td><input type="text" name="id_karyawan" required="required"></td> 
            </tr>
            
            <tr> 
                <td>Nama Karyawan</td>
                <td><input type="text" name="nama_karyawan" required="required"></td> 
            </tr>
            
            <tr> 
                <td>Username</td>
                <td><input type="text" name="username" required="required"></td> 
            </tr>

            <tr> 
                <td>Password</td>
                <td><input type="text" name="password" required="required"></td> 
            </tr>

            <tr> 
                <td>Jabatan</td>
                <td><input type="text" name="jabatan" required="required"></td> 
            </tr>

            <tr> 
                <td><input type="submit" name="submit" value="GET STARTED"></td> 
            </tr>
            <?php 
                          if ($status=='ok') {
                            echo '<br><br><div class="alert alert-success" role="alert">Data Karyawan berhasil disimpan</div>';
                          }
                          elseif($status=='err'){
                            echo '<br><br><div class="alert alert-danger" role="alert">Data Karyawan gagal disimpan</div>';
                          }
                        ?>
        </table>
    </form>
</body>
</html>
