<?php  require APPROOT .'/views/admin/inc/header.php'; ?>
<section id="breadcrumb">
      <div class="container">
        <ol class="breadcrumb">
          <li class="active">Tableau de bord</li>
        </ol>
      </div>
    </section>

    <section id="main">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="list-group">
              <a href="index.html" class="list-group-item active main-color-bg">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Tableau de bord
              </a>
              <a href="posts.html" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Episodes <span class="badge">12</span></a>
              <a href="posts.html" class="list-group-item"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Commentaires <span class="badge">33</span></a>
              <a href="users.html" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Commentaires Signalés <span class="badge">203</span></a>
            </div>
          </div>
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
                  <table class="table table-striped table-hover">
                      <tr>
                        <th>Numéro d'épisode</th>
                        <th>Épisodes</th>
                        <th>Date de publication</th>
                      </tr>
                      <tr>
                      <?php foreach ($data['admin'] as $post) : ?>
                        <td><?php echo $post->id; ?></td>
                        <td><?php echo $post->title;?></td>
                        <td><?php echo $post->c_date ?></td>
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