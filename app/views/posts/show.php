
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
<?php var_dump($data['id']); ?>
<form action ="<?php echo URLROOT; ?>/posts/add/<?php echo $data['post']->id ?>" method = "post">
    <div class="form-group">
        <label for="title">Nom</label>
        <input type="text" name ="author" placeholder="Nom" class="form-control"value="<?php @$save['author'];?>">
    </div>
    <div class="form-group">
        <label for= "content">Message :</label>
        <textarea name="comment" placeholder="Commentaire"
        class="form-control" <?php echo @$data['comment'];?>>
        </textarea>
    </div>
    <div class="form-group">
        <input name= "submit" type="submit" class="btn btn-default" value="Valider">
    </div>

<hr>
    <?php  require APPROOT .'/views/inc/footer.php'; ?>