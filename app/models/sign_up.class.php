<?php

class Sign_Up extends Database
{

    protected function set_user($username, $email, $password, $firstname, $lastname)
    {
        $statement = $this->connection()->prepare("INSERT INTO users (username,email,password,firstname,lastname,user_type_id) VALUES (?,?,?,?,?,?)");
        $encrypt_password = password_hash($password, PASSWORD_DEFAULT);

        if (!$statement->execute(array($username, $email, $encrypt_password, $firstname, $lastname, USER_TYPE))) {
            $statement = null;
            header("location: /sign_up?creating-profile-failed");
            exit();
        }

        $statement = null;
    }


    protected function check_user($username, $email)
    {
        $statement = $this->connection()->prepare("SELECT username FROM users WHERE username = ? OR email = ?;");

        if (!$statement->execute(array($username, $email))) {
            $statement = null;
            header("location: /sign_up?execution-failed");
            exit();
        }

        //* already exist (true)
        $result = '';
        if ($statement->rowCount() > 0) {
            $result = true;
        } else {
            $result = false;
        }

        return $result;
    }
}
