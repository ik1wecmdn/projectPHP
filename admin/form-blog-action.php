<?php

$judul = filter_input(INPUT_POST, 'txtJudul');
$isi = filter_input(INPUT_POST, 'txtIsi');
$tanggal = filter_input(INPUT_POST, 'txtTanggal');

//format ymd sesuai kebutuhan mysql
$date = DateTime::createFromFormat('d/m/Y H.i', $tanggal);
$tanggal = $date->format('Y-m-d H:i:s');

$user = 'admin'; // <-- harusnya diambil dari session login

require_once('../database.php');
$db = new MyDatabase();

$db->Execute("INSERT INTO blogs (judul_blog,tanggal,isi_blog,user) VALUES (?,?,?,?)", [$judul,$tanggal,$isi,$user]);

header('location:blog.php');
?>