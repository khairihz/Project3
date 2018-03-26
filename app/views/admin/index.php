<?php  require APPROOT .'/views/admin/inc/header.php'; ?>
<section id="breadcrumb">
      <div class="container">
        <ol class="breadcrumb">
          <li class="active"><?php flash('post_message');?></li>
        </ol>
      </div>
    </section>

    <section id="main">
      <div class="container">
        <div class="row">
<?php require APPROOT .'/views/admin/inc/widget.php';?>
          <div class="col-md-9">
            <!-- Website Overview -->
            <div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title">Aperçu du site</h3>
              </div>
              <div class="panel-body">
                <div class="col-md-4">
                  <div class="well dash-box overview">
                    <h2><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> 20</h2>
                    <h4>Épisodes</h4>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="well dash-box overview2">
                    <h2><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> 43</h2>
                    <h4>Commentaires</h4>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="well dash-box overview3">
                    <h2><span class="glyphicon glyphicon-stats" aria-hidden="true"></span> 7</h2>
                    <h4>Commentaires Signalés</h4>
                  </div>
                </div>
              </div>
              </div>

              <!-- Latest Users -->
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h3 class="panel-title">Derniers épisodes</h3>
                </div>
                <div class="panel-body">
                <form  action ="<?php URLROOT; ?>/admin/delete/<?php echo $data['post']->id;?>" method ="post" id="del">
                  <table class="table table-striped table-hover">
                      <tr>
                        <th>Numéro d'épisode</th>
                        <th>Épisodes</th>
                        <th>Date de publication</th>
                        <th></th>
                        <th></th>
                      </tr>
                      <tr>
                      <?php foreach ($data['admin'] as $post) : ?>
                        <td><?php echo $post->id; ?></td>
                        <td><?php echo $post->title;?></td>
                        <td><?php echo $post->c_date ?></td>
                        <td><a class="btn btn-default" href="<?php echo URLROOT; ?>/admin/edit/<?php echo $post->id; ?>">Modifier</a></td>
                        <td>
                            <input form ="del" type ="submit" value="Supprimer" class ="btn btn-danger"/>
                            </td>
                      </tr>
                      <?php endforeach ; ?>
                    </table>
                    </form>
                </div>
              </div>
          </div>
        </div>
      </div>
    </section>

    <?php  require APPROOT .'/views/admin/inc/footer.php'; ?>