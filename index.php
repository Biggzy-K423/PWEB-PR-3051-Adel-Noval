<?php
// index.php

require_once 'fe sopup/controller/LoginController.php';
require_once 'controller/CreateController.php';
require_once 'controller/DeleteController.php';

$controller = new LoginController();
$controller->handleRequest();

$controller = new CreateController();
$controller->handleRequest();

$controller = new DeleteController();
$controller->handleRequest();
