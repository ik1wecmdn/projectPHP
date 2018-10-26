<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Admin Dashboard</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- untuk Summernote -->
    <link href="plugins/summernote/summernote-lite.css" rel="stylesheet">
    <link rel="stylesheet" href="plugins/datetimepicker/tempusdominus-bootstrap-4.min.css" />
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">
  </head>
  <body>
    <!-- Start your project here-->
    
    <!--Main Navigation-->
    <?php
    include('header.php');
    ?>
    <main>
      <form id="formGallery" action="form-gallery-action.php" method="post" enctype="multipart/form-data">
        <div class="container-fluid">
          <div class="row mt-5 pt-5">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header primary-color lighten-1 white-text">Input Gallery</div>
                <div class="card-body">                  
                  <div class="md-form">
                    <?php if(isset($_GET['mess'])){ ?>
                    <div class="alert alert-danger" role="alert">
                    <?php echo $_GET['mess']; ?>
                    </div>
                  <?php } ?>
                    <input type="file" id="file" name="file" class="form-control">       
                  </div>
                  <button type="submit" class="btn btn-primary">SAVE</button>
                </div>
              </div>
              </div> <!-- tutup colmd8 -->
            </div>
          </div>
        </form>
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
      <!-- Script Summernote -->
      <script src="plugins/summernote/summernote-lite.js"></script>
      <script src="plugins/moment/moment-with-locales.min.js"></script>
      <script type="text/javascript" src="plugins/datetimepicker/tempusdominus-bootstrap-4.min.js"></script>
      <script>
      $("#txtIsi").summernote({
      height: 200
      });
      $("#txtTanggal").datetimepicker({
      defaultDate : new Date(),
      locale : 'id'
      });
      </script>
    </body>
  </html>