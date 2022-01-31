<?php

session_start();

require_once '../config/db.php';

// mencegah sql injection menggunakan fungsi mysql_real_escape_string()
$username = mysqli_real_escape_string($conn, $_POST['username']);
$password = sha1(mysqli_real_escape_string($conn, $_POST['password']));
$level = $_POST['level'];
//sfdsgsfd ndfyhgfhdfgjfjfjfgjhfg

if(empty($username) || empty($password) || empty($level)) {
  header('Location: ../index.php');
}

$sql = "SELECT * FROM users WHERE username = '" .$username. "' AND password = '" .$password. "' AND id_level = '" .$level. "'";
$query = $conn->query($sql);
$result = $query->fetch_assoc();
var_dump($result);

if($query->num_rows > 0) {
  $_SESSION['nama'] = $result['nama'];
  $_SESSION['id_user'] = $result['id_user'];
  $_SESSION['id_level'] = $result['id_level'];

  if($result['id_level'] == 1) {
    header('Location: ../admin/index.php');
  } else {
    header('Location: ../operator/index.php');
  }
} else {
  $_SESSION['error'] = "Data yang anda masukan salah, silahkan coba lagi";
  header('Location: ../index.php');
}

?>