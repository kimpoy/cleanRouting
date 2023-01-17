<?php

namespace app\controller;

class Sign_In_Controller
{
    private $username;
    private $password;

    public function __construct($username, $password)
    {
        $this->username = $username;
        $this->password = $password;
    }

    public function sign_in_user()
    {
        if ($this->check_empty() == false) {
            header("location: /?empty");
            exit();
        }

        if ($this->valid_username() == false) {
            header("location: /?invalid-username");
            exit();
        }
    }

    private function check_empty()
    {
        $result = '';
        if (empty($this->username) || empty($this->password)) {
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
}
