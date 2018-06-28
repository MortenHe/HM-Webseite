<!DOCTYPE html>
<html>
    <head>

        <?php
        include ("kp_head.php");
        ?>

        <link rel="stylesheet" type="text/css" href="../css/anythingzoomer.css">
        <script type="text/javascript" src="../js/jquery.min.js"></script>
        <script type="text/javascript" src="../js/jquery.anythingzoomer.js"></script>
        <script type="text/javascript" src="../js/zoom.js"></script>

        <title>Kris Planet - Material</title>
    </head>

    <!-- Version 26.07.16 -->
    <body>

        <!--  Gesamter Inhalt  -->
        <div id="all">
            <div class="center"><img src="../pics/hp/kp_logo-oben.png" width="582" height="132" alt="logo"></div>

            <!-- Link zum Portal -->
            <a href="portal_1portal.php"><div class="portal_back">Zurück zum Portal</div></a>

            <!--  Menue  -->
            <div id="menu">
                <a class="menu" href="kp_1start.php">Start</a>&nbsp;&nbsp;|&nbsp;
                <a class="menu" href="kp_2hoer.php">Hörspiel</a>&nbsp;&nbsp;|&nbsp;
                <a style="text-decoration: underline; color:#B6AEC2" class="menu" href="kp_3material.php">Material</a>
            </div>

            <!-- Inhalt -->
            <div id="content_short" class="m_b_25">

                <!-- Outtakes -->
                <div class='text_short'>
                    <h1 class="c_b">Outtakes</h1>
                    <p>Heißt er nun "General Shooter" oder "Admiral Shooter"? Wir waren uns bei den Aufnahmen selbst nicht immer ganz sicher. Und so sind einige lustige Outtakes entstanden, die ihr euch hier anhören könnt.</p>
                    <div class="center_object">
                        <audio src="../files/tracks/kp_outtakes.mp3" controls></audio>
                    </div>
                </div>

                <!-- Suchbild -->
                <div class='text'>
                    <h1 class="c_b">Kris-Planet-Suchbild</h1>
                    <p>Auch im Zeitalter von Kris Planet treten noch Fehler bei Datenübertragung auf. Und genau das ist auch bei dem rechten Bild passiert. Findest du alle 4 Fehler? Kleiner Tipp: Wenn du mit der Maus über das Bild fährst, erscheint eine Lupe, damit du besser suchen kannst.</p>

                    <!-- Zoombild -->
                    <div id="zoom">
                        <div class="small">
                            <img src="../pics/hp/kp_suchbild1.jpg" alt="suche">
                        </div>
                        <div class="large">
                            <img src="../pics/hp/kp_suchbild2.jpg" alt="suche">
                        </div>
                    </div>
                </div>

                <!-- Quiz -->
                <div class='text m_b_10'>
                    <h1 class="c_b">Kris-Planet-Quiz</h1>
                    <p>Du weißt, wer die Androiden sind, welches Urzeitgeschöpf in Atlantic City wütet und mit welchem Raumschiff Kris Planet unterwegs ist? Dann sollte das Kris-Planet-Quiz kein Problem für dich sein. Und wenn doch, kannst du immer noch in der Lösung nachschauen.</p>
                    <a download class="down_a" href="../files/down/kp_quiz.zip">Quiz Download</a>
                </div>

                <!-- Skizze zum Cover -->
                <div class='text m_b_10'>
                    <h1 class="c_b">Von der Skizze zum Cover</h1>
                    <img class="m_b_10" src="../pics/hp/kp_cover_entstehung.png" alt="cover" />
                </div>
            </div>
        </div>
    </body>
</html>