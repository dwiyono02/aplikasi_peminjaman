<?php

session_start();
require_once '../config/db.php';

if(!isset($_SESSION['user'])) {
 header('Location: ../../index.php');
}

$nama_barang = $_POST['nama_barang'];
$jenis = $_POST['jenis'];
$jumlah = $_POST['jumlah'];
$ruang = $_POST['ruang'];
$kondisi = $_POST['kondisi'];
$ket = $_POST['ket'];
if (!$ket) $ket='-';
$tgl_regis = date('Y-m-d');
$petugas = $_SESSION['id_user'];

if(!isset($nama_barang, $jenis, $jumlah, $ruang, $kondisi, $ket)) {
  if($_SESSION['id_level'] == 1) {
    header('Location: ../admin/data-barang.php?p=tambah-barang');
  } else {
    header('Location: ../operator/data-barang.php?p=tambah-barang');
  }
}

$sql = "INSERT INTO barang VALUES ('', '$petugas', '$jenis', '$jumlah',  '$ket', '$kondisi',  '$nama_barang',   '$tgl_regis', '$ruang' )";
$query = $conn->query($sql);



if($query) {
	if($_SESSION['id_level'] == 1) {
    header('Location: ../admin/data-barang.php');
  } else {
    header('Location: ../operator/data-barang.php');
  }
} else {
	if($_SESSION['id_level'] == 1) {
    header('Location: ../admin/data-barang.php?p=tambah-barang');
  } else {
    header('Location: ../operator/data-barang.php?p=tambah-barang');
  }
}