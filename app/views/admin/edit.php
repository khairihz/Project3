<?php  require APPROOT .'/views/admin/inc/header.php'; ?>

<section id="main">
 <div class="container">
  <div class="row">
  <?php require APPROOT .'/views/admin/inc/widget.php';?>
            <!-- les épisodes -->
    <div class="col-md-9">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Modifier l'épisode</h3>
            </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Modifier l'épisode</h3>
        </div>
    <div class="panel-body">
        <form>
            <div class="form-group">
            <label>Titre de l'épisode</label>
            <input type="text" class="form-control" placeholder="Page Title" value="Titre de l'épisode">
            </div>
            <div class="form-group">
            <label>Contenu</label>
            <textarea name="content" class="form-control" placeholder="Page Body">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </textarea>
            </div>
            <div class="form-group">
            <input type="submit" class="btn btn-default" value="Valider">
            </div>
        </form>
        </div>
        </div>
        </div>
    </div>
<?php require APPROOT .'/views/admin/inc/widget.php';?>