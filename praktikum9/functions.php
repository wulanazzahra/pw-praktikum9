<?php

$connection = mysqli_connect("localhost", "root", "", "praktikum_9");

function get_data()
{
    global $connection;
    $data = mysqli_query($connection, 'select * from karyawan');
    $list_karyawan = [];
    while ($karyawan = mysqli_fetch_assoc($data)) {
        $list_karyawan[] = $karyawan;
    }

    return $list_karyawan;
}

function add_data($data_baru)
{
    global $connection;
    $nama = $data_baru["name"];
    $email = $data_baru["email"];
    $address = $data_baru["address"];
    $gender = $data_baru["gender"];
    $position = $data_baru["position"];
    $status = $data_baru["status"];

    $query = "insert into karyawan(name, email, address, gender, position, status) values ('$nama','$email','$address','$gender','$position','$status')";

    return mysqli_query($connection, $query);
}

function delete_data($id)
{
    global $connection;
    mysqli_query($connection, "delete from karyawan where id = $id");

    return mysqli_affected_rows($connection);
}
