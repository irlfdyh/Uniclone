<?php
session_start();
require 'connection.php';

if (isset($_POST['publisher_save'])) {
    $name = mysqli_real_escape_string($connection, $_POST['name']);
    $address = mysqli_real_escape_string($connection, $_POST['address']);
    $city = mysqli_real_escape_string($connection, $_POST['city']);
    $phone = mysqli_real_escape_string($connection, $_POST['phone']);

    $query = "INSERT INTO publisher (name, address, city, phone) VALUES ('$name', '$address', '$city', '$phone')";

    $query_run = mysqli_query($connection, $query);
    if ($query_run) {
        $_SESSION['message'] = "Penerbit berhasil dibuat";
        header("Location: author-create.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Gagal ketika membuat penerbit";
        header("Location: author-create.php");
        exit(0);
    }
}

if (isset($_POST['publisher_update'])) {
    $id = mysqli_real_escape_string($connection, $_POST['id']);
    $name = mysqli_real_escape_string($connection, $_POST['name']);
    $address = mysqli_real_escape_string($connection, $_POST['address']);
    $city = mysqli_real_escape_string($connection, $_POST['city']);
    $phone = mysqli_real_escape_string($connection, $_POST['phone']);

    $query = "UPDATE publisher SET name = '$name', address = '$address', city = '$city', phone = '$phone' WHERE id = $id";

    $query_run = mysqli_query($connection, $query);
    if ($query_run) {
        $_SESSION['message'] = "Penerbit berhasil diubah";
        header("Location: author-modify.php?id=$id");
        exit(0);
    } else {
        $_SESSION['message'] = "Gagal ketika mengubah data";
        header("Location: author-modify.php?id=$id");
        exit(0);
    }
}

if (isset($_POST['publisher_delete'])) {
    $publisher_id = mysqli_real_escape_string($connection, $_POST['publisher_delete']);

    $query = "DELETE FROM publisher WHERE id='$publisher_id'";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        $_SESSION['message'] = "Publisher Deleted Successfully";
        header("Location: admin.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Publisher Not Deleted";
        header("Location: admin.php");
        exit(0);
    }
}

if (isset($_POST['book_save'])) {
    $name = mysqli_real_escape_string($connection, $_POST['name']);
    $category = mysqli_real_escape_string($connection, $_POST['category']);
    $price = mysqli_real_escape_string($connection, $_POST['price']);
    $stock = mysqli_real_escape_string($connection, $_POST['stock']);
    $publisherId = mysqli_real_escape_string($connection, $_POST['publisher_id']);

    $query = "INSERT INTO book (id_penerbit, category, name, price, stok) VALUES ($publisherId, '$category', '$name', $price, $stock)";

    $query_run = mysqli_query($connection, $query);
    if ($query_run) {
        $_SESSION['message'] = "Buku berhasil dibuat";
        header("Location: book-create.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Gagal ketika membuat buku";
        header("Location: book-create.php");
        exit(0);
    }
}

if (isset($_POST['book_update'])) {
    $id = mysqli_real_escape_string($connection, $_POST['id']);
    $name = mysqli_real_escape_string($connection, $_POST['name']);
    $category = mysqli_real_escape_string($connection, $_POST['category']);
    $price = mysqli_real_escape_string($connection, $_POST['price']);
    $stock = mysqli_real_escape_string($connection, $_POST['stock']);
    $publisherId = mysqli_real_escape_string($connection, $_POST['publisher_id']);

    $query = "UPDATE book SET name = '$name', category = '$category', price = $price, stok = $stock, id_penerbit = $publisherId WHERE id = $id";

    $query_run = mysqli_query($connection, $query);
    if ($query_run) {
        $_SESSION['message'] = "Buku berhasil diubah";
        header("Location: book-modify.php?id=$id");
        exit(0);
    } else {
        $_SESSION['message'] = "Gagal ketika mengubah buku";
        header("Location: book-modify.php?id=$id");
        exit(0);
    }
}

if (isset($_POST['book_delete'])) {
    $book_id = mysqli_real_escape_string($connection, $_POST['book_delete']);

    $query = "DELETE FROM book WHERE id='$book_id'";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        $_SESSION['message'] = "Book Deleted Successfully";
        header("Location: admin.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Book Not Deleted";
        header("Location: admin.php");
        exit(0);
    }
}