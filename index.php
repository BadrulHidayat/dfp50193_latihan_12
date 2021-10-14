<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Borang Pendaftaran</title>
    <style>
        * {
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            font-size: 20pt;
        }
    </style>
</head>

<body>
    <h1>Borang Pendaftaran</h1>

    <form action="simpan.php" method="post">
        Nama: <input type="text" name="nama"><br>
        Alamat: <textarea name="alamat"></textarea><br><br>

        <label for="negeri">Negeri:</label>

        <select name="negeri" id="negeri">
            <option value="">Pilih</option>
            <option value="09">Perlis</option>
            <option value="01">Johor</option>
            <option value="02">Kedah</option>
            <option value="03">Kelantan</option>
        </select><br><br>

        Hobi:
        <input type="checkbox" id="hobi1" name="hobi1" value="membaca">
        <label for="hobi1"> Membaca</label>
        <input type="checkbox" id="hobi2" name="hobi2" value="membaca">
        <label for="hobi2"> Melancang</label>
        <input type="checkbox" id="hobi3" name="hobi3" value="berenang">
        <label for="hobi3"> Berenang</label><br><br>

        Jantina:
        <input type="radio" id="lelaki" name="jantina" value="lelaki" checked>
        <label for="lelaki">Lelaki</label>
        <input type="radio" id="perempuan" name="jantina" value="perempuan">
        <label for="perempuan">Perempuan</label><br><br>

        <input type="submit" value="Submit">
    </form>
</body>

</html>