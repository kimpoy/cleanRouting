<?php

namespace app\controller;

use Sign_Up;

class Sign_Up_Controller extends Sign_Up
{
    private $firstname;
    private $lastname;
    private $username;
    private $email;
    private $password;
    private $confirm_password;

    public function __construct($username, $email, $password, $confirm_password, $firstname, $lastname)
    {
        //* $this is from properties
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
        $this->confirm_password = $confirm_password;
    }


    public function sign_up_user()
    {
        if ($this->check_empty() == false) {
            header("location: /sign_up?empty");
            exit();
        }
        if ($this->valid_username() == false) {
            header("location: /sign_up?invalid-username");
            exit();
        }
        if ($this->username_length() == false) {
            header("location: /sign_up?less-than-8");
            exit();
        }
        if ($this->valid_email() == false) {
            header("location: /sign_up?invalid-email");
            exit();
        }
        if ($this->password_match() == false) {
            header("location: /sign_up?password-dont-match");
            exit();
        }

        if ($this->user_exist() == true) {
            header("location: /sign_up?already-taker");
            exit();
        }

        $this->set_user($this->username, $this->email, $this->password, $this->firstname, $this->lastname);
    }

    private function check_empty()
    {
        $result = '';
        if (empty($this->firstname) || empty($this->lastname) || empty($this->username) || empty($this->email) || empty($this->password) || empty($this->confirm_password)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    private function valid_username()
    {
        $result = '';

        if (!preg_match("/^[a-zA-Z0-9]*$/", $this->username)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    private function username_length()
    {
        $result = '';

        if (strlen($this->username) < 8) {
            $result = false;
        } else {
            $result = true;
        }

        return $result;
    }

    private function valid_email()
    {
        $result = '';
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $result = false;
        } else {
            $result = true;
        }

        return $result;
    }

    private function password_match()
    {
        $result = '';

        if ($this->password !== $this->confirm_password) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    private function user_exist()
    {
        $result = '';
        if ($this->check_user($this->username, $this->email) == true) {
            // user exist
            $result = true;
        } else {
            $result = false;
        }
        return $result;
    }
}
