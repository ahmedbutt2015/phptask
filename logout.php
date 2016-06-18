<?php
session_start();
if (!empty($_GET)){
    if (isset($_SESSION['username']) && isset($_SESSION['password'])) {
        unset($_SESSION['username']);
        unset($_SESSION['password']);
        session_destroy();
        header("Location:/");
    }
}
else{
header("Location:/");
}