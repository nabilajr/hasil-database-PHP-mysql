<?php
    $host = "localhost"; //host database
    $username = "root"; //username database
    $password = ""; //password databse

    $koneksi = new mysqli($host, $username, $password); //membuat koneksi ke server mysql

    if ($koneksi->connect_error) {
        die("koneksi ke database gagal");
?>