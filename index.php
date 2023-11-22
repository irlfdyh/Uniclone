<?php require 'koneksi.php'; ?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>INDEX</title>
</head>
<body>

<nav>
    <ul><a href="#">Home</a></ul>
    <ul><a href="admin.php">Admin</a></ul>
    <ul><a href="pengadaan.php">Pengadaan</a></ul>
</nav>

<form class="d-flex">
    <input class="form-control me-2" name="search" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success" type="submit">Search</button>
</form>

<table border="1">
    <thead>
    <tr>
        <th>Id</th>
        <th>Kategori</th>
        <th>Nama Buku</th>
        <th>Harga</th>
        <th>Stok</th>
        <th>Penerbit</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $keyword = isset($_GET['search']) ? $_GET['search'] : '';
    $query = "SELECT " .
        "buku.id as id_buku, " .
        "buku.kategori as kategori_buku, " .
        "buku.nama as nama_buku, " .
        "buku.harga as harga_buku, " .
        "buku.stok as stok_buku, " .
        "penerbit.nama as nama_penerbit " .
        "FROM buku " .
        "JOIN penerbit " .
        "ON buku.id_penerbit = penerbit.id";

    if ($keyword != '') {
        $query = $query . " " . "WHERE buku.nama LIKE '%$keyword%' ";
    }
    $query_result = mysqli_query($koneksi, $query);

    if (mysqli_num_rows($query_result) > 0) {
        foreach ($query_result as $book) {
            ?>
            <tr>
                <td><?= $book['id_buku']; ?></td>
                <td><?= $book['kategori_buku']; ?></td>
                <td><?= $book['nama_buku']; ?></td>
                <td><?= $book['harga_buku']; ?></td>
                <td><?= $book['stok_buku']; ?></td>
                <td><?= $book['nama_penerbit']; ?></td>
            </tr>
            <?php
        }
    } else {
        ?>
        <tr>
            <td colspan="6">
                <div class="m-5">
                    <h5 class="text-center">Data tidak tersedia</h5>
                    <p class="text-center">Masukkan data atau ulangi proses pencarian</p>
                </div>
            </td>
        </tr>
        <?php
    }
    ?>

    </tbody>
</table>

</body>
</html>