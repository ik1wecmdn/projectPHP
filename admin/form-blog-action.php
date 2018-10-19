<?php

$judul = filter_input(INPUT_POST, 'txtJudul');
$isi = filter_input(INPUT_POST, 'txtIsi');

$tanggal = date('Y-m-d H:i:s');
$user = 'admin'; // <-- harusnya diambil dari session login

require_once('../database.php');
$db = new MyDatabase();

$db->Execute("INSERT INTO blogs (judul_blog,tanggal,isi_blog,user) VALUES (?,?,?,?)", [$judul,$tanggal,$isi,$user]);

header('location:blog.php');
?>