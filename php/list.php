<!DOCTYPE html>
<html>
<head>
    <title>List Pendaftar</title>
</head>

<body>
    <header>
        <h3>Daftar Nama Mahasiswa yang Telah Mendaftar</h3>
    </header>

    <nav>
        <a href="daftar.php">[+] Tambah Baru</a><br>
        <a href="index.php">[<] Kembali</a>
    </nav>

    <br>

    <table border="1">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>Semester</th>
            <th>Prodi</th>
        </tr> 
    </thead>
    <tbody>
        <?php
        $sql = "SELECT * FROM calon";
        $query = mysqli_query($db, $sql);

        while($siswa = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$siswa['id']."</td>";
            echo "<td>".$siswa['nama']."</td>";
            echo "<td>".$siswa['alamat']."</td>";
            echo "<td>".$siswa['jenis_kelamin']."</td>";
            echo "<td>".$siswa['semester']."</td>";
            echo "<td>".$siswa['prodi']."</td>";

            echo "<td>";
            echo "<a href='../edit.php?id=".$siswa['id']."'>Edit</a> | ";
            echo "<a href='../hapus.php?id=".$siswa['id']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

    </tbody>
    </table>

    <p><?php echo mysqli_num_rows($query) ?></p>
    </body>
</html>
