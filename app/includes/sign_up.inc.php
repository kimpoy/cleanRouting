<?php

use app\controller\Sign_Up_Controller;


if (isset($_POST['submit'])) {
    //get the data from the form
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    $sign_up_controller = new Sign_Up_Controller($username, $email, $password, $confirm_password, $firstname, $lastname);
    $sign_up_controller->sign_up_user();
    #header("location: \?success-account-creation");
}
