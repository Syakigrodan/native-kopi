<?php

$koneksi = new mysqli('localhost', 'root', '', 'kopi_shop')
    or die(mysqli_error($koneksi));

if (isset($_POST['simpan'])) {
    $id_pesanan = $_POST['id_pesanan'];
    $nm_customer = $_POST['nm_customer'];
    $nm_pesanan = $_POST['nm_pesanan'];
    $jenis_pesanan = $_POST['jenis_pesanan'];
    $harga = $_POST['harga'];
    $koneksi->query("INSERT INTO kasir (id_pesanan, nm_customer, nm_pesanan, jenis_pesanan, harga) values ('$id_pesanan', '$nm_customer', '$nm_pesanan', '$jenis_pesanan', '$harga')");
    header('location:pesanan.php');
}

if (isset($_GET['id_pesanan'])) {
    $id_pesanan = $_GET['id_pesanan'];
    $koneksi->query("DELETE FROM kasir where id_pesanan = '$id_pesanan' ");
    header('location:pesanan.php');
}

if (isset($_POST['edit'])) {
    $id_pesanan = $_POST['id_pesanan'];
    $nm_customer = $_POST['nm_customer'];
    $nm_pesanan = $_POST['nm_pesanan'];
    $jenis_pesanan = $_POST['jenis_pesanan'];
    $harga = $_POST['harga'];
    $koneksi->query("UPDATE kasir SET id_pesanan= '$id_pesanan', nm_customer= '$nm_customer', nm_pesanan='$nm_pesanan', jenis_pesanan='$jenis_pesanan', harga= '$harga' where id_pesanan = '$id_pesanan' ");
    header('location:pesanan.php');
}
