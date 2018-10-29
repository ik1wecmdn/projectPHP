<?php
$id_gallery = filter_input(INPUT_GET,'edit');


require_once('../database.php');
$db = new MyDatabase();

$dt = $db->GetData("SELECT * FROM gallery WHERE id_gallery=?", 
	[$id_gallery]);
//ambil baris
$row = $dt[0];

$namaFile = $row['nama'];

//hapus file
unlink("uploads/{$namaFile}");


$db->Execute("DELETE FROM gallery WHERE id_gallery=?",[$id_gallery]);

header('location:gallery.php');


?>