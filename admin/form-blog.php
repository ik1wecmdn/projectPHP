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
  <!-- Your custom styles (optional) -->
  <link href="css/style.css" rel="stylesheet">
</head>

<body>

  <!-- Start your project here-->
 
  <!--Main Navigation-->
  <?php include('header.php'); ?>


  <main>
    <div class="container-fluid">
      <div class="row mt-5 pt-5">
        <div class="col">
          <div class="card">
            <div class="card-header primary-color lighten-1 white-text">Input Blog</div>
            <div class="card-body">
              <form id="formBlog" action="form-blog-action.php" method="post">
                <div class="md-form">
                    <input type="text" id="txtJudul" name="txtJudul" class="form-control">
                    <label for="txtJudul" >Judul Blog : </label>
                </div>
                
                <div class="md-form">
                    <textarea type="text" id="txtIsi" name="txtIsi" class="md-textarea form-control" rows="5"></textarea>
                    <label for="txtIsi">Isi Blog :</label>
                </div>
                
                <button type="submit" class="btn btn-primary">SAVE</button>

              </form>
            </div>
          </div>

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
</body>

</html>
