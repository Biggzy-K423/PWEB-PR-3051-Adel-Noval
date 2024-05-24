<?php
// controller/TopupController.php

require_once '../model/TopupModel.php';
require_once '../config/Database.php';

class CreateController {
    private $CreateModel;

    public function __construct() {
        $database = new Database();
        $db = $database->getConnection();
        $this->CreateModel = new CreateController($db);
    }

    public function handleRequest() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $Pelanggan = $_POST['Pelanggan'];
            $Kategori_Game = $_POST['Kategori_Game'];
            $Nomor_Hp = $_POST['Nomor_Hp'];
            $Perkiraan_Selesai = $_POST['Perkiraan_Selesai'];
            $Status = $_POST['Status'];
            
            // Handle file upload
            if (isset($_FILES["bukti_tf"])) {
                $Bukti_tf = $_FILES["bukti_tf"]["name"];
                $lokasi = $_FILES["bukti_tf"]["tmp_name"];
                move_uploaded_file($lokasi, "../assets/images/" . $Bukti_tf);
            } else {
                $Bukti_tf = "";
            }

            if ($this->CreateModel->addTopup($Pelanggan, $Kategori_Game, $Nomor_Hp, $Perkiraan_Selesai, $Status, $Bukti_tf)) {
                header("Location: ../view/dashboard_admin.php");
                exit();
            } else {
                $error = "Error: " . $this->CreateModel->conn->error;
                include '../view/form_topup.php';
            }
        } else {
            include '../view/form_topup.php';
        }
    }
}

$controller = new TopupController();
$controller->handleRequest();
?>
