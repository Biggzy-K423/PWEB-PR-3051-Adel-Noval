<?php
// controller/PageController.php
require_once '../model/UserModel.php';

class PageController {
    public static function showHomePage() {
        require '../view/header.php';
        NavbarController::handleNavbar();
        require '../view/home.php';
        require '../view/footer.php';
    }

    public static function showLoginPage() {
        require '../view/header.php';
        require '../view/login.php';
        require '../view/footer.php';
    }

    public static function logout() {
        UserModel::logout();
        header("Location: index.php");
    }
}
?>
