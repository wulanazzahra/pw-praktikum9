<?php
require 'functions.php';
$data = get_data();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Daftar Karyawan </title>
</head>

<body>
    <table id="customers">
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Email</th>
            <th>Address</th>
            <th>Gender</th>
            <th>Position</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
        <?php foreach ($data as $index => $d) : ?>
            <tr>
                <td><?= $index + 1 ?></td>
                <td><?= $d["name"]; ?></td>
                <td><?= $d["email"]; ?></td>
                <td><?= $d["address"]; ?></td>
                <td><?= $d["gender"]; ?></td>
                <td><?= $d["position"]; ?></td>
                <td><?= $d["status"]; ?></td>
                <td>
                    <a href="deleteKaryawan.php?id=<?= $d['id'] ?>">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    <button id="add" onclick="window.location='addKaryawan.php';">Tambah Data</button>
</body>

</html>