<?php
    	$msg = '';
        $msgClass = '';

    // Check For Submit
    if(filter_has_var(INPUT_POST, 'submit')){

        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];


    // если поле пустое выводит ошибку
        if(empty($name) && empty($surname) && empty($email) &&  empty($phone)){
        $msg = 'Please fill in all fields';
		$msgClass = 'alert-danger';
        }
    // если все поля имеет правильные данные, то тогда выводит УСПЕХ
        if(!empty($name) && !empty($surname) && !empty($email) && !empty($phone)){
        $msg = 'Member details added';
        $msgClass = 'alert-success';

    // проверка правильности почты
        if(filter_var($email, FILTER_VALIDATE_EMAIL) == false){
            $msg = 'Please use a valid email';
            $msgClass = 'alert-warning';
            }
        }


    }
?>