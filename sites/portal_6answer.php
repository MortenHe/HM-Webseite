<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
    "http://www.w3.org/TR/html4/loose.dtd">

<html>
    <head>

        <?php
include "portal_head.php";
?>

        <title>Die Hörspielmacher - Kommentare</title>
    </head>
    <body>

        <!--  Gesamter Inhalt  -->
        <div id="all">
            <div class="center"><img src="../pics/hp/portal_logo-oben.png" width="582" height="132" alt="Logo"></div>

            <!--  Menü  -->
            <div id="menu">
                <a class="menu" href="portal_1portal.php">Start</a>&nbsp;&nbsp;|&nbsp;&nbsp;
                <a class="menu" href="portal_5guests.php?page=1&amp;view=0">Gästebuch</a>
            </div>

            <!-- Inhalt -->
            <div id="content">

                <?php
//DB-Verbindung herstellen, DB auswählen
$host = "localhost";
$user = "tim";
$pw = "";
$db = "tim";

$link = mysql_connect($host, $user, $pw) or die("Keine Verbindung möglich");
mysql_select_db($db);

date_default_timezone_set('Europe/Berlin');

$member = $_POST["member"];
$answer = $_POST["answer"];
$id = $_POST["ID"];
$change = $_GET["change"];
$password = $_POST["password"];

//Änderungen eintragen
if ($change == 1 and $password == 'martin') {
    $eintrag = "Update guests set answer='$answer' where ID='$id'";

    if ($eintragen = mysql_query($eintrag)) {

        echo "<h1>Änderungen wurden gespeichert</h1>";

        //Mail an mich
        $an = "martin-helfer@gmx.de";
        $subject = "Neuer Kommentar im Hörspielmacher Gästebuch";
        $message = $member . "\n" . $answer;
        $from = "Hörspielmacher";

        mail($an, $subject, $message, "From: $from");
    }
}

//Einträge ausgeben
//Ausgaben der bisherigen Einträge
$abfrage = "SELECT * FROM guests order by id desc";
$ergebnis = mysql_query($abfrage);

while ($zeile = mysql_fetch_row($ergebnis)) {
    echo "<form name='Antwort' action='portal_6answer.php?change=1' method='post'>";
    echo "<table border='1'>";
    echo "<tr><th><input class='black' type='text' name='ID' value='" . $zeile[0] . "' readonly='readonly'></th><th>" . $zeile[1] . "</th><th>" . $zeile[4] . "</th></tr>";
    echo "<tr><td colspan='3'>" . $zeile[3] . "</td></tr>";

    //Kommentarfelder leer oder Text aus DB
    //answer
    echo "<tr><td colspan='3'>Antwort:<br><textarea class='black' cols='30' rows='10' name='answer'>" . $zeile[7] . "</textarea></td></tr>";

    //password
    echo "<tr><td colspan='3'>Passwort:<br><input class='black' type='password' name='password' value=''></td></tr>";

    echo "<tr><td colspan='3'><input type ='submit' value='Eintragen' class='Button'></td></tr>";
    echo "</table>";
    echo "<br>";
    echo "</form>";

    $j = $j + 1;
}

mysql_close($link);
?>

            </div>
            <br>
        </div>
         <!-- Datenschutz und Impressum -->
         <div class="ds">
            <a href="datenschutz.html">Datenschutz</a>
            |
            <a href="impressum.html">Impressum</a>
        </div>
    </body>
</html>