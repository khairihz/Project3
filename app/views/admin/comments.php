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
                        <th>auteur</th>
                        <th>commentaire</th>

                      </tr>
                      <tr>
                      <?php foreach ($data['comments'] as $comment) : ?>
                        <td><?php echo $comment->post_id; ?></td>
                        <td><?php echo $comment->author;?></td>
                        <td><?php echo $comment->comment; ?></td>

                      </tr>
                      <?php //$_SESSION['max_number'] = $post->number_e; ?>
                      <?php endforeach ; ?>
                      <?php //$_SESSION['max_number']++; ?>
                    </table>
                </div>
              </div>
          </div>
        </div>
      </div>
    </section>

    <?php  require APPROOT .'/views/admin/inc/footer.php'; ?>