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
      <form id="formBlog" action="form-blog-action.php" method="post">
        <div class="container-fluid">
          <div class="row mt-5 pt-5">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header primary-color lighten-1 white-text">Input Blog</div>
                <div class="card-body">
                  
                  <div class="md-form">
                    <input type="text" id="txtJudul" name="txtJudul" class="form-control">
                    <label for="txtJudul" >Judul Blog : </label>
                  </div>
                  
                  <div>
                    <textarea type="text" id="txtIsi" name="txtIsi"></textarea>
                  </div>
                  
                  <button type="submit" class="btn btn-primary">SAVE</button>
                  
                </div>
              </div>
              </div> <!-- tutup colmd8 -->
              <div class="col-md-4">
                <div class="card">
                  <div class="card-header info-color lighten-1 white-text">Options</div>
                  <div class="card-body">
                    <div class="form-group">
                      <label for="txtTanggal">Tanggal Terbit :</label>
                      <div class="input-group date" id="txtTanggal" data-target-input="nearest">
                        <input type="text" class="form-control datetimepicker-input" data-target="#txtTanggal" name="txtTanggal"/>
                        <div class="input-group-append" data-target="#txtTanggal" data-toggle="datetimepicker">
                          <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="txtUser">Diterbitkan Oleh :</label>
                      <input type="text" id="txtUser" name="txtUser" class="form-control">
                    </div>
                  </div>
                </div>
              </div>
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