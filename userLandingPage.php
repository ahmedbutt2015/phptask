<?php
session_start();
<<<<<<< HEAD

if (!isset($_SESSION['username'], $_SESSION['password'])) {
    if (!empty($_POST)) {
        $user = $_POST['username'];
        $pass = $_POST['password'];
        require('database/Connection.php');
        $con = new Connection();
        $con = $con->getConnection();
        $userFound = false;
        if ($con) {
            $query = $con->prepare("SELECT * FROM users WHERE username = ?");
            $query->bindParam(1, $user);
            $query->execute();
            $tempUser = $query->fetch();
            if (password_verify($pass, $tempUser['password'])) {
                $userFound = true;
            }
        }
=======
if (!isset($_SESSION['username']) && !isset($_SESSION['password'])) {
    $user = $_POST['username'];
    $pass = $_POST['password'];
    require('database/Connection.php');
    $con = new Connection();
    $con = $con->getConnection();
    $userFound = false;
    if ($con) {
        $query = $con->prepare("SELECT * FROM users");
        $query->execute();
        while ($tempUser = $query->fetch()) {
            if ($tempUser['username'] == $user) {
                if (password_verify ($pass , $tempUser['password'] )) {
                    $userFound = true;
                    break;
                }
            }
        }

>>>>>>> bf968ed30a8947947abf2364f553e7e55b07b4ba
        if (!$userFound) {
            session_destroy();
            header("Location:/");
        }
        $_SESSION['username'] = $user;
        $_SESSION['password'] = $pass;
<<<<<<< HEAD
    }else{
        header('Location:/');
    }
}
=======
    }
}

>>>>>>> bf968ed30a8947947abf2364f553e7e55b07b4ba
?>
<!doctype html>
<html lang="en">
<?php
$title = "Hogwards - Profile";
include('views/common/header.php');
?>
<body>

<div class="container">
<<<<<<< HEAD
    <p>This is a Profile Page for user <?= $_SESSION['username'] ?></p>
=======
    <p>This is a Profile Page for user <?=$_SESSION['username']?></p>
>>>>>>> bf968ed30a8947947abf2364f553e7e55b07b4ba
    <a href="logout.php?log=true">Logout</a>
</div>

<?php
include('views/common/footer.php');
?>
</body>
</html>
