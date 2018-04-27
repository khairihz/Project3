    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top menu" id="mainNav">
      <div class="container">
        <a class="navbar-brand" href="<?php echo URLROOT;?>/posts/index"><?php echo SITENAME;?></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="<?php echo URLROOT; ?>/posts/index">Chapitres</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo URLROOT;?>/pages/about">À propos</a>
            </li>

            <?php if(isset($_SESSION['user_id'])) : ?>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo URLROOT;?>/admin/index">Administration</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo URLROOT;?>/users/logout">Déconnexion</a>
            </li>
            <?php else: ?>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo URLROOT;?>/users/login">Administrateur</a>
            </li>
          <?php endif; ?>
          </ul>
        </div>
      </div>
    </nav>