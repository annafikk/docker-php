<?php
// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['simpan'])){

    // ambil data dari formulir
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jenis_kelamin'];
    $semester = $_POST['semester'];
    $prodi = $_POST['prodi'];

    // buat query update
    $sql = "UPDATE calon SET nama='$nama', alamat='$alamat', jenis_kelamin='$jk', semester='$semester', prodi='$prodi' WHERE id=$id";
    $query = mysqli_query($db, $sql);

    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: ../list.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Anda Tidak Memiliki Akses");
}

?>