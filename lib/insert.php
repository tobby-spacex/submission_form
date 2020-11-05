<?php
include_once 'config/db.php';

if(isset($_POST['submit'])){

        if(!empty($_POST['name']) && !empty($_POST['surname']) && !empty($_POST['email']) && !empty($_POST['phone'])){

            $name = $_POST['name'];
            $surname = $_POST['surname'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];


            $query = "INSERT INTO person(name, surname, email, phone) VALUES('$name', '$surname', '$email', '$phone' )";

            $run = mysqli_query($conn, $query);
        }
}