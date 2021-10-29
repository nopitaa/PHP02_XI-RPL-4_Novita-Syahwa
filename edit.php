<?php
include 'koneksi.php';
$ambil = $koneksi->query("SELECT * FROM tbl_buku WHERE id_siswa='$_GET[id]'");
$baris = $ambil->fetch_assoc();
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Edit Data</title>
</head>

<body>
    <div class="p-3 mb-2 .bg-light">
        <div class="container">
            <h1>Edit Siswa</h1>
            <form method="post" enctype="multipart/form-data">

                <div class="form-group"><label>Nis</label>
                    <input type="number" class="form-control" name="nis" placeholder="Masukan NIS" value="<?php echo $baris['Nis'] ?>">
                </div>

                <div class="form-group">
                    <label>nama</label>
                    <input type="text" class="form-control" name="nama" placeholder="Masukan Nama Lengkap" value="<?php echo $baris['nama_siswa'] ?>">
                </div>

                <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <input type="text" class="form-control" name="jenis" placeholder="Masukan Jenis Kelamin" value="<?php echo $baris['jenis_kelamin'] ?>">
                </div>

                <div class="form-group">
                    <label>Alamat</label>
                    <textarea class="form-control" name="alamat" placeholder="Masukan Alamat" rows="5"><?php echo $baris['alamat'] ?></textarea>
                </div>
                <label>Jurusan</label>
                <input type="text" class="form-control" name="jurusan" placeholder="Masukan Jurusan" value="<?php echo $baris['jurusan'] ?>">
                <div class="form-group">

                </div>
                <button class="btn btn-outline-success" name="save">Submit</button>
                <a href="index.php" class="btn btn-outline-dark">Kembali</a>
            </form>
        </div>
    </div>
    <?php
    if (isset($_POST['save'])) {
        $koneksi->query("UPDATE tbl_buku SET Nis='$_POST[nis]',nama_siswa='$_POST[nama]'
        ,jenis_kelamin='$_POST[jenis]',alamat='$_POST[alamat]',jurusan='$_POST[jurusan]'
        WHERE id_siswa='$_GET[id]'");
        echo "<script>alert('Data Siswa Berhasil di Ubah ')</script>";
        echo "<script>location='index.php'</script>";
    }
    ?>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script>

</body>

</html>