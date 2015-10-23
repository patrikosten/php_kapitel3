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
    if(!empty($_REQUEST['a']) && !empty($_REQUEST['p'])) {
        $a =$_REQUEST['a'];
        $p =$_REQUEST['p'];
        if($a != "hej" && $p != "123"){

        ?>
        <form action="ovning32.php" method="post">
            <fieldset>
                <legend>Inloggning</legend>
                <label>användarnamn</label>
                <input type="text" name="a"><br>
                <label>lösenord</label>
                <input type="password" name="p"><br>

                <input type="submit" value="Login">

            </fieldset>

        </form>
        <?php
        } else {
        ?>
            <h2>Du är inloggad</h2>
            <?php
        }
    }
        ?>
         <form action="ovning32.php" method="post">
            <fieldset>
                <legend>Inloggning</legend>
                <label>användarnamn</label>
                <input type="text" name="a"><br>
                <label>lösenord</label>
                <input type="password" name="p"><br>

                <input type="submit" value="Login">

            </fieldset>

        </form>

</body>

</html>
