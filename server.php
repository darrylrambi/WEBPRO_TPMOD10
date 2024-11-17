<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = isset($_POST['name']) ? trim($_POST['name']) : '';
    if (!empty($name)) {
        echo "Halo, $name! Selamat datang di AJAX!";
    } else {
        echo "Nama tidak boleh kosong!";
    }
} else {
  echo "Invalid";
}
?>