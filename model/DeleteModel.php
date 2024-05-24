<?php
// model/TopupModel.php

class DeleteModel {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function deleteTopup($id) {
        $query = "DELETE FROM usertopup WHERE ID_Pelanggan = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }
}
?>
