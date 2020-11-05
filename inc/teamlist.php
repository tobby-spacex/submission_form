<?php include 'header.php' ?>
<?php include '../lib/select.php'?>
<?php require('../lib/delete.php');?>


<div class="container">
<div class="my-3 p-3 bg-white rounded shadow-sm">
    <h6 class="border-bottom border-gray pb-2 mb-0">Recent updates</h6>

    <?php foreach($members as $member): ?>
        <?php
        //var_dump($member); die;

        $memberget = [];
        foreach(array_keys($member) as $key)
        {
            $memberget[] = $key .'='. $member[$key];
        }
        $get = implode("&",$memberget);

    ?>

<form method="POST" action="">
    <div class="media text-muted pt-3">
      <svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title><rect width="100%" height="100%" fill="#007bff"/><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text></svg>
      <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
        <strong class="d-block text-gray-dark"><?php echo $member['name']; ?></strong>

        <?php echo $member['surname']. '; ' . $member['email']. '; '. $member['phone'];?>
        <!-- <a href=" " name="submit" style = "position:fixed; right:250px"  class="btn btn-danger">Delete</a> -->
        <button type="submit" name="delete" style = "position:fixed; right:250px" class="btn btn-danger">Delete</button>

        <a href="edit.php?<?php echo $get;?>" style = "position:fixed; right:320px" class="btn btn-primary">Edit</a>
        <input type="hidden" name="delete_id" value="<?php echo $member['id']; ?>">
      </p>
    </div>
</form>
    <?php endforeach; ?>

    <small class="d-block text-right mt-3">
      <a style ="position:fixed; right:250px"  href="http://slide/index.php">Back</a>
    </small>
  </div>
</div>

<?php include 'footer.php' ?>