<?php
class Database
{
    public $conn;

    public function __construct()
    {
        $this->conn = new mysqli("localhost", "root", "", "students");
        if ($this->conn->error) {
            die("DB ERROR");
        }
    }
}
