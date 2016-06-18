<?php
session_start();

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
        if (!$userFound) {
            session_destroy();
            header("Location:/");
        }
        $_SESSION['username'] = $user;
        $_SESSION['password'] = $pass;
    }else{
        header('Location:/');
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
    <p>This is a Profile Page for user <?= $_SESSION['username'] ?></p>
    <a href="logout.php?log=true">Logout</a>
</div>

<?php
include('views/common/footer.php');
?>
</body>
</html>
