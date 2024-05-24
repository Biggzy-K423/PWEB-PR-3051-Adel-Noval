<?php
// controller/LoginRegistrationController.php

require_once '../model/UserModel.php';
require_once '../config/Database.php';

class LoginRegistrationController {
    private $userModel;

    public function __construct() {
        $database = new Database();
        $db = $database->getConnection();
        $this->userModel = new UserModel($db);
    }

    public function login() {
        session_start();

        // Check if the form has been submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Get user input
            $username = $_POST['username'];
            $password = $_POST['password'];

            // Attempt to log in the user
            $result = $this->userModel->getUser($username, $password);

            // Check if the user exists
            if ($result->num_rows > 0) {
                $_SESSION['username'] = $username;
                header('Location: tampilan.php');
                exit();
            } else {
                echo "Invalid username or password";
            }
        }
    }

    public function register() {
        // Check if the form has been submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $error = '';

            $full_name = $_POST["full_name"];
            $username = $_POST["username"];
            $password = $_POST["password"];

            // Check if any fields are empty
            if (empty($username) || empty($full_name) || empty($password)) {
                $error = "Please fill in all the fields";
            } else {
                // Attempt to register the user
                if ($this->userModel->registerUser($full_name, $username, $password)) {
                    header("Location: ../view/tampilan.php");
                    exit();
                } else {
                    $error = "Registration failed";
                }
            }
        }

        include '../view/registration.php';
    }
}

$controller = new LoginRegistrationController();

// Route the request based on the action parameter
$action = isset($_GET['action']) ? $_GET['action'] : 'login';
if ($action == 'register') {
    $controller->register();
} else {
    $controller->login();
}
?>
