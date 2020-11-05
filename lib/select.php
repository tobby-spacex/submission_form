<?php

include_once '../config/db.php';

$query = 'SELECT * FROM person';

$result = mysqli_query($conn, $query);

$members = mysqli_fetch_all($result, MYSQLI_ASSOC);

mysqli_free_result($result);

mysqli_close($conn);

// var_dump($members);
// var_dump($result);