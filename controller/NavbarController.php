<?php
// controller/NavbarController.php
require_once '../model/UserModel.php';

class NavbarController {
    public static function handleNavbar() {
        if (UserModel::isUserLoggedIn()) {
            $username = UserModel::getUsername();
            require '../view/navbar_loggedin.php';
        } else {
            require '../view/navbar_guest.php';
        }
    }
}
?>
