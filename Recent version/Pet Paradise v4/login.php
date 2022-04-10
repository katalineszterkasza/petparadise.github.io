<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Login</title>
    <link rel="stylesheet" href="style_reg.css"/>
</head>
<body>
<?php
    require('php/database.php');
    session_start();
    
    if (isset($_POST['usernev'])) {
        $usernev = stripslashes($_REQUEST['usernev']);    // removes backslashes
        $jelszo = stripslashes($_REQUEST['jelszo']);
        
        if (checkuser($usernev,$jelszo)) {
            $_SESSION['usernev'] = $usernev;
            // Redirect to user dashboard page
            header("Location: dashboard.php");
        } else {
            echo "<div class='form'>
                  <h3>Incorrect Username/jelszo.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                  </div>";
        }
    } else {
?>
    <form class="form" method="post" name="login">
        <h1 class="login-title">Login</h1>
        <input type="text" class="login-input" name="usernev" placeholder="Felhasználó név" autofocus="true"/>
        <input type="password" class="login-input" name="jelszo" placeholder="Jelszó"/>
        <input type="submit" value="Bejelentkezés" name="submit" class="login-button"/>
        <p class="link"><a href="registration1.1.php">Új regisztráció</a></p>
  </form>
<?php
    }
?>
</body>
</html>