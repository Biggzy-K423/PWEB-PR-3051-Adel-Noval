<?php
// model/TopupModel.php

class EditModel {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function updateTopup($ID_Pelanggan, $Pelanggan, $Kategori_Game, $Nomor_Hp, $Perkiraan_Selesai, $Status) {
        $query = "UPDATE usertopup SET Pelanggan=?, Kategori_Game=?, Nomor_Hp=?, Perkiraan_Selesai=?, Status=? WHERE ID_Pelanggan=?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("sssssi", $Pelanggan, $Kategori_Game, $Nomor_Hp, $Perkiraan_Selesai, $Status, $ID_Pelanggan);

        return $stmt->execute();
    }
}
?>
