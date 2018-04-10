<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin | Tableau de bord</title>
    <!-- Bootstrap core CSS -->
    <link href="<?php echo URLROOT; ?>/dashboard/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo URLROOT; ?>/dashboard/css/style.css" rel="stylesheet">
    <script type = "text/javascript" src="<?php echo URLROOT; ?>/dashboard/js/jquery.min.js"></script>
    <script type = "text/javascript" src ="<?php echo URLROOT; ?>/tinymce/tinymce.min.js"></script>
    <script type="text/javascript" src ="<?php echo URLROOT; ?>/tinymce/init-tinymce.js"></script>
  </head>
  <body>
  <?php require APPROOT .'/views/admin/inc/navbar.php'; ?>
  <header id="header">
      <div class="container">
        <div class="row">
          <div class="col-md-10">
            <h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Tableau de bord <small>Administrez votre blog</small></h1>
          </div>
        </div>
      </div>
    </header>