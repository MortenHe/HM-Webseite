<!DOCTYPE html>
<html>
    <head>

        <?php
        include ("3k_head.php");
        ?>

        <script type="text/javascript" src="../js/3k.js"></script>

        <title>Reiterhof Dreikronen - Hörspiel</title>
    </head>

    <!-- Version 26.07.16 -->
    <body>

        <script type="text/javascript" src="../js/3k_tooltip.js"></script>

        <!--  Gesamter Inhalt  -->
        <div id="all">
            <div class="center"><img src="../pics/hp/3k_logo-oben.png" width="582" height="132" alt="logo"></div>

            <!-- Link zum Portal -->
            <a href="portal_1portal.php"><div class="portal_back">Zurück zum Portal</div></a>

            <!--  Menü  -->
            <div id="menu">
                <a class="menu" href="3k_1start.php">Start</a>&nbsp;&nbsp;|&nbsp;
                <a style="text-decoration: underline; color:#492b08;" class="menu" href="3k_2hoer.php">Hörspiel</a>&nbsp;&nbsp;|&nbsp;
                <a class="menu" href="3k_3material.php">Material</a>
            </div>

            <!-- Inhalt -->
            <div id="content_middle" class="m_b_25">

                <h1>Anhören und Runterladen</h1>
                <div class="down_box">
                    <audio src="../files/tracks/3k_full.mp3" controls></audio>
                    <a download class="down_a" href="../files/down/3k.zip">kostenloser Download</a>
                </div>

                <h1>Die Rollen und ihre Sprecher</h1>
                <table>
                    <tr><th>Rolle</th><th>Sprecher</th><th>Pferde-Bild</th></tr>
                    <tr><td onmouseover="Tip(jule)">Jule</td><td onmouseover="Tip('<img src=&quot;../pics/leute/julia.jpg&quot; width=&quot;250&quot; height=&quot;160&quot;>')">Julia Horn</td><td onmouseover="Tip('<img src=&quot;../pics/ajax/pferd_ajax/julia.jpg&quot; width=&quot;250&quot; height=&quot;177&quot;>')">Pferd</td></tr>
                    <tr><td onmouseover="Tip(rene)">René Ericson</td><td onmouseover="Tip('<img src=&quot;../pics/leute/marcus.jpg&quot; width=&quot;250&quot; height=&quot;160&quot;>')">Marcus Helfer</td><td onmouseover="Tip('<img src=&quot;../pics/ajax/pferd_ajax/marcus.jpg&quot; width=&quot;250&quot; height=&quot;177&quot;>')">Pferd</td></tr>
                    <tr><td onmouseover="Tip(anke)">Anke Ericson</td><td onmouseover="Tip('<img src=&quot;../pics/leute/steffi.jpg&quot; width=&quot;250&quot; height=&quot;160&quot;>')">Steffi Hauer</td><td onmouseover="Tip('<img src=&quot;../pics/ajax/pferd_ajax/steffi.jpg&quot; width=&quot;250&quot; height=&quot;177&quot;>')">Pferd</td></tr>
                    <tr><td onmouseover="Tip(grischa)">Grischa Ericson</td><td onmouseover="Tip('<img src=&quot;../pics/leute/klaus.jpg&quot; width=&quot;250&quot; height=&quot;160&quot;>')">Klaus Ryniak</td><td onmouseover="Tip('<img src=&quot;../pics/ajax/pferd_ajax/klaus.jpg&quot; width=&quot;250&quot; height=&quot;177&quot;>')">Pferd</td></tr>
                    <tr><td onmouseover="Tip(lars)">Lars Ericson</td><td onmouseover="Tip('<img src=&quot;../pics/leute/toni.jpg&quot; width=&quot;250&quot; height=&quot;160&quot;>')">Toni Grühn</td><td onmouseover="Tip('<img src=&quot;../pics/ajax/pferd_ajax/toni.jpg&quot; width=&quot;250&quot; height=&quot;177&quot;>')">Pferd</td></tr>
                    <tr><td onmouseover="Tip(hans)">Hans Söder</td><td onmouseover="Tip('<img src=&quot;../pics/leute/roli.jpg&quot; width=&quot;250&quot; height=&quot;160&quot;>')">Roland Klug</td><td onmouseover="Tip('<img src=&quot;../pics/ajax/pferd_ajax/roli.jpg&quot; width=&quot;250&quot; height=&quot;177&quot;>')">Pferd</td></tr>
                    <tr><td onmouseover="Tip(jean)">Jean d'Argent</td><td onmouseover="Tip('<img src=&quot;../pics/leute/phil.jpg&quot; width=&quot;250&quot; height=&quot;160&quot;>')">Philipp Le Provost</td><td onmouseover="Tip('<img src=&quot;../pics/ajax/pferd_ajax/phil.jpg&quot; width=&quot;250&quot; height=&quot;177&quot;>')">Pferd</td></tr>
                    <tr><td onmouseover="Tip(eike)">Eike</td><td onmouseover="Tip('<img src=&quot;../pics/leute/tim.jpg&quot; width=&quot;250&quot; height=&quot;160&quot;>')">Tim Krämer</td><td onmouseover="Tip('<img src=&quot;../pics/ajax/pferd_ajax/tim.jpg&quot; width=&quot;250&quot; height=&quot;177&quot;>')">Pferd</td></tr>
                    <tr><td onmouseover="Tip(gustavo)">Gustavo</td><td onmouseover="Tip('<img src=&quot;../pics/leute/martin.jpg&quot; width=&quot;250&quot; height=&quot;160&quot;>')">Martin Helfer</td><td onmouseover="Tip('<img src=&quot;../pics/ajax/pferd_ajax/martin.jpg&quot; width=&quot;250&quot; height=&quot;177&quot;>')">Pferd</td></tr>
                    <tr><td onmouseover="Tip(lotte)">Lotte</td><td onmouseover="Tip('<img src=&quot;../pics/leute/nadine.jpg&quot; width=&quot;250&quot; height=&quot;160&quot;>')">Nadine Ebinger</td><td onmouseover="Tip('<img src=&quot;../pics/ajax/pferd_ajax/nadine.jpg&quot; width=&quot;250&quot; height=&quot;177&quot;>')">Pferd</td></tr>
                    <tr><td onmouseover="Tip(tierarzt)">Tierarzt Wilhelm</td><td onmouseover="Tip('<img src=&quot;../pics/leute/tietz.jpg&quot; width=&quot;250&quot; height=&quot;160&quot;>')">Christian Tietz</td><td onmouseover="Tip('<img src=&quot;../pics/ajax/pferd_ajax/tietz.jpg&quot; width=&quot;250&quot; height=&quot;177&quot;>')">Pferd</td></tr>
                    <tr><td onmouseover="Tip(andi)">Andi Kaiser</td><td onmouseover="Tip('<img src=&quot;../pics/leute/paul.jpg&quot; width=&quot;250&quot; height=&quot;160&quot;>')">Paul Wolff</td><td onmouseover="Tip('<img src=&quot;../pics/ajax/pferd_ajax/paul.jpg&quot; width=&quot;250&quot; height=&quot;177&quot;>')">Pferd</td></tr>
                    <tr><td onmouseover="Tip(ferdinand)">Ferdinand</td><td onmouseover="Tip('<img src=&quot;../pics/leute/svenl.jpg&quot; width=&quot;250&quot; height=&quot;160&quot;>')">Sven Lutz</td><td onmouseover="Tip('<img src=&quot;../pics/ajax/pferd_ajax/svenl.jpg&quot; width=&quot;250&quot; height=&quot;177&quot;>')">Pferd</td></tr>
                    <tr><td onmouseover="Tip(jessy)">Jessy</td><td onmouseover="Tip('<img src=&quot;../pics/leute/anna.jpg&quot; width=&quot;250&quot; height=&quot;160&quot;>')">Anna Helfer</td><td onmouseover="Tip('<img src=&quot;../pics/ajax/pferd_ajax/anna.jpg&quot; width=&quot;250&quot; height=&quot;177&quot;>')">Pferd</td></tr>
                    <tr><td onmouseover="Tip(lucy)">Lucy Mombach</td><td onmouseover="Tip('<img src=&quot;../pics/leute/leonie.jpg&quot; width=&quot;250&quot; height=&quot;160&quot;>')">Léonie Fournier</td><td onmouseover="Tip('<img src=&quot;../pics/ajax/pferd_ajax/leonie.jpg&quot; width=&quot;250&quot; height=&quot;177&quot;>')">Pferd</td></tr>
                    <tr><td onmouseover="Tip(melissa)">Melissa</td><td onmouseover="Tip('<img src=&quot;../pics/leute/silvi.jpg&quot; width=&quot;250&quot; height=&quot;160&quot;>')">Silvi Hauer</td><td onmouseover="Tip('<img src=&quot;../pics/ajax/pferd_ajax/silvi.jpg&quot; width=&quot;250&quot; height=&quot;177&quot;>')">Pferd</td></tr>
                    <tr><td onmouseover="Tip(fabienne)">Fabienne</td><td onmouseover="Tip('<img src=&quot;../pics/leute/vivien.jpg&quot; width=&quot;250&quot; height=&quot;160&quot;>')">Vivien Lepold</td><td onmouseover="Tip('<img src=&quot;../pics/ajax/pferd_ajax/vivien.jpg&quot; width=&quot;250&quot; height=&quot;177&quot;>')">Pferd</td></tr>
                    <tr><td onmouseover="Tip(susi)">Susi</td><td onmouseover="Tip('<img src=&quot;../pics/leute/paula.jpg&quot; width=&quot;250&quot; height=&quot;160&quot;>')">Paula-Marie Lutz</td><td onmouseover="Tip('<img src=&quot;../pics/ajax/pferd_ajax/paula.jpg&quot; width=&quot;250&quot; height=&quot;177&quot;>')">Pferd</td></tr>
                    <tr><td onmouseover="Tip(marion)">Marion</td><td onmouseover="Tip('<img src=&quot;../pics/leute/lisa.jpg&quot; width=&quot;250&quot; height=&quot;160&quot;>')">Lisa Bollack</td><td onmouseover="Tip('<img src=&quot;../pics/ajax/pferd_ajax/lisa.jpg&quot; width=&quot;250&quot; height=&quot;177&quot;>')">Pferd</td></tr>
                    <tr><td onmouseover="Tip(ruedi)">Rüdiger, der Dichter</td><td onmouseover="Tip('<img src=&quot;../pics/leute/tobias.jpg&quot; width=&quot;250&quot; height=&quot;160&quot;>')">Tobias Werner</td><td onmouseover="Tip('<img src=&quot;../pics/ajax/pferd_ajax/tobias.jpg&quot; width=&quot;250&quot; height=&quot;177&quot;>')">Pferd</td></tr>
                    <tr><td onmouseover="Tip(axel)">Axel</td><td onmouseover="Tip('<img src=&quot;../pics/leute/stefan.jpg&quot; width=&quot;250&quot; height=&quot;160&quot;>')">Stefan Rieber</td><td onmouseover="Tip('<img src=&quot;../pics/ajax/pferd_ajax/stefan.jpg&quot; width=&quot;250&quot; height=&quot;177&quot;>')">Pferd</td></tr>
                    <tr><td onmouseover="Tip(nachbar)">Nachbar</td><td onmouseover="Tip('<img src=&quot;../pics/leute/uli.jpg&quot; width=&quot;250&quot; height=&quot;160&quot;>')">Uli Hillenbrand</td><td onmouseover="Tip('<img src=&quot;../pics/ajax/pferd_ajax/uli.jpg&quot; width=&quot;250&quot; height=&quot;177&quot;>')">Pferd</td></tr>
                    <tr><td onmouseover="Tip(bankberater)">Bankberater</td><td onmouseover="Tip('<img src=&quot;../pics/leute/night.jpg&quot; width=&quot;250&quot; height=&quot;160&quot;>')">Markus Uehlin</td><td onmouseover="Tip('<img src=&quot;../pics/ajax/pferd_ajax/night.jpg&quot; width=&quot;250&quot; height=&quot;177&quot;>')">Pferd</td></tr>
                    <tr><td onmouseover="Tip(mitarbeiter)">Staatsanwalt</td><td onmouseover="Tip('<img src=&quot;../pics/leute/janos.jpg&quot; width=&quot;250&quot; height=&quot;160&quot;>')">Janos Sartor</td><td onmouseover="Tip('<img src=&quot;../pics/ajax/pferd_ajax/janos.jpg&quot; width=&quot;250&quot; height=&quot;177&quot;>')">Pferd</td></tr>
                    <tr><td onmouseover="Tip(gast)">Gast im Reiterhuisel</td><td onmouseover="Tip('<img src=&quot;../pics/leute/libbes.jpg&quot; width=&quot;250&quot; height=&quot;160&quot;>')">Christian Libera</td><td onmouseover="Tip('<img src=&quot;../pics/ajax/pferd_ajax/libbes.jpg&quot; width=&quot;250&quot; height=&quot;177&quot;>')">Pferd</td></tr>
                    <tr><td onmouseover="Tip(mann)">Mann auf dem Klo</td><td onmouseover="Tip('<img src=&quot;../pics/leute/sven.jpg&quot; width=&quot;250&quot; height=&quot;160&quot;>')">Sven Bollack</td><td onmouseover="Tip('<img src=&quot;../pics/ajax/pferd_ajax/sven.jpg&quot; width=&quot;250&quot; height=&quot;177&quot;>')">Pferd</td></tr>
                    <tr><td onmouseover="Tip(pascal)">Pascal Oechsle</td><td onmouseover="Tip('<img src=&quot;../pics/leute/marcusl.jpg&quot; width=&quot;250&quot; height=&quot;160&quot;>')">Marcus Libera</td><td onmouseover="Tip('<img src=&quot;../pics/ajax/pferd_ajax/marcusl.jpg&quot; width=&quot;250&quot; height=&quot;177&quot;>')">Pferd</td></tr>
                </table>

                <h1 class='m_b_10'>Das kreative Team</h1>
                <table class="m_b_10">
                    <tr><td>Text und Soundeffekte</td><td>Uli Hillenbrand</td></tr>
                    <tr><td>Schnitt und Musik</td><td>Martin Helfer</td></tr>
                    <tr><td>Cover</td><td>Barbara Helfer</td></tr>
                    <tr><td>Länge</td><td>ca. 75 Minuten</td></tr>
                    <tr><td>Produktion</td><td>Rundfunk Rheinau 2008/2009</td></tr>
                </table>
            </div>
        </div>
    </body>
</html>