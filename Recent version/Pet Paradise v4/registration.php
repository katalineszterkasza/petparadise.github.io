<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Registration</title>
    <link rel="stylesheet" href="style_reg.css"/>
</head>
<body>
<?php
    require('php/database.php');
    
    if (isset($_REQUEST['usernev'])) {
        
        $usernev = stripslashes($_REQUEST['usernev']); 
        $email    = stripslashes($_REQUEST['email']);
        $jelszo = stripslashes($_REQUEST['jelszo']);
        $teljesnev = stripslashes($_REQUEST['teljesnev']);
        $dolgozoiazonosito = stripslashes($_REQUEST['dolgozoiazonosito']);
        $iranyitoszam = stripslashes($_REQUEST['iranyitoszam']);
        $varos = stripslashes($_REQUEST['varos']);
        $cim = stripslashes($_REQUEST['cim']);
        $telefon = stripslashes($_REQUEST['telefon']);
       
        if (insertuser($usernev,$email,$jelszo,$teljesnev,$dolgozoiazonosito,$iranyitoszam,$varos,$cim,$telefon)) {
            echo "<div class='form'>
                  <h3>Sikeres regisztáció.</h3><br/>
                  <p class='link'>Bejelentkezéshez <a href='login.php'>kattints ide</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Kötelező mezők kitöltése hiányos.</h3><br/>
                  <p class='link'>Űrlap újbóli kitöltéséhez <a href='registration.php'>kattints ide</a></p>
                  </div>";
        }
    } else {
?>
    <form class="form" action="" method="post">
        <h1 class="login-title">Regisztráció</h1>
        <input type="text" class="login-input" name="usernev" placeholder="Felhasználó név" required />
        <input type="email" class="login-input" name="email" placeholder="Email cím" required />
        <input type="password" class="login-input" name="jelszo" placeholder="Jelszó" required />
        <input type="text" class="login-input" name="teljesnev" placeholder="Teljes név" required/>
        <input type="number" class="login-input" name="iranyitoszam" placeholder="Irányítószám" required/>
        <input type="text" class="login-input" name="varos" placeholder="Város" required/>
        <input type="text" class="login-input" name="cim" placeholder="Lakcím" required/>
        <input type="tel" class="login-input" name="telefon" placeholder="Telefonszám" required/>
        <label for="dolgozoe" >Dolgozó vagyok</label>
        <input type="checkbox"  name="dolgozoe" id="dolgozoe" onclick="dolgozoiazonmutatas(this);"/>

        <input type="text" class="login-input" id="dolgozoiazonosito" name="dolgozoiazonosito" placeholder="Dolgozoi azonosító" hidden/>
        <input type="submit" name="submit" value="Regisztráció" class="login-button"/>
        <p class="link"><a href="login.php">Kattints ide a bejelentkezéshez.</a></p>
    </form>
<?php
    }
?>

<script>
    function dolgozoiazonmutatas(checkBox) {
        if (checkBox.checked== true){
            document.getElementById("dolgozoiazonosito").removeAttribute("hidden");
        } else{
            document.getElementById("dolgozoiazonosito").setAttribute("hidden", true);
        }
    }
</script>
<button onclick="history.back()">Go Back</button>
</body>
</html>