<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Codeigniter 4 Form Validation Example - positronx.io</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <style>
    .container {
      max-width: 550px;
    }
  </style>
</head>

<body>
  <div class="container mt-5">
         
    <?php $validation = \Config\Services::validation(); ?>

    <form method="post" action="<?php echo base_url('/CDAprojet/public/contact') ?>">
      <div class="form-group">
        <label>Nom:</label>
        <input type="text" name="name" class="form-control">

        <!-- Error -->
        <?php if($validation->getError('name')) {?>
            <div class='alert alert-danger mt-2'>
              <?= $error = $validation->getError('name'); ?>
            </div>
        <?php }?>
      </div>
       

      <div class="form-group">
        <label>Email:</label>
        <input type="text" name="email" class="form-control">

        <!-- Error -->
        <?php if($validation->getError('email')) {?>
            <div class='alert alert-danger mt-2'>
              <?= $error = $validation->getError('email'); ?>
            </div>
        <?php }?>
      </div>

      <div class="form-group">
        <label>Téléphone:</label>
        <input type="text" name="phone" class="form-control">

        <!-- Error -->
        <?php if($validation->getError('phone')) {?>
            <div class='alert alert-danger mt-2'>
              <?= $error = $validation->getError('phone'); ?>
            </div>
        <?php }?>
      </div>

      <div class="form-group">
        <label>Message:</label>
        <textarea type="text" name="message" class="form-control"></textarea>

        <!-- Error -->
        <?php if($validation->getError('message')) {?>
            <div class='alert alert-danger mt-2'>
              <?= $error = $validation->getError('message'); ?>
            </div>
        <?php }?>
      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block">Submit</button>
      </div>
    </form>

  </div>
</body>

</html>