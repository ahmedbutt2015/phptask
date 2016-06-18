<?php
    require ('/config.php');
?>
<!doctype html>
<html lang="en">
<?php
    $title = "Hogwards - Log In";
    include('views/common/header.php');
?>
<body>

<div class="container">
    <form class="form-signin" method="POST" action="userLandingPage.php">
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="inputUserName" class="sr-only">User Name</label>
        <input type="text" name = "username" class="form-control" placeholder="User Name" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" class="form-control" placeholder="Password" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
    </form>
</div>

<div class="container">
    <a href="register.php"><button class="btn btn-lg btn-primary btn-block" type="submit">Sign up</button></a>
</div>
<?php
    include('views/common/footer.php');
?>
</body>
</html>