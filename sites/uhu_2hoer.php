<!DOCTYPE html>
<html>
    <head>

        <?php
        include ("uhu_head.php");
        ?>

        <script type="text/javascript" src="../js/uhu.js"></script>

        <title>Die Uhubande - Hörspiel</title>
    </head>

    <!-- Version 26.07.16 -->
    <body>
        <script type="text/javascript" src="../js/uhu_tooltip.js"></script>

        <!--  Gesamter Inhalt  -->
        <div id="all">
            <div class="center"><img src="../pics/hp/uhu_logo-oben.gif" width="582" height="132" alt="logo"></div>

            <!-- Link zum Portal -->
            <a href="portal_1portal.php"><div class="portal_back">Zurück zum Portal</div></a>

            <!--  Menü  -->
            <div id="menu">
                <a class="menu" href="uhu_1start.php">Start</a>&nbsp;&nbsp;|&nbsp;
                <a style="text-decoration:underline; color:#f1b500;" class="menu" href="uhu_2hoer.php">Hörspiel</a>&nbsp;&nbsp;|&nbsp;
                <a class="menu" href="uhu_3material.php">Material</a>&nbsp;&nbsp;|&nbsp;
                <a class="menu" href="uhu_4entstehung.php">Entstehung</a>
            </div>

            <!-- Inhalt -->
            <div id="content_middle" class="m_b_25">
                <h1>Anhören und Runterladen</h1>
                <div class="down_box">
                    <audio src="../files/tracks/uhu_full.mp3" controls></audio>
                    <a download class="down_a" href="../files/down/uhu.zip">kostenloser Download</a>
                </div>

                <h1>Die Rollen und ihre Sprecher</h1>
                <table>
                    <tr><th>Rolle</th><th>Sprecher</th><th>Uhu-Bild</th></tr>
                    <tr><td onmouseover="Tip(steven)">Steven</td><td onmouseover="Tip('<img src=&quot;../pics/leute/martin.jpg&quot; width=&quot;250&quot; height=&quot;160&quot;>')">Martin Helfer</td><td onmouseover="Tip('<img src=&quot;../pics/ajax/uhus_ajax/0.jpg&quot; width=&quot;250&quot; height=&quot;344&quot;>')">Uhu</td></tr>
                    <tr><td onmouseover="Tip(rob)">Rob</td><td onmouseover="Tip('<img src=&quot;../pics/leute/roli.jpg&quot; width=&quot;250&quot; height=&quot;160&quot;>')">Roland Klug</td><td onmouseover="Tip('<img src=&quot;../pics/ajax/uhus_ajax/1.jpg&quot; width=&quot;250&quot; height=&quot;344&quot;>')">Uhu</td></tr>
                    <tr><td onmouseover="Tip(katie)">Katie</td><td onmouseover="Tip('<img src=&quot;../pics/leute/anna.jpg&quot; width=&quot;250&quot; height=&quot;160&quot;>')">Anna Helfer</td><td onmouseover="Tip('<img src=&quot;../pics/ajax/uhus_ajax/2.jpg&quot; width=&quot;250&quot; height=&quot;344&quot;>')">Uhu</td></tr>
                    <tr><td onmouseover="Tip(simon)">Simon</td><td onmouseover="Tip('<img src=&quot;../pics/leute/uli.jpg&quot; width=&quot;250&quot; height=&quot;160&quot;>')">Uli Hillenbrand</td><td onmouseover="Tip('<img src=&quot;../pics/ajax/uhus_ajax/3.jpg&quot; width=&quot;250&quot; height=&quot;344&quot;>')">Uhu</td></tr>
                    <tr><td onmouseover="Tip(emmy)">Tante Emmy</td><td onmouseover="Tip('<img src=&quot;../pics/leute/steffi.jpg&quot; width=&quot;250&quot; height=&quot;160&quot;>')">Steffi Hauer</td><td onmouseover="Tip('<img src=&quot;../pics/ajax/uhus_ajax/4.jpg&quot; width=&quot;250&quot; height=&quot;344&quot;>')">Uhu</td></tr>
                    <tr><td onmouseover="Tip(gilbert)">Onkel Gilbert</td><td onmouseover="Tip('<img src=&quot;../pics/leute/marcus.jpg&quot; width=&quot;250&quot; height=&quot;160&quot;>')">Marcus Helfer</td><td onmouseover="Tip('<img src=&quot;../pics/ajax/uhus_ajax/5.jpg&quot; width=&quot;250&quot; height=&quot;344&quot;>')">Uhu</td></tr>
                    <tr><td onmouseover="Tip(tricker)">Mr. Tricker</td><td onmouseover="Tip('<img src=&quot;../pics/leute/tim.jpg&quot; width=&quot;250&quot; height=&quot;160&quot;>')">Tim Krämer</td><td onmouseover="Tip('<img src=&quot;../pics/ajax/uhus_ajax/6.jpg&quot; width=&quot;250&quot; height=&quot;344&quot;>')">Uhu</td></tr>
                    <tr><td onmouseover="Tip(leroy)">Leroy</td><td onmouseover="Tip('<img src=&quot;../pics/leute/michael.jpg&quot; width=&quot;250&quot; height=&quot;160&quot;>')">Michael Eckerle</td><td onmouseover="Tip('<img src=&quot;../pics/ajax/uhus_ajax/7.jpg&quot; width=&quot;250&quot; height=&quot;344&quot;>')">Uhu</td></tr>
                    <tr><td onmouseover="Tip(oliver)">Mr. Oliver</td><td onmouseover="Tip('<img src=&quot;../pics/leute/sebastian.jpg&quot; width=&quot;250&quot; height=&quot;160&quot;>')">Sebastian Steuer</td><td onmouseover="Tip('<img src=&quot;../pics/ajax/uhus_ajax/8.jpg&quot; width=&quot;250&quot; height=&quot;344&quot;>')">Uhu</td></tr>
                    <tr><td onmouseover="Tip(andy)">Andy</td><td onmouseover="Tip('<img src=&quot;../pics/leute/oscar.jpg&quot; width=&quot;250&quot; height=&quot;160&quot;>')">Oscar Fournier</td><td onmouseover="Tip('<img src=&quot;../pics/ajax/uhus_ajax/9.jpg&quot; width=&quot;250&quot; height=&quot;344&quot;>')">Uhu</td></tr>
                    <tr><td onmouseover="Tip(mark)">Mark</td><td onmouseover="Tip('<img src=&quot;../pics/leute/sandro.jpg&quot; width=&quot;250&quot; height=&quot;160&quot;>')">Alessandro Purrino</td><td onmouseover="Tip('<img src=&quot;../pics/ajax/uhus_ajax/10.jpg&quot; width=&quot;250&quot; height=&quot;344&quot;>')">Uhu</td></tr>
                    <tr><td onmouseover="Tip(kelly)">Kelly</td><td onmouseover="Tip('<img src=&quot;../pics/leute/leonie.jpg&quot; width=&quot;250&quot; height=&quot;160&quot;>')">Léonie Fournier</td><td onmouseover="Tip('<img src=&quot;../pics/ajax/uhus_ajax/11.jpg&quot; width=&quot;250&quot; height=&quot;344&quot;>')">Uhu</td></tr>
                    <tr><td onmouseover="Tip(erzaehler)">Erzähler</td><td onmouseover="Tip('<img src=&quot;../pics/leute/joerg.jpg&quot; width=&quot;250&quot; height=&quot;160&quot;>')">Jörg Anthonj</td><td onmouseover="Tip('<img src=&quot;../pics/ajax/uhus_ajax/12.jpg&quot; width=&quot;250&quot; height=&quot;344&quot;>')">Uhu</td></tr>
                    <tr><td onmouseover="Tip(wirt)">Wirt</td><td onmouseover="Tip('<img src=&quot;../pics/leute/tobias.jpg&quot; width=&quot;250&quot; height=&quot;160&quot;>')">Tobias Werner</td><td onmouseover="Tip('<img src=&quot;../pics/ajax/uhus_ajax/13.jpg&quot; width=&quot;250&quot; height=&quot;344&quot;>')">Uhu</td></tr>
                    <tr><td onmouseover="Tip(finn)">Inspektor Finn</td><td onmouseover="Tip('<img src=&quot;../pics/leute/toni.jpg&quot; width=&quot;250&quot; height=&quot;160&quot;>')">Toni Grühn</td><td onmouseover="Tip('<img src=&quot;../pics/ajax/uhus_ajax/14.jpg&quot; width=&quot;250&quot; height=&quot;344&quot;>')">Uhu</td></tr>
                    <tr><td onmouseover="Tip(nachrichtensprecherin)">Nachrichtensprecherin</td><td onmouseover="Tip('<img src=&quot;../pics/leute/nadine.jpg&quot; width=&quot;250&quot; height=&quot;160&quot;>')">Nadine Ebinger</td><td onmouseover="Tip('<img src=&quot;../pics/ajax/uhus_ajax/15.jpg&quot; width=&quot;250&quot; height=&quot;344&quot;>')">Uhu</td></tr>
                    <tr><td onmouseover="Tip(bertrand)">Bertrand</td><td onmouseover="Tip('<img src=&quot;../pics/leute/kader.jpg&quot; width=&quot;250&quot; height=&quot;160&quot;>')">Kader Azirar</td><td onmouseover="Tip('<img src=&quot;../pics/ajax/uhus_ajax/16.jpg&quot; width=&quot;250&quot; height=&quot;344&quot;>')">Uhu</td></tr>
                    <tr><td onmouseover="Tip(gast)">Gast im Wirtshaus</td><td onmouseover="Tip('<img src=&quot;../pics/leute/claudi.jpg&quot; width=&quot;250&quot; height=&quot;160&quot;>')">Claudia Richter</td><td onmouseover="Tip('<img src=&quot;../pics/ajax/uhus_ajax/17.jpg&quot; width=&quot;250&quot; height=&quot;344&quot;>')">Uhu</td></tr>
                    <tr><td onmouseover="Tip(wahrsagerin)">Wahrsagerin</td><td onmouseover="Tip('<img src=&quot;../pics/leute/julia.jpg&quot; width=&quot;250&quot; height=&quot;160&quot;>')">Julia Horn</td><td onmouseover="Tip('<img src=&quot;../pics/ajax/uhus_ajax/18.jpg&quot; width=&quot;250&quot; height=&quot;344&quot;>')">Uhu</td></tr>
                    <tr><td onmouseover="Tip(kaufhausdetektiv)">Kaufhausdetektiv</td><td onmouseover="Tip('<img src=&quot;../pics/leute/christoph.jpg&quot; width=&quot;250&quot; height=&quot;160&quot;>')">Christoph Heidt</td><td onmouseover="Tip('<img src=&quot;../pics/ajax/uhus_ajax/19.jpg&quot; width=&quot;250&quot; height=&quot;344&quot;>')">Uhu</td></tr>
                    <tr><td onmouseover="Tip(polizist)">Polizist</td><td onmouseover="Tip('<img src=&quot;../pics/leute/felix.jpg&quot; width=&quot;250&quot; height=&quot;160&quot;>')">Felix Schneider</td><td onmouseover="Tip('<img src=&quot;../pics/ajax/uhus_ajax/20.jpg&quot; width=&quot;250&quot; height=&quot;344&quot;>')">Uhu</td></tr>
                </table>

                <h1 class='m_b_10'>Das kreative Team</h1>
                <table class="m_b_10">
                    <tr><td>Text und Soundeffekte</td><td>Uli Hillenbrand</td></tr>
                    <tr><td>Schnitt und Musik</td><td>Martin Helfer</td></tr>
                    <tr><td>Cover</td><td>Barbara Helfer</td></tr>
                    <tr><td>Logo</td><td>Barbara Hillenbrand</td></tr>
                    <tr><td>Länge</td><td>ca. 96 Minuten</td></tr>
                    <tr><td>Produktion</td><td>Rundfunk Rheinau 2007</td></tr>
                </table>
            </div>
        </div>
    </body>
</html>