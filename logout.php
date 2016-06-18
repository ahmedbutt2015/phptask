<?php
<<<<<<< HEAD
require('/config.php');
session_destroy();
header("Location:/");
=======
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
>>>>>>> bf968ed30a8947947abf2364f553e7e55b07b4ba
