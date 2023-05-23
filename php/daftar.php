<!DOCTYPE html>
<html>
<head>
    <title>Form Pendaftaran</title>
</head>

<body>
    <header>
        <h3>Formulir Pendaftaran Mahasiswa</h3>
    </header>

    <form action="/proses-daftar.php" method="POST">

        <fieldset>

        <p>
            <label for="nama">Nama : </label>
            <input type="text" name="nama" placeholder="Nama Lengkap" />
        </p>
        <p>
            <label for="alamat">Alamat : </label>
            <textarea name="alamat" placeholder="Alamat Domisili"></textarea>
        </p>
        <p>
            <label for="jenis_kelamin">Jenis Kelamin : </label>
            <label><input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki</label>
            <label><input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan</label>
        </p>
        <p>
            <label for="semester">Semester : </label>
            <select name="semester">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
                <option>7</option>
                <option>8</option>
            </select>
        </p>
        <p>
            <label for="prodi">Program Studi : </label>
            <input type="text" name="prodi" placeholder="Program Studi" />
        </p>
        <p>
            <input type="submit" value="Daftar" name="daftar" />
        </p>

        </fieldset>

    </form>

    <nav>
        <br><a href="../index.php">[<] Kembali</a>
    </nav>

    </body>
</html>