
<?php  require APPROOT .'/views/inc/header.php'; ?>
<header class="masthead" style="background-image: url('<?php echo URLROOT; ?>/bootstrap/img/post-bg.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="post-heading">
              <h1><?php echo $data['post']->title;?></h1>
              <span class="meta">Publié le
                <?php echo $data['post']->c_date; ?></span>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- Post Content -->
    <article>
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-10">
            <p><?php echo $data['post']->content ?></p>
          </div>
        </div>
      </div>
    </article>
    <?php  require APPROOT .'/views/Comments/showComment.php'; ?>
    <div>
    <?php flash('post_message');?>
  </div>
  
  <div class="container">
<div class="row">
<div class="col-lg-8 col-md-10 mx-auto comment">
<?php 
var_dump($data['id'] ); ?>
</br>

<hr>
    <?php  require APPROOT .'/views/inc/footer.php'; ?>