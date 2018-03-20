<?php require APPROOT . '/views/inc/header.php'; ?>
<header class="masthead" style="background-image: url('<?php echo URLROOT; ?>/bootstrap/img/home-bg.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
              <h1><?php echo $data['title']?></h1>
              <span class="subheading"><?php echo $data ['description'] ?></span>
            </div>
          </div>
        </div>
      </div>
    </header>
<div class="row">
    <div class="col-md-6 mx-auto">
        <div class="card card-body bg-light mt-5">
            <h2>Se connecter</h2>
            <p>Veuillez vous connectez pour accéder à l'espace d'administration</p>
        </div>
    </div>
</div>
<?php require APPROOT.'/views/inc/footer.php'; ?>