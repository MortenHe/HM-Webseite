<!DOCTYPE html>
<html>
    <head>

        <?php
        include ("kp_head.php");
        ?>

        <title>Kris Planet - Hörspiel</title>
    </head>

    <!-- Version 26.07.16 -->
    <body>

        <!-- Tooltip Effekt -->
        <script type="text/javascript" src="../js/kp_tooltip.js"></script>

        <!--  Gesamter Inhalt  -->
        <div id="all">
            <div class="center"><img src="../pics/hp/kp_logo-oben.png" width="582" height="132" alt="logo"></div>

            <!-- Link zum Portal -->
            <a href="portal_1portal.php"><div class="portal_back">Zurück zum Portal</div></a>

            <!--  Menü  -->
            <div id="menu">
                <a class="menu" href="kp_1start.php">Start</a>&nbsp;&nbsp;|&nbsp;
                <a style="text-decoration: underline; color:#B6AEC2;" class="menu" href="kp_2hoer.php">Hörspiel</a>&nbsp;&nbsp;|&nbsp;
                <a class="menu" href="kp_3material.php">Material</a>
            </div>

            <!-- Inhalt -->
            <div id="content_middle" class="m_b_25">

                <h1>Anhören und Runterladen</h1>
                <div class="down_box">
                    <audio src="../files/tracks/kp_full.mp3" controls></audio>
                    <a download class="down_a" href="../files/down/kp.zip">kostenloser Download</a>
                </div>

                <h1>Die Rollen und ihre Sprecher</h1>
                <table>
                    <tr><th>Rolle</th><th>Sprecher</th><th>Raumschiff-Bild</th></tr>
                    <tr><td onmouseover="Tip('<img src=../pics/ajax/role_ajax/planet.jpg>')">Kris Planet</td><td onmouseover="Tip('<img src=../pics/leute/daniels.jpg>')">Daniel Schäfer</td><td onmouseover="Tip('<img src=../pics/ajax/shuttle_ajax/daniels.jpg>')">Raumschiff</td></tr>
                    <tr><td onmouseover="Tip('<img src=../pics/ajax/role_ajax/shooter.jpg>')">Admiral Shooter</td><td onmouseover="Tip('<img src=../pics/leute/marcus.jpg>')">Marcus Helfer</td><td onmouseover="Tip('<img src=../pics/ajax/shuttle_ajax/marcus.jpg>')">Raumschiff</td></tr>
                    <tr><td onmouseover="Tip('<img src=../pics/ajax/role_ajax/nature.jpg>')">Dr. Nature</td><td onmouseover="Tip('<img src=../pics/leute/julia.jpg>')">Julia Horn</td><td onmouseover="Tip('<img src=../pics/ajax/shuttle_ajax/julia.jpg>')">Raumschiff</td></tr>
                    <tr><td onmouseover="Tip('<img src=../pics/ajax/role_ajax/jamila.jpg>')">Jamila</td><td onmouseover="Tip('<img src=../pics/leute/steffi.jpg>')">Steffi Hauer</td><td onmouseover="Tip('<img src=../pics/ajax/shuttle_ajax/steffi.jpg>')">Raumschiff</td></tr>
                    <tr><td onmouseover="Tip('<img src=../pics/ajax/role_ajax/blitzo.jpg>')">Blitzo</td><td onmouseover="Tip('<img src=../pics/leute/martin.jpg>')">Martin Helfer</td><td onmouseover="Tip('<img src=../pics/ajax/shuttle_ajax/martin.jpg>')">Raumschiff</td></tr>
                    <tr><td onmouseover="Tip('<img src=../pics/ajax/role_ajax/erzaehlerin.jpg>')">Erzählerin</td><td onmouseover="Tip('<img src=../pics/leute/anna.jpg>')">Anna Helfer</td><td onmouseover="Tip('<img src=../pics/ajax/shuttle_ajax/anna.jpg>')">Raumschiff</td></tr>
                    <tr><td onmouseover="Tip('<img src=../pics/ajax/role_ajax/purple.jpg>')">Commander Purple</td><td onmouseover="Tip('<img src=../pics/leute/phil.jpg>')">Philipp Le Provost</td><td onmouseover="Tip('<img src=../pics/ajax/shuttle_ajax/phil.jpg>')">Raumschiff</td></tr>
                    <tr><td onmouseover="Tip('<img src=../pics/ajax/role_ajax/segatti.jpg>')">Professor Segatti</td><td onmouseover="Tip('<img src=../pics/leute/paul.jpg>')">Paul Wolff</td><td onmouseover="Tip('<img src=../pics/ajax/shuttle_ajax/paul.jpg>')">Raumschiff</td></tr>
                    <tr><td onmouseover="Tip('<img src=../pics/ajax/role_ajax/zwilling1.jpg>')">Zwilling 1</td><td onmouseover="Tip('<img src=../pics/leute/leonie.jpg>')">Léonie Fournier</td><td onmouseover="Tip('<img src=../pics/ajax/shuttle_ajax/leonie.jpg>')">Raumschiff</td></tr>
                    <tr><td onmouseover="Tip('<img src=../pics/ajax/role_ajax/zwilling2.jpg>')">Zwilling 2</td><td onmouseover="Tip('<img src=../pics/leute/uli.jpg>')">Uli Hillenbrand</td><td onmouseover="Tip('<img src=../pics/ajax/shuttle_ajax/uli.jpg>')">Raumschiff</td></tr>
                    <tr><td onmouseover="Tip('<img src=../pics/ajax/role_ajax/buchgeist.jpg>')">Buchgeist</td><td onmouseover="Tip('<img src=../pics/leute/tim.jpg>')">Tim Krämer</td><td onmouseover="Tip('<img src=../pics/ajax/shuttle_ajax/tim.jpg>')">Raumschiff</td></tr>
                    <tr><td onmouseover="Tip('<img src=../pics/ajax/role_ajax/direktor.jpg>')">Direktor von Ocean World</td><td onmouseover="Tip('<img src=../pics/leute/tobias.jpg>')">Tobias Werner</td><td onmouseover="Tip('<img src=../pics/ajax/shuttle_ajax/tobias.jpg>')">Raumschiff</td></tr>
                    <tr><td onmouseover="Tip('<img src=../pics/ajax/role_ajax/sagacious.jpg>')">Mrs. Sagacious</td><td onmouseover="Tip('<img src=../pics/leute/nadine.jpg>')">Nadine Helfer</td><td onmouseover="Tip('<img src=../pics/ajax/shuttle_ajax/nadine.jpg>')">Raumschiff</td></tr>
                    <tr><td onmouseover="Tip('<img src=../pics/ajax/role_ajax/kampfroboter.jpg>')">Kampfroboter</td><td onmouseover="Tip('<img src=../pics/leute/sebastian.jpg>')">Sebastian Steuer</td><td onmouseover="Tip('<img src=../pics/ajax/shuttle_ajax/sebastian.jpg>')">Raumschiff</td></tr>
                    <tr><td onmouseover="Tip('<img src=../pics/ajax/role_ajax/wachmann1.jpg>')">Wachmann 1</td><td onmouseover="Tip('<img src=../pics/leute/thilo.jpg>')">Thilo Rommel</td><td onmouseover="Tip('<img src=../pics/ajax/shuttle_ajax/thilo.jpg>')">Raumschiff</td></tr>
                    <tr><td onmouseover="Tip('<img src=../pics/ajax/role_ajax/wachmann2.jpg>')">Wachmann 2</td><td onmouseover="Tip('<img src=../pics/leute/danielr.jpg>')">Daniel Ross</td><td onmouseover="Tip('<img src=../pics/ajax/shuttle_ajax/danielr.jpg>')">Raumschiff</td></tr>
                    <tr><td onmouseover="Tip('<img src=../pics/ajax/role_ajax/zivilistin.jpg>')">Zivilistin</td><td onmouseover="Tip('<img src=../pics/leute/yvonne.jpg>')">Yvonne Blum</td><td onmouseover="Tip('<img src=../pics/ajax/shuttle_ajax/yvonne.jpg>')">Raumschiff</td></tr>
                </table>

                <h1 class='m_b_10'>Das kreative Team</h1>
                <table class="m_b_10">
                    <tr><td>Text und Soundeffekte</td><td>Uli Hillenbrand</td></tr>
                    <tr><td>Schnitt und Musik</td><td>Martin Helfer</td></tr>
                    <tr><td>Cover</td><td>Barbara Helfer</td></tr>
                    <tr><td>Länge</td><td>ca. 70 Minuten</td></tr>
                    <tr><td>Produktion</td><td>Rundfunk Rheinau 2011</td></tr>
                </table>
            </div>
        </div>
    </body>
</html>