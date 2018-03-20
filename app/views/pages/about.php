<?php  require APPROOT .'/views/inc/header.php'; ?>
<header class="masthead" style="background-image: url('<?php echo URLROOT; ?>/bootstrap/img/about-bg.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="page-heading">
              <h1><?php echo $data['title']?></h1>
              <span class="subheading"><?php echo $data['description']?></span>
            </div>
          </div>
        </div>
      </div>
    </header>
<div class="container">
    <h1></h1>
</div>
<?php  require APPROOT .'/views/inc/footer.php'; ?>