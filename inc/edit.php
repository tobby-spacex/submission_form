<?php include 'header.php';?>
<?php require('../lib/editp.php');?>

<div class="container">

    <div class ="form-group">
    <form method="POST" action="">
      <label>Name</label>
      <input type="text"  name="name" class="form-control" value="<?php echo $_GET['name']; ?>" >
    </div>
    <div class ="form-group">
      <label>Surname</label>
      <input type="text" placeholder="surname"  name="surname" class="form-control" value="<?php echo $_GET['surname']; ?>">
    </div>
    <div class ="form-group">
      <label>Email</label>
      <input type="text" placeholder="email" name="email" class="form-control" value="<?php echo $_GET['email']; ?>">
    </div>
    <div class ="form-group">
      <label>Phone</label>
      <input type="text" placeholder="phone"  name="phone" class="form-control" value="<?php echo $_GET['phone']; ?>">
    </div>
    <input type="hidden" name="update_id" value="<?php echo $_GET['id']; ?>">
    <button type="submit" name="submit" class="btn btn-primary">Edit</button>
    </form>
 </div>

<?php include 'footer.php' ?>