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
          <div class="col-lg-8 col-md-10 mx-auto">
            <p><?php echo $data['post']->content ?></p>
          </div>
        </div>
      </div>
    </article>

    <article class="comments">
    <div class="container">
    <div class="row">
    <div class="col-lg-8 col-md-10 mx-auto">
    <h2>Commentaires</h2>
    <?php foreach ($data['comments'] as $comments) : ?>

    <div class="form-group">
      <p><strong><?php echo $comments->author ;?></strong> le <?php echo $comments->comment_date_fr; ?></p>
    </div>
    <div class ="form-group floating-label-form-group controls">
      <p><?php echo $comments->comment;?></p>
      <div class="form-group">
              <button type="submit" class="btn btn-danger pull-right mb-3 !important" id="sendMessageButton">Signaler</button>
            </div>

    </div>
  <?php endforeach;?>
  </div>
  </div>
  </div>

    </article>

    <article>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
          <form action="<?php URLROOT;?>/posts/comment/<?php echo $data['id']; ?>" name="sentMessage" id="contactForm" novalidate method="post">
            <div class="control-group">
              <div class="form-group floating-label-form-group controls">
                <label for="author">Nom</label>
                <input type="text" class="form-control <?php echo (!empty(@$data
                ['title_err'])) ? 'is-invalid' : '' ; ?>" placeholder="Nom" id="name" value="<?php $data['title'];?>">
                <span class="invalid-feedback"><?php echo @$data['title_err']; ?></span>
              </div>
            </div>
            
            <div class="control-group">
              <div class="form-group floating-label-form-group controls">
                <label for="content">Message</label>
                <textarea rows="5" class="form-control <?php echo (!empty(@$data
                ['content_err'])) ? 'is-invalid' : '' ; ?>" placeholder="Message" id="message" 
                <?php echo $data['content'];?>>
                </textarea>
                <span class="invalid-feedback"><?php echo @$data['content_err']; ?></span>
              </div>
            </div>
            <br>
            <div id="success"></div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary" id="sendMessageButton">Commenter</button>
            </div>
          </form>
        </div>
      </div>
    </div>
</article>

    <hr>
    <?php  require APPROOT .'/views/inc/footer.php'; ?>