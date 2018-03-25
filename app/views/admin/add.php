<?php require APPROOT .'/views/admin/inc/header.php'; ?>
<section id="main">
    <div class="container">
        <div class="row">
        <?php require APPROOT .'/views/admin/inc/widget.php';?>
<!-- Ajout d'épisode -->
    <div class="col-md-9">
        <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Modifier l'épisode</h3>
        </div>

        <div class="panel-body">
        <form action ="<?php echo URLROOT; ?>/admin/add" method = "post">
            <div class="form-group">
                <label for="title">Titre de l'épisode</label>
                <input type="text" name ="title" class="form-control <?php echo (!empty($data
                ['title_err'])) ? 'is-invalid' : '' ; ?>" placeholder="Page Title" value="<?php $data['title'];?>">
                <span class="invalid-feedback">
                <?php echo $data['title_err']; ?>
                </span>
            </div>

            <div class="form-group">
                <label for= "content">Contenu</label>
                <textarea name="content" class="form-control <?php echo (!empty($data
                ['content_err'])) ? 'is-invalid' : '' ; ?>" placeholder="Page Body">
                    <?php echo $data['content'];?>
                </textarea>
                <span class="invalid-feedback">
                <?php echo $data['content_err']; ?>
                </span>
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

<?php require APPROOT .'/views/admin/inc/footer.php'; ?>