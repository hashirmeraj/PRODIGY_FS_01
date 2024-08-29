<?php
include './config.php';
$method = $_SERVER['REQUEST_METHOD'];
if ($method == 'POST') {
    $loginEmail = $_POST['loginEmail'];
    $loginPassword = $_POST['loginPassword'];
    
}
