<div class="col-md-3">
    <div class="list-group">
        <a href="index.html" class="list-group-item active main-color-bg">
        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Tableau de bord
        </a>
        <a href="<?php echo URLROOT; ?>/admin/add" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Ajouter épisode</a>
        <a href="<?php echo URLROOT; ?>/admin/index" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Tableau d'épisode<span class="badge"><?php echo $data['nbposts']['total']; ?></span></a>
        <a href="<?php echo URLROOT; ?>/admin/comments" class="list-group-item"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Commentaires <span class="badge"><?php echo $data['nbcomment']['total']; ?></span></a>
        <a href="<?php echo URLROOT; ?>/admin/report" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Commentaires Signalés <span class="badge"><?php echo $data['nbreport']['total_R']; ?></span></a>
    </div>
</div>