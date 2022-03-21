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
        echo("Successful connection");
    }
	// a karakterek helyes megjelenítése miatt be kell állítani a karakterkódolást!
	//mysqli_query($conn, 'SET NAMES UTF-8');
	//mysqli_query($conn, 'SET character_set_results=utf8');
	mysqli_set_charset($conn, "utf8");

    return $conn;
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
    if (mysqli_num_rows($result) > 0) {
        while($sor=mysqli_fetch_assoc($result)){ 
            echo "<br>". "Chipszam: " . $sor["Chipszam"] . " - Nev: " . $sor["Nev"];
        }
    }
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
    if (mysqli_num_rows($result) > 0) {
        while($sor=mysqli_fetch_assoc($result)){ 
           echo "<div class="u-repeater"><div class="u-align-left u-border-2 u-border-grey-75 u-container-style u-custom-item u-list-item u-repeater-item"><div class="u-container-layout u-similar-container u-valign-bottom u-container-layout-1">" . 
                "<img src=data:image/jpg;charset=utf8;base64," . base64_encode($sor["Kep"]); . "/>" .
                "<p class="u-text u-text-default u-text-2">" . $sor["Nev"] . "</p>" .
                "<p class="u-text u-text-default u-text-2">" . $sor["Szuletesidatum"] . "</p>" .
              "</div>".
           "</div>".
          "</div>"
            //echo "<br>". "Chipszam: " . $sor["Chipszam"] . " - Nev: " . $sor["Nev"];
        }
    }
    close_connection($conn);
 }

 //lista_kutyak();

?>