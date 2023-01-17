<?php


class Database
{
    public function connection()
    {
        try {
            $username = "root";
            $password = "";
            $host = new PDO("mysql:host=localhost;dbname=inventory", $username, $password);
            $host->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


            return $host;
            #echo "YES!";
        } catch (PDOException $e) {
            echo "ERROR!" . $e->getMessage() . "<br>";
            die();
        }
    }
}
