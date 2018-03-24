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
    <script src="http://cdn.ckeditor.com/4.6.1/standard/ckeditor.js"></script>
  </head>
  <body>
  <?php require APPROOT .'/views/admin/inc/navbar.php'; ?>
  <header id="header">
      <div class="container">
        <div class="row">
          <div class="col-md-10">
            <h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Tableau de bord <small>Administrez votre blog</small></h1>
          </div>
          <div class="col-md-2">
            <div class="dropdown create">
              <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                Creation du contenu
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                <li><a type="button" data-toggle="modal" data-target="#addPage">Ajouter Épisode</a></li>
                <li><a href="#">Ajouter commentaire</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </header>