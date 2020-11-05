<?php include 'header.php' ?>
<?php require 'lib/insert.php' ?>
<?php include 'lib/validator.php' ?>



<div class="container">
    <!-- If the field is empty, it will inform   -->
        <?php if($msg != ''): ?>
                    <div class="alert <?php echo $msgClass; ?>"><?php echo $msg; ?></div>
        <?php endif; ?>

  <form method="post" action=" " class="">
    <div class ="form-group">
      <label>Name</label>
      <input type="text" placeholder="name"  name="name" class="form-control" >
    </div>
    <div class ="form-group">
      <label>Surname</label>
      <input type="text" placeholder="surname"  name="surname" class="form-control">
    </div>
    <div class ="form-group">
      <label>Email</label>
      <input type="text" placeholder="email" name="email" class="form-control">
    </div>
    <div class ="form-group">
      <label>Phone</label>
      <input type="text" placeholder="phone"  name="phone" class="form-control">
    </div>
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

<?php include 'footer.php' ?>