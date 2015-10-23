<!DOCTYPE html>
<html lang="sv">
    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" href="">
        <script src=""></script>
    </head>
    <body>
        <?php
        /*Aritmeriska operatorer*/
        $tal1 = 30;
        $tal2 = 13;

        $summa = $tal1 + $tal2;
        $produkt = $tal1 * $tal2;
        $sub = $tal1 - $tal2;
        $kvot = $tal1 / $tal2;
        /* Modulus*/
        $modulus = $tal1 % $tal2; // 30 = 2 * 13 +4
        echo "<p>$modulus</p>";

            /*Logiska operatorer*/

            $harFemHuvuden = true;
        $harNioFingrar = false;
        $sats = $harFemHuvuden and $harNioFingrar;
        echo "<p>$sats är sats</p>";

        $losenord = "test123";
        if ($losenord == "test123") {

            echo "<p>Du är inloggad</p>";
        }

        if ($losenord == "test123") {

            echo "<p>Du är inloggad</p>";
        }

        else {

            echo "<p>Fel lösenord</p>";
        }
         if ($losenord == "test123") {

            echo "<p>Du är inloggad</p>";
        }
        elseif($losenord == "test124"){
              echo "<p>Fel lösenord</p>";
        }
        else {

            echo "<p>Fel lösenord</p>";
        }


         if ($tal1 != 0) {

            echo "<p>talet är inte noll</p>";
        }
        elseif($tal1 < 0){
             echo "<p>talet är mindre noll</p>";
        }
        elseif($tal1 > 0){
             echo "<p>talet är större noll</p>";
        }

        if ($tal1 > 20 && $tal1 <50) {

            echo "<p>talet är mellan 20 och 50</p>";
        }
        if($harFemHuvuden && $harNioFingrar){
             echo "<p>Perfekt sant</p>";
        }
        else {
             echo "<p>Perfekt falskt</p>";
        }
        /*loopar*/
        for ($i = 1;$i <= 10; $i++) {
            echo "<p>Detta $i</p>";
        }

       $i = 1;
        while ($i <= 10) {
            echo "<p>Detta $i </p>";
            $i++;
        }

        ?>
    </body>
</html>
