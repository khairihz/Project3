<article class="comments">
    <div class="container">
    <div class="row">
    <div class="col-lg-12 col-md-10 mx-auto">
    <h2> <?=count($data['comments']);?> Commentaires</h2>
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