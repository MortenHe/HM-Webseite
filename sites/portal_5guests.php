<!DOCTYPE html>
<html>
    <head>

        <?php
include "portal_head.php";
?>

        <title>Die Hörspielmacher - Gästebuch</title>
    </head>

    <!-- Version 26.07.16 -->
    <body>

        <!--  Gesamter Inhalt  -->
        <div id="all">
            <div class="center"><img src="../pics/hp/portal_logo-oben.png" width="582" height="132" alt="Logo"></div>

            <!--  Menü  -->
            <div id="menu">
                <a class="menu" href="portal_1portal.php">Start</a>&nbsp;&nbsp;|&nbsp;
                <a class="menu" href="portal_2blog.php">Blog</a>&nbsp;&nbsp;|&nbsp;
                <a class="menu" href="portal_3aktionen.php">Aktionen</a>&nbsp;&nbsp;|&nbsp;
                <a class="menu" href="portal_4uns.php">Über uns</a>&nbsp;&nbsp;|&nbsp;
                <!-- <a style="text-decoration: underline; color:rgb(241, 181, 0);" class="menu" href="portal_5guests.php?page=1&amp;view=0">Gästebuch</a> -->
            </div>

            <!-- Inhalt -->
            <div id="messages" class="messages m_b_25">

                <?php
//DB-Verbindung herstellen, DB auswählen
$host = "localhost";
$user = "tim";

//user fuer lokal
//$user = "root";
$pw = "";

//PW fuer lokal
//$pw = "";
$db = "tim";

$link = mysql_connect($host, $user, $pw) or die("Keine Verbindung möglich");
mysql_select_db($db);
mysql_query("set names 'utf8'");

date_default_timezone_set('Europe/Berlin');

$timestamp = time();
$datum = date("d.m.Y", $timestamp);
$uhrzeit = date("H:i", $timestamp);

$name = $_POST["name"];
$comment = $_POST["comment"];
$mail = $_POST["mail"];

$view = $_GET["view"];
$spam = $_POST["spam"];

if ($view == 0) {
    ?>

                    <div class="message_input m_b_15 m_t_20">
                        <div class="m_0_a t_c"><img src="../pics/portal/feder.png" alt="feder"></div>

                        <h1 class="co_b">Eintrag erstellen</h1>
                        <form name="Eintrag" action="portal_5guests.php?page=1&amp;view=1" method="post">

                            <!-- 1. Zeile mit Name und Mail -->
                            <div class="display_flex">
                                <div class="flex_1">
                                    <label>Name:</label>
                                    <br>
                                    <input class="w_100 h_25" autofocus required name="name" type="text" size="15" maxlength="30">
                                </div>
                                <div class="flex_1 m_l_10">
                                    <label>E-Mail<small> (optional)</small>:</label>
                                    <br>
                                    <input class="w_100 h_25" name="mail" type="email" size="15" maxlength="50">
                                </div>
                            </div>
                            <div class="c_b">
                                <label>Kommentar:</label>
                                <br>
                                <textarea required class="w_100" name="comment" rows="6" cols="40"></textarea>
                            </div>
                            <div class="f_l">
                                <label>Spanschutz: </label>("Uhubande" ohne den ersten Buchstaben)
                                <br>
                                <input required class="h_25 short_input" name="spam"  maxlength="10" type="text" size="10"></div>
                            <input type ="submit" value="Absenden" class="Button">
                            <div class="c_b"></div>
                        </form>
                    </div>

                    <?php
} elseif ($name != '' and $comment != '' and $spam == 'hubande') {

    $eintrag = "Insert Into guests (date, time, name, mail, text, answer) VALUES ('$datum', '$uhrzeit', '$name', '$mail', '$comment', '')";

    if ($eintragen = mysql_query($eintrag)) {

        //Mail an mich
        $an = "martin-helfer@gmx.de";
        $subject = "Neuer Eintrag im Hörspielmacher Gästebuch";
        $message = $name . "\n" . $mail . "\n" . $comment;
        $from = "Hörspielmacher";

        @mail($an, $subject, $message, "From: $from");

        //später kein Eintragefeld mehr anzeigen
        $view = '1';
    }
} elseif ($spam != 'Uhuband') {
    echo "<div class='message_input'><h2 class=co_b>Spamschutz wurde falsch eingegeben!</h2>";
    echo "<div class='center'><a class=ho_co_b href='portal_5guests.php?page=1&amp;view=0'>Nochmal versuchen</a></div></div>";
}
//Einträge ausgeben
//pagenummer
$get_seiten = "SELECT count(*) from guests";
$get_ergebnis = mysql_query($get_seiten);
$anzahl = mysql_fetch_array($get_ergebnis);
$menge = ceil($anzahl[0] / 20);
$page = $_GET["page"];

// Injection Schutz
if ($page > $menge) {
    $page = 1;
}

echo "<div class=pages_header><h2 class='m_t_45 co_b fs_20'>Seite<br>" . $page . "</h2></div>";

$pagemul = ($page - 1) * 20;

//Ausgaben der bisherigen Einträge
$abfrage = "SELECT * FROM guests order by id desc limit $pagemul, 20 ";
$ergebnis = mysql_query($abfrage);

$j = $pagemul;

//Pinnwandanfang
echo "<div class=m_b_10>";

while ($zeile = mysql_fetch_row($ergebnis)) {
    $text = nl2br($zeile[3]);

    echo "<div class=message>";

    //Tintenklecks
    echo "<div class=klecks><div class='t_c w_20'>" . ($anzahl[0] - $j) . "</div></div>";

    //Ueberschrift
    echo "<div class=message_header>Eine Nachricht von<div class=big>" . $zeile[1] . "</div></div>";

    //Die Nachricht
    echo "<div class=message_text>" . $text . "</div>";

    //Zeit $zeile[4]
    //Kommentar der Hoerspielmacher
    if ($zeile[7] != '') {
        echo "<div class=message_comment><i>Antwort der Hörspielmacher:</i><br>" . $zeile[7] . "</div>";
    }
    $j = $j + 1;
    echo "<div class=c_b></div>";
    echo "</div>";
}

//Anzahl der seiten ausgeben
echo "<div class='center pages_footer m_t_20'>";
echo "Seite:";
echo "&nbsp;&nbsp;|&nbsp;&nbsp;";
for ($i = 1; $i <= $menge; $i++) {
    if ($i == $page) {
        echo "<a style='text-decoration:underline; color:#F1B500' href= 'portal_5guests.php?page=" . $i . "&amp;view=" . $view . "'>" . $i . "</a>";
        echo "&nbsp;&nbsp;|&nbsp;&nbsp;";
    } else {
        echo "<a href= './portal_5guests.php?page=" . $i . "&amp;view=" . $view . "'>" . $i . "</a>";
        echo "&nbsp;&nbsp;|&nbsp;&nbsp;";
    }
}
echo "</div>";

//Pinnwandende
echo "</div>";

mysql_close($link);
?>
            </div>
        </div>
         <!-- Datenschutz und Impressum -->
         <div class="ds">
            <a href="datenschutz.html">Datenschutz</a>
            |
            <a href="impressum.html">Impressum</a>
        </div>
    </body>
</html>