<article class="comments">
    <div class="container">
    <div class="row">
    <div class="col-lg-12 col-md-10 mx-auto">
    <h2> <?=count($data['comments']);?> Commentaires</h2>
    <div class="panel-body">
    <table class="table table-striped table-hover">
    <tr>
      <th></th>
      <th></th>
      <th></th>
    </tr>
    <?php var_dump($data['id']) ?>
    <tr>
      <?php foreach ($data['comments'] as $comments) : ?>
      <td><strong><?php echo $comments->author; ?></strong> :</td>
      <td><?php echo $comments->comment;?></td>
      <td><form class="pull-right" action="<?php echo URLROOT; ?>/posts/report/<?php echo $comments->id; ?>" method="post" >
  
      <input type="submit" value="Signaler" class="btn btn-danger">
  
      </form>
      </td>
      </tr>
      <?php endforeach ; ?>
      </table>

    </div>

</article> 
