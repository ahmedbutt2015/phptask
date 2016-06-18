<?php
session_start();
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

        if (!$userFound) {
            session_destroy();
            header("Location:/");
        }
        $_SESSION['username'] = $user;
        $_SESSION['password'] = $pass;
    }
}

?>
<!doctype html>
<html lang="en">
<?php
$title = "Hogwards - Profile";
include('views/common/header.php');
?>
<body>

<div class="container">
    <p>This is a Profile Page for user <?=$_SESSION['username']?></p>
    <a href="logout.php?log=true">Logout</a>
</div>

<?php
include('views/common/footer.php');
?>
</body>
</html>
