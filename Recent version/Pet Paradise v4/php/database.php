<?php
//header("Content-type: text/html;charset=utf8");
function open_connection() {
    $servername = "localhost";
    $username = "petparadise";
    $password = "petparadise";
    $dbname = "y2022";
   
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) { 
        die("Connecting failed: " . mysqli_connect_error());
    }
    else{
        //echo("Successful connection");
    }
	// a karakterek helyes megjelenítése miatt be kell állítani a karakterkódolást!
	//mysqli_query($conn, 'SET NAMES UTF-8');
	//mysqli_query($conn, 'SET character_set_results=utf8');
	mysqli_set_charset($conn, "utf8");

    return $conn;
}

function checkuser($username,$password) {
    $conn= open_connection();
    if ( !$conn ) { // ha nem sikerult csatlakozni, akkor kilepunk
        echo "nincs connection";
		return false;
	}
    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);
    // Check user is exist in the database
    $query    = "SELECT * FROM `felhasznalok` WHERE usernev='$username'
    AND jelszo='" . md5($password) . "'";
    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
    $rows = mysqli_num_rows($result);
    return $rows == 1;
}

function insertuser($usernev,$email,$jelszo,$teljesnev,$dolgozoiazonosito,$iranyitoszam,$varos,$cim,$telefon) {
    $conn= open_connection();
    if ( !$conn ) { // ha nem sikerult csatlakozni, akkor kilepunk
        echo "nincs connection";
		return false;
	}
    $usernev = mysqli_real_escape_string($conn, $usernev);
    $email    = mysqli_real_escape_string($conn, $email);
    $jelszo = mysqli_real_escape_string($conn, $jelszo);
    $teljesnev = mysqli_real_escape_string($conn, $jelszo);
    $dolgozoiazonosito = mysqli_real_escape_string($conn, $jelszo);
    $iranyitoszam = mysqli_real_escape_string($conn, $jelszo);
    $varos = mysqli_real_escape_string($conn, $jelszo);
    $cim = mysqli_real_escape_string($conn, $jelszo);
    $telefon = mysqli_real_escape_string($conn, $jelszo);
    $query    = "INSERT into `felhasznalok` (usernev, email, jelszo, teljesnev, dolgozoiazonosito, iranyitoszam, varos, cim, telefon)
                 VALUES ('$usernev', '$email', '" . md5($jelszo) . "', '$teljesnev', '$dolgozoiazonosito', '$iranyitoszam', '$varos', '$cim', '$telefon')";
    $result   = mysqli_query($conn, $query);
    return $result;
}

function close_connection($conn){
    mysqli_close($conn);
 }


 function lista_macskak(){

    $conn= open_connection();
    if ( !$conn ) { // ha nem sikerult csatlakozni, akkor kilepunk
        echo "nincs connection";
		return false;
	}

    $sql="SELECT Chipszam,Nev,Tipus,Nem,Meret,Fajta,Kep,Szuletesidatum,Szin,Bekerulesidatum FROM allatok WHERE Tipus=0";
    $result=mysqli_query($conn, $sql);
    echo '<div class="u-repeater">';
    if (mysqli_num_rows($result) > 0) {
        while($sor=mysqli_fetch_assoc($result)){ 
           echo '<div class="u-align-left u-border-2 u-border-grey-75 u-container-style u-custom-item u-list-item u-repeater-item"><div class="u-container-layout u-similar-container u-valign-bottom u-container-layout-1">' . 
           '<a href="/adatlap.php?chipszam=' . $sor["Chipszam"] . '"><img src="data:image/jpg;charset=utf8;base64,' . base64_encode($sor["Kep"]) . '"/></a>' .
                '<p class="u-text u-text-body-alt-color u-text-2">Név: ' . $sor["Nev"] . '</p>' .
                '<p class="u-text u-text-body-alt-color u-text-2">Születési dátum: ' . $sor["Szuletesidatum"] . '</p>' .
              '</div>'.
           '</div>';
            //echo "<br>". "Chipszam: " . $sor["Chipszam"] . " - Nev: " . $sor["Nev"];
        }
    }
    echo '</div>';
    close_connection($conn);
 }

 

 function lista_kutyak(){

    $conn= open_connection();
    if ( !$conn ) { // ha nem sikerult csatlakozni, akkor kilepunk
        echo "nincs connection";
		return false;
	}

    $sql="SELECT Chipszam,Nev,Kep,Szuletesidatum FROM allatok WHERE Tipus=1";
    $result=mysqli_query($conn, $sql);
    echo '<div class="u-repeater">';
    if (mysqli_num_rows($result) > 0) {
        while($sor=mysqli_fetch_assoc($result)){ 
           echo '<div class="u-align-left u-border-2 u-border-grey-75 u-container-style u-custom-item u-list-item u-repeater-item"><div class="u-container-layout u-similar-container u-valign-bottom u-container-layout-1">' . 
           '<a href="/adatlap.php?chipszam=' . $sor["Chipszam"] . '"><img src="data:image/jpg;charset=utf8;base64,' . base64_encode($sor["Kep"]) . '"/></a>' .
           '<p class="u-text u-text-body-alt-color u-text-2">Név: ' . $sor["Nev"] . '</p>' .
                '<p class="u-text u-text-body-alt-color u-text-2">Születési dátum: ' . $sor["Szuletesidatum"] . '</p>' .
              '</div>'.
           '</div>';
            //echo "<br>". "Chipszam: " . $sor["Chipszam"] . " - Nev: " . $sor["Nev"];
        }
    }
    echo '</div>';
    close_connection($conn);
 }

 function adatlap($chipszam){

    $conn= open_connection();
    if ( !$conn ) { // ha nem sikerult csatlakozni, akkor kilepunk
        echo "nincs connection";
		return false;
	}

    $sql="SELECT * FROM allatok WHERE Chipszam=$chipszam";
    $result=mysqli_query($conn, $sql);
    echo '<div class="u-repeater">';
    if (mysqli_num_rows($result) > 0) {
        while($sor=mysqli_fetch_assoc($result)){ 
           echo '<div class="u-align-left u-border-2 u-border-grey-75 u-container-style u-custom-item u-list-item u-repeater-item"><div class="u-container-layout u-similar-container u-valign-bottom u-container-layout-1">' . 
                '<img src="data:image/jpg;charset=utf8;base64,' . base64_encode($sor["Kep"]) . '"/>' .
                '<p class="u-text u-text-body-alt-color u-text-2">Név: ' . $sor["Nev"] . '</p>' .
                '<p class="u-text u-text-body-alt-color u-text-2">Születési dátum: ' . $sor["Szuletesidatum"] . '</p>' .
                '<p class="u-text u-text-body-alt-color u-text-2">Típus: ' .  (($sor["Tipus"]=='1') ? 'kutya':'cica')  . '</p>' .
                '<p class="u-text u-text-body-alt-color u-text-2">Fajta: ' . $sor["Fajta"] . '</p>' .
                '<p class="u-text u-text-body-alt-color u-text-2">Méret: ' . $sor["Meret"] . '</p>' .
                '<p class="u-text u-text-body-alt-color u-text-2">Szín: ' . $sor["Szin"] . '</p>' .
                '<p class="u-text u-text-body-alt-color u-text-2">Menhelyre kerülés időpontja: ' . $sor["Bekerulesidatum"] . '</p>' .
                '<p class="u-text u-text-body-alt-color u-text-2">Chip száma: ' . $sor["Chipszam"] . '</p>' .

              '</div>'.
           '</div>';
            //echo "<br>". "Chipszam: " . $sor["Chipszam"] . " - Nev: " . $sor["Nev"];
        }
    }
    echo '</div>';
    close_connection($conn);
 }

 //lista_kutyak();

?>