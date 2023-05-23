<!DOCTYPE html>
<html>  
<head>
    <title>HOME | Pendaftaran</title>
</head>

<body>
    <header>
        <h1>PT. CNP</h1>
        <h3>Pendaftaran Kelas Membuat Game</h3>
    </header>

    <h4>Menu</h4>
    <nav>
        <ul>
            <li><a href="daftar.php">Daftar Baru</a></li>
            <li><a href="list.php">Pendaftar</a></li>
        </ul>
    </nav>

    <?php
        $host = 'PENDAFTARAN';
        $user = 'php_docker';
        $pass = 'password';
        $conn = new mysqli($host, $user, $pass);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } else {
            echo "Connected to MySQL server successfully!";
        }
        ?>
</body>
</html>
