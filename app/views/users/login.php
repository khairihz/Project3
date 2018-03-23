<?php require APPROOT . '/views/inc/header.php'; ?>
<header class="image" style="background-image: url('<?php echo URLROOT; ?>/bootstrap/img/admin.jpg')">

</header>

<div class="container">
    <div class="row">
    <div class="col-lg-8 col-md-10 mx-auto login">
    <div class="card card-body bg-light mt-5">
    <form name="sentMessage" id="contactForm" action ="<?php echo URLROOT;?>/users/login" method="post">
    <h2>Se connecter</h2>
    <div class="control-group">
        <div class="form-group floating-label-form-group controls">
            <label for="email">Adresse email :</label>
            <input type="email" placeholder="Adresse mail" id="email" name ="email" class="form-control 
            <?php echo (!empty($data['email_err'])) ? 'is-invalid' :''; ?>" value "<?php echo $data['email'];?>">
            <span class="invalid-feedback"><?php echo $data['email_err']; ?></span>
        </div>
    </div>

    <div class="control-group">
        <div class="form-group floating-label-form-group controls">
            <label for="password">Mot de passe :</label>
            <input type="password" placeholder="Mot de passe" id="password" name="password" class="form-control 
            <?php echo (!empty($data['password_err'])) ? 'is-invalid' :''; ?>" value "<?php echo $data['password'];?>">
            <span class="invalid-feedback"><?php echo $data['password_err']; ?></span>
        </div>
    </div>
    <br>
    <div id="success"></div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary" id="sendMessageButton" value"login">Se connecter</button>
    </div>
    </form>
    </div>
</div>
</div>
</div>

<?php require APPROOT.'/views/inc/footer.php'; ?>

