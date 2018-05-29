<?php 

$newsletter = "";
$newsletter_error = false;

if($_SERVER['REQUEST_METHOD'] === 'POST') {

    if(empty($_POST['subscriber-email'])) {
        $newsletter_error = true;
    } else {
        $newsletter = trim($_POST['subscriber-email']);
        
        if(!filter_var($newsletter, FILTER_VALIDATE_EMAIL)) {
            $newsletter_error = true;
        }
    }

}