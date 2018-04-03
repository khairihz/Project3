<?php  require APPROOT .'/views/inc/header.php'; ?>
<header class="masthead" style="background-image: url('<?php echo URLROOT; ?>/bootstrap/img/home-bg.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
              <h1>Billet simple pour l'alaska</h1>
              <span class="subheading">Je vous souhaite une bonne lecture</span>
            </div>
          </div>
        </div>
      </div>
</header>
<section>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <?php foreach ($data['posts'] as $post) : ?>
            
          <div class="post-preview">
            <a href="<?php echo URLROOT; ?>/posts/show/<?php echo $post->id; ?>">
              <h2 class="post-title">
                <?php echo $post->title;?>
              </h2>
              <h3 class="post-subtitle">
                <?php echo $post->sub_content;?>...
              </h3>
            </a>
            <p class="post-meta">Écrit le 
              <?php echo $post->c_date ?></p>
          </div>
          <?php endforeach ;?>
          
          <hr>
          <!-- Pager -->
          <div class="clearfix">
            <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
          </div>
        </div>
      </div>
    </div>

    <hr>
</section>
<?php  require APPROOT .'/views/inc/footer.php'; ?>