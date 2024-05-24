<?php
// model/UserModel.php

class login {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function registerUser($full_name, $username, $password) {
        $query = "INSERT INTO registrasiuser (full_name, username, password) VALUES (?, ?, ?)";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("sss", $full_name, $username, $password);

        return $stmt->execute();
    }
}

class regist {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function registerUser($full_name, $username, $password) {
        $query = "INSERT INTO registrasiuser (full_name, username, password) VALUES (?, ?, ?)";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("sss", $full_name, $username, $password);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
?>
