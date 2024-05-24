<?php
// model/TopupModel.php

class CreateModel {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function addTopup($Pelanggan, $Kategori_Game, $Nomor_Hp, $Perkiraan_Selesai, $Status, $Bukti_tf) {
        $sql = "INSERT INTO usertopup (Pelanggan, kategori_Game, Nomor_Hp, Perkiraan_Selesai, status, Bukti_tf) VALUES (?,?,?,?,?,?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("ssssss", $Pelanggan, $Kategori_Game, $Nomor_Hp, $Perkiraan_Selesai, $Status, $Bukti_tf);

        return $stmt->execute();
    }
}
?>
