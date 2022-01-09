<?php
require 'functions.php';

if (isset($_POST["submit"])) {

    if (add_data($_POST) > 0) {
        echo "Data berhasil dimasukkan";
    } else {
        echo "Data gagal dimasukkan!";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Tambah Karyawan</title>
</head>

<body>
    <h1>Tambah Data Karyawan</h1>
    <div class="main">
        <form method="POST">
            <div class="formpage">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" placeholder="Your name..">

                <label for="email">Email</label>
                <input type="text" id="email" name="email" placeholder="Your email..">

                <label for="address">Address</label>
                <input type="text" id="address" name="address" placeholder="Your address..">

                <label for="gender">Gender</label>
                <select id="gender" name="gender">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>

                <label for="position">Position</label>
                <input type="text" id="position" name="position" placeholder="Your position..">

                <label for="status">Status</label>
                <select id="status" name="status">
                    <option value="fulltime">Fulltime</option>
                    <option value="parttime">Parttime</option>
                </select>
            </div>
            <button type="submit" value="Submit" href="" name="submit">Submit</button>


        </form>
        <button onclick="window.location='index.php';">Back</button>
    </div>
</body>

</html>