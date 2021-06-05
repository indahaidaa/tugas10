<!doctype html>

<?php
    include('crudmhs.php');
    $sql="select * from mahasiswa";
    $data = bacaMhs($sql);

    session_start();
    if (!isset($_SESSION['username'])){
    header("Location: login.php");
    }
?>

<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Data Mahasiswa</title>
</head>

<body>
    <?php
    echo 'user: '.$_SESSION['namauser'];
    ?>

    <h2>Daftar Mahasiswa</h2>
    <table border="1">
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Jurusan</th>
            <th>Proses</th>
        </tr>

        <?php
                foreach($data as $mhs){
                    $nim = $mhs['nim'];
                    $nama = $mhs['nama'];
                    $kelamin = $mhs['kelamin'];
                    $jurusan = $mhs['jurusan'];

                    echo "
                    <tr>
                    <td>$nim</td>
                    <td>$nama</td>
                    <td>$kelamin</td>
                    <td>$jurusan</td>
                    <td><a href='konfirmasihapus.php?nim=$nim'>Hapus</a></td>
                    </tr>
                    ";
                }
            ?>
    </table>

    <br>
    <a href="logout.php">Logout</a>
</body>

</html>