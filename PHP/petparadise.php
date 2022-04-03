<html>

<head lang="hu">
    <meta charset="utf8">
    <title>Petparadise</title>
    <link rel="stylesheet" href="css/sajatcss.css">
</head>

<body>

    <div class="menu">
        <?php include 'php/menu.php';?>
    </div>
  
    <div class="center">
        <h1>Új könyv felvitele a katalógusba.</h1>
        <form action="php/konyv_beszurasa.php" method="post">
           <table>
            <tr>
                <td><label form="isbn" sei>ISBN</label></td>
                <td><input class="form-control" name="isbn" type="text" id="isbn" placeholder="Kérem az ISBN számot..."></td>
            </tr>
             <tr>
                <td> <label form="szerzo">Szerző</label></td>
                <td><input class="form-control" name="szerzo" type="text" id="szerzo" placeholder="Kérem a szerző nevét..."></td>
            </tr>            
            <tr>
                <td> <label form="cim">Cím</label></td>
                <td> <input class="form-control" name="cim" type="text" id="cim" placeholder="Kérem a könyv címét..."></td>
            </tr>           
             <tr>
                <td> <label form="ar">Ár</label></td>
                <td><input class="form-control" name="ar" type="text" id="ar" placeholder="Kérem a fogyasztói árat..."></td>
            <tr>
            <td colspan="2"><input class="bt" type="submit" name="kuldes" value="Rögzítés"></td>
            </tr>
           </table>
        </form>
    </div>
</body>

</html>