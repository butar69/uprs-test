<?php
  $koneksi = mysqli_connect('localhost','root','','uprs');
?>
<!DOCTYPE html>
<html lang="en">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title></title>
    <head>
        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="css/business-frontpage.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="css/simple-sidebar.css" rel="stylesheet">
      	<link rel="stylesheet" href="plugins/bootstrap/css/radiobutton.css">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
      <body>
        <div class="content-wrapper">
          <section class="content-header">
              <div class="container-fluid">
                <div class="row mb-2">
                  <div class="col-sm-6">
                    <h1>
                      <i class="right fa fa-cloud-upload"></i>
                      Upload Data
                    </h1>
                  </div>
                  <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                      <li class="breadcrumb-item"><a href="#">Home</a></li>
                      <li class="breadcrumb-item active">Import Data</li>
                    </ol>
                  </div>
                </div>
              </div><!-- /.container-fluid -->
            </section>

            <section class="content">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-12">

        						<form method="post" class="form-horizontal" action="index.php?halaman=import_cibesel">

                      <div class="card">
                        <div class="content-header">
                          <div class="container-fluid">
                          <h5>Import Data Warga</h5>
                          <section class="konten">
                            <div class="card-body">

                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <form method="post" class="form-horizontal" action="index.php?halaman=import_cibesel" enctype="multipart/form-data">
                                  <div class="form-group">
                                    <label for="file">File Excel :</label>
                                    <div class="col-md-7">
                                      <input type="file" name="file" id="file" class="input-large" accept=".csv" required>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>

                          <div class="row-no-print">
                                <button type="submit" id="submit" name="import" value="import" class="btn btn-success float-right">Import <i class="fa fa-upload"></i></button>
                              </div>
                          </form>
                          <?php 
                              if(!empty($_FILES['file']))
                              {
                                $path = "uploads/";
                                $path = $path . basename( $_FILES['file']['name']);
                                if(move_uploaded_file($_FILES['file']['tmp_name'], $path)) {
                                  echo "The file ".  basename( $_FILES['file']['name']). 
                                  " has been uploaded";
                                } else{
                                    echo "There was an error uploading the file, please try again!";
                                }
                              }
                            ?>
                         
                          </section>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
          </div>
        </body>
      </html>
