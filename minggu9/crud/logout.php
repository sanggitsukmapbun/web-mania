<?php
session_start(); // mulai session
session_destroy(); // hapus semua session
header("location:../login.php?pesan=logout"); // ke halaman index.php
?>