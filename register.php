<?php
    require ('/config.php');
?>
<!doctype html>
<html lang="en">
<?php
    $title = "Hogwards - Sign Up";
    include('views/common/header.php');
?>
<body>

<div class="container">
    <form class="form-signin" method="POST" action="addUser.php">
        <h2 class="form-signin-heading">Please sign in</h2>
        <input type="text" name="name" class="form-control" placeholder="Full Name" required autofocus>
        <input type="email" name="email" class="form-control" placeholder="Email" required>
        <input type="text" name="username"  class="form-control" placeholder="User Name" required>
        <input type="password" name="password"  class="form-control" placeholder="Password" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
    </form>
</div>

<?php
    include('views/common/footer.php');
?>
</body>
</html>