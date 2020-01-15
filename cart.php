<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Bit Academy</title>
    </head>

    <body>
        <h1>Football <small>(#1)</small></h1>
        <h1>Basketball <small>(#2)</small></h1>
        <h1>Honkbal <small>(#3)</small></h1>

        <h3>Kies een Nummer van 1 t/m 3 die je wilt kopen!</h3>
        <form method="POST">
            <input type="number" id="number" name="sessie" required>
            <input type="submit" value="Submit" size="5">
        </form>
        <?php
        session_start ();
        if (isset($_POST["sessie"])){
            $_SESSION["sessie"] = $_POST["sessie"];
        }
        if (isset($_SESSION["sessie"])){
            echo "Je Hebt gekozen voor item " . ($_SESSION["sessie"]);
        }
        ?>
    </body>
</html>