<?php

clearstatcache();

$name = "";
$name_error = false;

$email = "";
$email_error = false;

$message = "";
$message_error = false;

// Check if the form submit
if($_SERVER['REQUEST_METHOD'] === 'POST') {    

    // check and validate field
    if(empty($_POST['contact-name'])) {
        $name_error = true;
    } else {
        $name =  validate_input($_POST['contact-name']);
        if(!preg_match("/^[a-zA-Z ]*$/", $name)) {
            $name_error = true;
        }
    }

    // check and validate field
    if(empty($_POST['contact-email'])) {
        $email_error = true;
    } else {
        $email =  validate_input($_POST['contact-email']);
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $email_error = true;
        }
    }

    // check and validate field
    if(empty($_POST['contact-message'])) {
        $message_error = true;
    } else {
        $message =  validate_input($_POST['contact-message']);        
    }

}

function validate_input( $field ) {
    $field = trim($field);
    $field = stripslashes($field);
    $field = htmlspecialchars($field);
    return $field;
}