<?php

use app\controller\Sign_In_Controller;

if (isset($_POST['submit'])) {

    //* get data from the form
    $username = $_POST['username'];
    $password = $_POST['password'];

    //* error handling
    $sign_in_controller = new Sign_In_Controller($username, $password);
    $sign_in_controller->sign_in_user();
}
