<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Admin Dashboard - Blog Post</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- MDBootstrap Datatables  -->
  <link href="css/addons/datatables.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.css" rel="stylesheet">
</head>

<body>

  <!-- Start your project here-->
 
  <!--Main Navigation-->
  <?php 
  include('header.php'); 

  require_once('../database.php');
  $db = new MyDatabase();
  $dtBlog = $db->GetData("SELECT * FROM blogs");

  ?>


  <main>
    <div class="container-fluid">
      <div class="row mt-5 pt-5">
        <div class="col">
          <h1>Blog Post</h1>
          
          <a href="form-blog.php" class="btn btn-primary mb-4">Tambah</a>

          <table id="dtBlog" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
              <tr>
                <th class="th-sm">ID
                  <i class="fa fa-sort float-right" aria-hidden="true"></i>
                </th>
                <th class="th-sm">JUDUL
                  <i class="fa fa-sort float-right" aria-hidden="true"></i>
                </th>
                <th class="th-sm">TANGGAL
                  <i class="fa fa-sort float-right" aria-hidden="true"></i>
                </th>
                <th class="th-sm">USER
                  <i class="fa fa-sort float-right" aria-hidden="true"></i>
                </th>
                <th class="th-sm">ACTION
                </th>
              </tr>
            </thead>
            <tbody>
              <?php
              foreach($dtBlog as $row){
              ?>
              <tr>
                <td><?php echo $row['id_blog']; ?></td>
                <td><?php echo $row['judul_blog']; ?></td>
                <td><?php echo $row['tanggal']; ?></td>
                <td><?php echo $row['user']; ?></td>
                <td>
                  <a href="form-blog.php?edit=<?php echo $row['id_blog']; ?>" class="btn btn-info btn-sm">EDIT</a>
                  <a href="hapus-blog.php?edit=<?php echo $row['id_blog']; ?>" class="btn btn-danger btn-sm">HAPUS</a>
                </td>
              </tr>
              <?php 
              } //-- tutupe foreach 
              ?>
            </tfoot>
          </table>



        </div>
      </div>
    </div>
  </main>



  <!--Main Navigation-->

  <!-- /Start your project here-->

  <!-- SCRIPTS -->

  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- MDBootstrap Datatables  -->
  <script type="text/javascript" src="js/addons/datatables.min.js"></script>
  
  <script>
    $(document).ready(function(){
      $("#dtBlog").DataTable();
      $('.dataTables_length').addClass('bs-select');
    });
  </script>


</body>

</html>
