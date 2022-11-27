<!DOCTYPE html>
<html>

<head>
    <title>Formulir Pendaftaran Siswa Baru | SMK Coding</title>
    <link rel="stylesheet" href="css/stylesheet.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</head>

<body class="bg">

    <form id="contact" action="proses-pendaftaran.php" method="POST">
        <h3 style="text-align: center; font-weight: bold;">Formulir Pendaftaran Siswa Baru</h3>
        <fieldset>
            <label for="nama">Nama: </label>
            <input type="text" tabindex="1" name="nama" required autofocus>
        </fieldset>
        <fieldset>
            <label for="nama">Alamat: </label>
            <input type="text" name="alamat" required autofocus>
        </fieldset>
        <fieldset>
            <label for="jenis_kelamin">Jenis Kelamin: </label></br>
            <label><input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki</label>
            <label><input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan</label>
        </fieldset>
        <fieldset>
            <label for="agama">Agama: </label> </br>
            <input type="text" name="agama" required autofocus>
        </fieldset>
        <fieldset>
            <label for="sekolah_asal">Sekolah Asal: </label></br>
            <input name="sekolah_asal" type="text" required>
        </fieldset>
        <fieldset>
        <button type="button" class="btn btn-success" value="Daftar" data-submit="...Sending">Submit</button>
            <!-- <button name="daftar" type="submit" value="Daftar" data-submit="...Sending">Submit</button> -->
        </fieldset>
    </form>


</body>

</html>