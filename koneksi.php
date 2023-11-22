<?php
    $koneksi = mysqli_connect("localhost:3306", "root", "", "uniclone_db");

    if (!$koneksi) {
        die('Connection failed' . mysqli_connect_error());
    }