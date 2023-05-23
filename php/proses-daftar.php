<?php
// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){

    // ambil data dari formulir
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jenis_kelamin'];
    $semester = $_POST['semester'];
    $prodi = $_POST['prodi'];

    // buat query
    $sql = "INSERT INTO calon (nama, alamat, jenis_kelamin, semester, prodi) VALUE ('$nama', '$alamat', '$jk', '$semester', '$prodi')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: index.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: index.php?status=gagal');
    }


} else {
    die("Anda Tidak Memiliki Akses");
}

?>