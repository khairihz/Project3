
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
    <article>
    <!-- Hard code Comment system -->
    <?php var_dump($data['id']); ?>
    <?php echo $_SESSION['test'] ;?>
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-10 mx-auto">
          <form action="<?php URLROOT;?>/Posts/addComments/<?php echo $data['id']; ?>" method="post">
            <div class="control-group">
              <div class="form-group floating-label-form-group controls">
                <label for="author">Nom</label>
                <input type="text"  id = "author" name="author" class="form-control <?php echo (!empty(@$data
                ['author_err'])) ? 'is-invalid' : '' ; ?>"value="<?php $data['author'];?>">
                <span class="invalid-feedback"><?php echo @$data['author_err']; ?></span>
              </div>
            </div>
            
            <div class="control-group">
              <div class="form-group floating-label-form-group controls">
                <label for="comment">Message</label>
                <textarea rows="5" id="comment "name="comment" class="form-control <?php echo (!empty(@$data
                ['comment_err'])) ? 'is-invalid' : '' ; ?>"
                <?php echo $data['comment'];?>>
                </textarea>
                <span class="invalid-feedback"><?php echo @$data['comment_err']; ?></span>
              </div>
            </div>
            <br>
            <div id="success"></div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary">Commenter</button>
            </div>
          </form>
        </div>
      </div>
    </div>
</article>


    <hr>
    <?php  require APPROOT .'/views/inc/footer.php'; ?>