<?php require('../config/config.php');
      require('../config/db.php');

if(isset($_POST['submit'])){

  $update_id = mysqli_real_escape_string($conn, $_POST['update_id']);
  $name = mysqli_real_escape_string($conn, $_POST['name']);
  $surname = mysqli_real_escape_string($conn, $_POST['surname']);
  $email = mysqli_real_escape_string($conn,$_POST['email']);
  $phone = mysqli_real_escape_string($conn,$_POST['phone']);

  $query = "UPDATE person SET
          name='$name',
          surname='$surname',
          email='$email',
          phone='$phone'
          WHERE id = {$update_id}";

          if(mysqli_query($conn, $query)){
            header('Location: '.ROOT_URL.'');
          }else {
            echo 'ERROR: '. mysqli_error($conn);
          }
}
?>