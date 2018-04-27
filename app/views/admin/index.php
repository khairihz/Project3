
<?php  require APPROOT .'/views/admin/inc/header.php'; ?>
<section id="breadcrumb">
      <div class="container">
        <ol class="breadcrumb">
          <li class="active"><?php flash('post_message');?></li>
        </ol>
      </div>
    </section>
    <!-- Widget-->
    <section id="main">
      <div class="container">
        <div class="row">
          <?php require APPROOT .'/views/admin/inc/widget.php';?>
          <div class="col-md-9">

            <!-- Website Overview -->
            <?php require APPROOT .'/views/admin/inc/overview.php';?>

              <!-- Latest Users -->
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h3 class="panel-title">Derniers épisodes</h3>
                </div>
                <div class="panel-body">
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
                        <td><?php echo $post->number_e; ?></td>
                        <td><?php echo $post->title;?></td>
                        <td><?php echo $post->c_date ?></td>
                        <td><a class="btn btn-default" href="<?php echo URLROOT; ?>/admin/edit/<?php echo $post->id; ?>">Modifier</a></td>
                        <td><form class="pull-right" action="<?php echo URLROOT; ?>/admin/delete/<?php echo $post->id; ?>" method="post" >

                        <input type="submit" value="supprimer" class="btn btn-danger">

                        </form></td>
                      </tr>
                      <?php endforeach ; ?>
                    </table>
                </div>
              </div>
          </div>
        </div>
      </div>
    </section>

    <?php  require APPROOT .'/views/admin/inc/footer.php'; ?>