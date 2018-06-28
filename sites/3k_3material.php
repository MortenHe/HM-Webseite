<!DOCTYPE html>
<html>
    <head>

        <?php
        include ("3k_head.php");
        ?>

        <link rel="stylesheet" type="text/css" href="../css/anythingzoomer.css">
        <script src="../js/jquery.min.js"></script>
        <script src="../js/jquery.anythingzoomer.js"></script>
        <script type="text/javascript" language="JavaScript" src="../js/zoom.js"></script>

        <title>Reiterhof Dreikronen - Material</title>
    </head>

    <!-- Version 26.07.16 -->
    <body>

        <!--  Gesamter Inhalt  -->
        <div id="all">
            <div class="center"><img src="../pics/hp/3k_logo-oben.png" width="582" height="132" alt="logo"></div>

            <!-- Link zum Portal -->
            <a href="portal_1portal.php"><div class="portal_back">Zurück zum Portal</div></a>

            <!--  Menü  -->
            <div id="menu">
                <a class="menu" href="3k_1start.php">Start</a>&nbsp;&nbsp;|&nbsp;
                <a class="menu" href="3k_2hoer.php">Hörspiel</a>&nbsp;&nbsp;|&nbsp;
                <a style="text-decoration: underline; color:#492b08;" class="menu" href="3k_3material.php">Material</a>
            </div>

            <!-- Inhalt -->
            <div id="content_short" class="m_b_25">

                <div class='text_short'>
                    <h1>Outtakes</h1>
                    <p>Auweia! Selbst geübte Hörspielsprecher schaffen es häufig nicht den Text auf Anhieb richtig einzusprechen. Daraus ergeben sich immer lustige Situationen. Überzeugt euch selbst davon.</p>
                    <div class="center_object">
                        <audio src="../files/tracks/3k_outtakes.mp3" controls></audio>
                    </div>
                </div>

                <div class='text'>
                    <h1>Reiterhof-Suchbild</h1>
                    <p>Insgesamt 5 Fehler haben wir im rechten Bild versteckt. Findest du alle? Kleiner Tipp: Manchmal ist nur die Farbe anders, manchmal fehlt sogar etwas!</p>

                    <!-- Zoombild -->
                    <div id="zoom">
                        <div class="small">
                            <img src="../pics/hp/3k_suchbild1.jpg" alt="Suchbild"/>
                        </div>
                        <div class="large">
                            <img src="../pics/hp/3k_suchbild2.jpg" alt="Suchbild"/>
                        </div>
                    </div>
                </div>

                <div class='text'>
                    <h1>Reiterhof-Brettspiel</h1>
                    <p>Hol dir das Reiterhof-Brettspiel und versuche als Erster ins Ziel zu kommen. Schaffst du es alle Brücken zu überqueren und findest du die Abkürzung? Aber vergiss nicht deinen Reithelm aufzuziehen, sonst musst du wieder zum Start zurück!</p>
                    <a download class="down_a" href="../files/down/3k_brettspiel.zip">Brettspiel Download</a>
                </div>

                <div class="text">
                    <h1>Reiterhof-Malbilder</h1>
                    <p>Malst du gerne? Dann haben wir was für dich. Lade dir die Malbilder herunter, drucke sie aus und male sie mit deinen Lieblingsfarben aus.</p>
                    <a download class="down_a" href="../files/down/3k_malbilder.zip">Malbilder Download</a>
                </div>

                <div class='text'>
                    <h1>Reiterhof-Quiz</h1>
                    <p>Beim Reiterhof-Quiz kannst du unter Beweis stellen, dass du beim Hörspiel gut aufgepasst hast. Kannst du jede Frage beantworten oder musst du in der Lösung nachschauen?</p>
                    <a download class="down_a" href="../files/down/3k_quiz.zip">Quiz Download</a>
                </div>

                <div class='text m_b_10'>
                    <h1>Von der Skizze zum Cover</h1>
                    <img src="../pics/hp/3k_cover_entstehung.png" alt="Entstehung"/>
                </div>
            </div>
        </div>
    </body>
</html>