<?php require APPROOT . '/views/inc/header.php'; ?>
<header class="image" style="background-image: url('<?php echo URLROOT; ?>/bootstrap/img/admin.jpg')">

</header>

<div class="container">
    <div class="row">
    <div class="col-lg-8 col-md-10 mx-auto login">
    <div class="card card-body bg-light mt-5">
    <form name="sentMessage" id="contactForm" novalidate>
    <h2>Se connecter</h2>
    <div class="control-group">
        <div class="form-group floating-label-form-group controls">
            <label>Name</label>
            <input type="text" class="form-control" placeholder="Name" id="name" required data-validation-required-message="Please enter your name.">
            <p class="help-block text-danger"></p>
        </div>
    </div>

    <div class="control-group">
        <div class="form-group floating-label-form-group controls">
            <label>Email Address</label>
            <input type="email" class="form-control" placeholder="Email Address" id="email" required data-validation-required-message="Please enter your email address.">
            <p class="help-block text-danger"></p>
        </div>
    </div>

    <div class="control-group">
        <div class="form-group col-xs-12 floating-label-form-group controls">
            <label>Phone Number</label>
            <input type="tel" class="form-control" placeholder="Phone Number" id="phone" required data-validation-required-message="Please enter your phone number.">
            <p class="help-block text-danger"></p>
        </div>
    </div>
    <br>
    <div id="success"></div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary" id="sendMessageButton">Send</button>
    </div>
    </form>
    </div>
</div>
</div>
</div>

<?php require APPROOT.'/views/inc/footer.php'; ?>

