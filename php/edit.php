<?php
// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('Location: ../list.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM calon WHERE id=$id";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Form Edit</title>
</head>

<body>
    <header>
        <h3>Formulir Edit Mahasiswa</h3>
    </header>

    <form action="proses-edit.php" method="POST">

        <fieldset>

            <input type="hidden" name="id" value="<?php echo $siswa['id'] ?>" />

        <p>
            <label for="nama">Nama : </label>
            <input type="text" name="nama" placeholder="Nama Lengkap" value="<?php echo $siswa['nama'] ?>" />
        </p>
        <p>
            <label for="alamat">Alamat : </label>
            <textarea name="alamat" placeholder="Alamat Domisili"><?php echo $siswa['alamat'] ?></textarea>
        </p>
        <p>
            <label for="jenis_kelamin">Jenis Kelamin : </label>
            <?php $jk = $siswa['jenis_kelamin']; ?>
            <label><input type="radio" name="jenis_kelamin" value="laki-laki" <?php echo ($jk == 'laki-laki') ? "checked": "" ?>> Laki-laki</label>
            <label><input type="radio" name="jenis_kelamin" value="perempuan" <?php echo ($jk == 'perempuan') ? "checked": "" ?>> Perempuan</label>
        </p>
        <p>
            <label for="semester">Semester : </label>
            <?php $semester = $siswa['semester']; ?>
            <select name="semester">
                <option <?php echo ($semester == 1) ? "selected": "" ?>>1</option>
                <option <?php echo ($semester == '2') ? "selected": "" ?>>2</option>
                <option <?php echo ($semester == '3') ? "selected": "" ?>>3</option>
                <option <?php echo ($semester == '4') ? "selected": "" ?>>4</option>
                <option <?php echo ($semester == '5') ? "selected": "" ?>>5</option>
                <option <?php echo ($semester == '6') ? "selected": "" ?>>6</option>
                <option <?php echo ($semester == '7') ? "selected": "" ?>>7</option>
                <option <?php echo ($semester == '8') ? "selected": "" ?>>8</option>
            </select>
        </p>
        <p>
            <label for="prodi">Program Studi : </label>
            <input type="text" name="prodi" placeholder="Program Studi" value="<?php echo $siswa['prodi'] ?>" />
        </p>
        <p>
            <input type="submit" value="Simpan" name="simpan" />
        </p>

        </fieldset>


    </form>

    </body>
</html>