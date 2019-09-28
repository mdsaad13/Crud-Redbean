<?php

/**
 * Database connection 
 * @Author: Mohammed Saad
=====================================
   PROPERTY OF MOHAMMED SAAD
 * instagram = https://www.instagram.com/mohammed.__.saad/
 */
abstract class DB
{
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $DBName = "rb_test";

    protected function DB_Connect(bool $flag)
    {
        if ($flag == TRUE) {
            R::setup("mysql:host=" . $this->host . ";dbname=" . $this->DBName, $this->username, $this->password);
            R::useFeatureSet("novice/latest");
        } else if ($flag == FALSE) {
            R::close();
        }
    }
}
