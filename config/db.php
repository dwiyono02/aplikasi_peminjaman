<?php

try {
  $conn = new mysqli('localhost', 'root', '', 'peminjaman-barang');
} catch (Exception $e) {
  echo $e->getMessage();
}

?>