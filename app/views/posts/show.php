
<?php  require APPROOT .'/views/inc/header.php'; ?>
<header class="masthead" style="background-image: url('<?php echo URLROOT; ?>/bootstrap/img/about-bg.jpg')">
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
    <div>
    <?php flash('post_message');?> 
  </div>
    <!-- Post Content -->
    <article>
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-10">
            <p><?php echo htmlspecialchars_decode($data['post']->content) ?></p>
          </div>
        </div>
      </div>
    </article>
    <?php  require APPROOT .'/views/Comments/showComment.php'; ?>
  
  <div class="container">
<div class="row">
<div class="col-lg-12 col-md-10 mx-auto ">

<form action ="<?php echo URLROOT; ?>/posts/add/<?php echo $data['post']->id ?>" method = "post">
    <div class="form-group">
        <label for="title">pseudo</label>
        <input type="text" name ="author" placeholder="Nom" class="form-control" required data-validation-required-message="Veuillez entrer votre nom ." value="<?php @$data['author'];?>">
    </div>
    <div class="form-group">
        <label for= "comment">commentaire :</label>
        <textarea  id="comment"name="comment" placeholder="Commentaire" 
        class="form-control" <?php echo @$data['comment'];?>>
        </textarea>
        <span class="invalid-feedback" required data-validation-required-message="Veuillez entrer votre nom ." ></span>
    </div>
    <div class="form-group">
        <input name= "submit" type="submit" class="btn btn-primary" value="Valider">
    </div>

<hr>
    <?php  require APPROOT .'/views/inc/footer.php'; ?>