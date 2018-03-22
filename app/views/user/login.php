<?php require APPROOT . '/views/inc/login_header.php'; ?>
<header class="image" style="background-image: url('<?php echo URLROOT; ?>/bootstrap/img/home-bg.jpg')">
      
</header>
<section id="main">
<div class="container">
  <div class="row">
    <div class="col-md-4 col-md-offset-4">
    <form id="login" action="<?php echo URLROOT; ?>/user/login" class="well" method="post">
    <h2 style="margin-bottom: 20px;">Se connecter</h2>
          <div class="form-group">
            <label for="email">Adresse mail:<sup>*</sup></label>
            <input type="email" class="form-control" placeholder="Entrer votre email" name="email"
            <?php echo (!empty($data['email_err'])) ? 'is-invalid':''; ?> value="<?php echo $data['email']; ?>">
            <span class="invalid-feedback"><?php echo $data['email_err']; ?></span>
          </div>
          <div class="form-group">
            <label for="password">Mot de passe<sup>*</sup></label>
            <input type="password" name="password" class="form-control" placeholder="Mot de passe"
            <?php echo (!empty($data['password_err']))  ? 'is-invalid' : ''; ?> value ="<?php echo $data['password'];?>">
            <span class="invalid-feedback"><?php echo $data['password_err']; ?></span>
          </div>
          <button type="submit" class="btn btn-default btn-block">Connexion</button>
      </form>

    </div>
  </div>
</div>
</section>
<?php require APPROOT.'/views/inc/login_footer.php'; ?>