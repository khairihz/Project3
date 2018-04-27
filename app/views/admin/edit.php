<?php  require APPROOT .'/views/admin/inc/header.php'; ?>

<section id="main">
 <div class="container">
  <div class="row">
            <!-- les épisodes -->
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Modifier l'épisode</h3>
            </div>

    <div class="panel-body">
        <form action ="<?php echo URLROOT; ?>/admin/edit/<?php echo $data['id']; ?>" method = "post">
            <div class="form-group">
            <label>Titre de l'épisode</label>
            <input type="text" name="title" class="form-control <?php echo (!empty(@$data
            ['title_err'])) ? 'is-invalid' : '' ; ?>"  value="<?php echo $data['title'];?>">
            <span class="invalid-feedback"><?php echo @$data['title_err']; ?></span>
            </div>
            <div class="form-group">
            <label>Contenu</label>
            <textarea id ="content" name="content" class="form-control <?php echo (!empty(@$data
            ['content_err'])) ? 'is-invalid' : '' ; ?>" placeholder="Page Body">
            <?php echo $data['content'];?>
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
</section>
<?php require APPROOT .'/views/admin/inc/footer.php';?>