<?php
$web = "http://localhost/projectphp/admin/uploads/"; // alamat file
$dir = "uploads/"; // folder tempat penyimpanan file upload
$target_file = $dir . basename($_FILES["file"]["name"]);
$namafile = $_FILES["file"]["name"]; // nama file

// Mendeteksi Ukuran
if ($_FILES["file"]["size"] > 500000) {
    header("location:form-gallery.php?mess=Maaf ukuran terlalu besar !");
    exit;
}

// Menedeteksi file type
$type = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
if($type != "jpg" && $type != "png" && $type != "jpeg"
&& $type != "gif" ) {
    header("location:form-gallery.php?mess=Maaf format file bukan gambar !");
    exit;
}

// Proses Upload
if(move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)){
	// Simpan ke database tabel gallery
  require_once('../database.php');
  $db = new MyDatabase();
  $dtGallery = $db->Execute("INSERT INTO gallery VALUES(?,?,?,?)",[NULL,$namafile,"image/".$type,$web.$namafile]);
  
	header("location:gallery.php");
} else {
    header("location:form-gallery.php?mess=Maaf file gagal diupload !");
    exit;
}

?>