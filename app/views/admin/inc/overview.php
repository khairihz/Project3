<div class="panel panel-default">
  <div class="panel-heading main-color-bg">
    <h3 class="panel-title">Aperçu du site</h3>
  </div>
  <div class="panel-body">
    <div class="col-md-4">
      <div class="well dash-box overview">
        <h2><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> <?php echo $data['nbposts']['total']; ?></h2>
        <h4>Épisodes</h4>
      </div>
    </div>
    <div class="col-md-4">
      <div class="well dash-box overview2">
        <h2><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> <?php echo $data['nbcomment']['total']; ?></h2>
        <h4>Commentaires</h4>
      </div>
    </div>
    <div class="col-md-4">
      <div class="well dash-box overview3">
        <h2><span class="glyphicon glyphicon-stats" aria-hidden="true"></span> <?php echo $data['nbreport']['total_R']; ?></h2>
        <h4>Commentaires Signalés</h4>
      </div>
    </div>
  </div>
  </div>