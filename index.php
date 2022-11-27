<!DOCTYPE html>
<html>

<head>
    <title>Pendaftaran Siswa Baru | SMK Coding</title>
    <link rel="stylesheet" href="css/stylesheet.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</head>

<body class="bg">
    <nav class="navbar">
        <div class="container">
            <a class="navbar-brand" href="#">
            </a>
        </div>
    </nav>
    <header>
        <div class="title-utama">
            <h4>Pendaftaran Siswa Baru</h4>
            <h2>SMK Coding</h2>
        </div>
    </header>

    <div class="option-menu">
        <a href="form-daftar.php"><button type="button" class="btn btn-outline-secondary">Daftar Baru</button></a>
        <a href="list-siswa.php"><button type="button" class="btn btn-outline-secondary">Pendaftar</button></a>
    </div>

    <?php if (isset($_GET['status'])) : ?>
        <p>
            <?php
            if ($_GET['status'] == 'sukses') {
                echo "Pendaftaran siswa baru berhasil!";
            } else {
                echo "Pendaftaran gagal!";
            }
            ?>
        </p>
    <?php endif; ?>
</body>

</html>