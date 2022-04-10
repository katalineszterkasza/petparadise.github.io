<!DOCTYPE html>
<html lang="hu">
   <head>
      <title>Regisztráció és Bejelentkezés</title>
      <meta charset="UTF-8"/>
      <link rel="icon" href="images/heart.png">
      <style>
      
        input, select, textarea, fieldset { margin-bottom: 10px; }

        input[type="reset"], input[type="submit"] {
            background-color:navy;
            color:white;
            border: 3px;
            outline: none;
            font-size: 16px;
            width: 150px;
            height: 40px;
        }
        body{
        background-color:lightslategray
      }
        input:focus { background-color:navajowhite; }
      
      </style>
   </head>
   <body>
      <form action="feldolgoz.php" method="POST" enctype="multipart/form-data">
        <fieldset>
          <h1><legend>Regisztrációs adatok</legend></h1>
          <label>Teljes név: <input type="text" name="full-name" size="25"/></label> <br/>
          <label>Felhasználónév: <input type="text" name="username" required/></label> <br/>
          <label>Jelszó: <input type="password" name="passwd" required/></label> <br/>
          <label>Jelszó ismét: <input type="password" name="passwd-check" required/></label> <br/>
          <label>Születési dátum: <input type="date" name="date-of-birth" min="1920-01-01"/></label> <br/>
          <label>E-mail: <input type="email" name="email" required/></label> <br/>
          <label>Felhasználói azonosító: <input type="number" name="user-id" value="12345" disabled/></label> <br/>
        </fieldset>

        <input type="reset" name="reset-btn" value="Adatok törlése"/>
        <input type="submit" name="submit-btn" value="Adatok elküldése"/>
      </form>

      
    

 <h1>Bejelentkezés</h1>   
    <form method="POST">
        <fieldset>
            <h4><legend> Bejelentkezési adatok</legend></h4>
            <h5><label for="email">E-mail cím</label></h5>
            <input type="email" id="email" name="email"> <br>
            <h5><label for="password">Jelszó</label></h5>
            <input type="password" name="passwd" placeholder="Jelszó" required> <br><br>
            <input type="submit" value="Küldés">
    </form>
</fieldset>
</body>
</html>
   </body>
</html>