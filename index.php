<!doctype html>
<!--
    Created on : 23.03.2021
    Author     : ce_stupidejackson, 
--> 

<head>
    <!-- Meta tags -->
    <meta charset="utf-8">


    <!-- Title -->
    <title>in progress</title>

    <!-- Map extension by: https://github.com/MikeZyeman/TG-Map-->
    <script src="js/jquery.min.js"></script>
    <script src="d3js.org/d3.v3.min.js"></script>
    <script src="d3js.org/topojson.v1.min.js"></script>
    <script src="js/d3.v3.min.js"></script>
    <script src="js/topojson.v1.min.js"></script>


    <!-- Bootstrap CSS by CDN -->
    <link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" rel="stylesheet" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>


    <!-- Custom CSS -->
    <link href="moin.css" rel="stylesheet">
    <link rel="stylesheet" href="css/index.css"> <!-- for map extension -->

    <!-- Google Font CSS, change if necessary -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Kulim+Park:wght@400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Palanquin:wght@500&display=swap" rel="stylesheet">



    <!-- Favicons created with realfavicongenerator.net -->
    <link href="favicons/apple-touch-icon.png" rel="apple-touch-icon" sizes="180x180">
    <link href="favicons/php1.png" rel="icon" sizes="32x32" type="image/png">
    <link href="favicons/favicon-16x16.png" rel="icon" sizes="16x16" type="image/png">
    <link href="favicons/site.webmanifest" rel="manifest">
    <link color="#5bbad5" href="favicons/safari-pinned-tab.svg" rel="mask-icon">
    <link href="favicons/code.ico" rel="shortcut icon">
    <meta content="#2d89ef" name="msapplication-TileColor">
    <meta content="favicons/browserconfig.xml" name="msapplication-config">
    <meta content="#ffffff" name="theme-color">
    <script type="text/javascript"> var currenttime = '<?php print date("F d, Y H:i:s", time()) ?>';</script>  

</head>
<!-- content -->
<body>
    <div class="container">
        <header>
            <div class="fixed-top">
                <div class="collapse" id="navbarToggleExternalContent">
                    <div class="bg-dark p-4">
                        <h5 class="text-light h4">Hier findest du die aktuelle Version!</h5>
                        <span class="text-muted text-light">Version 2.1</span>

                    </div>
                </div>
                <nav class="navbar navbar-dark bg-dark">
                    <button class="navbar-toggler bg-white" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">            
                        <img src="img/Thurgau.svg" width="100" height="30" class="d-inline-block align-center" alt="">
                    </button>   
                </nav>
            </div>
        </header>
    </div>
    <main>
        <div class ="background">
            <p class="title">Siedlungsverzeichnis Thurgau</p>
        </div>
        <div class ="container">
            <div class ="intro">
                <p class ="serial">Willkommen!</p>
                <hr class="featurette-divider-for-mid">
                <p class ="normal">Die Siedlungsverzeichnisdaten stammen von 2018.</p>
            </div>

            <hr class="featurette-divider">
            <div class ="intro">
                <p class ="serial">Karte</p>
                <hr class="featurette-divider-for-mid">
            </div>
            <div id="container">
                <div id="graph"></div>
            </div>
            <button type="button" id= "btn1" class="btn btn-primary normal2">Einwohnerzahl</button>
            <!-- script for map extension https://github.com/MikeZyeman/TG-Map--> 
            <script src="js/main.js"></script>
            <script src="js/app2.js"></script>
            <hr class="featurette-divider">
            <div class ="intro">
                <p class ="serial">Anzeige</p>
                <hr class="featurette-divider-for-mid">
            </div>
            <form name="form2" method="post" >
                <!-- checkboxes -->
                <div class="Row">
                    <div class="Column">
                        <div class="form-check">
                            <label>
                                <input type="checkbox" name="PoGe"> <span class="normal2" >Politische Gemeinde</span>
                            </label>
                        </div>
                    </div>
                    <div class="Column">
                        <div class="form-check">
                            <label>
                                <input type="checkbox" name="BzBezeichnung"> <span class="normal2">Bezirk</span>
                            </label>
                        </div>
                    </div>
                    <div class="Column">
                        <div class="form-check">
                            <label>
                                <input type="checkbox" name="BzNr"> <span class="normal2">Bezirk-Nummer</span>
                            </label>
                        </div>
                    </div>
                    <div class="Column">
                        <div class="form-check go-here1">
                            <label>
                                <input type="checkbox" name="Einwohner"> <span class="normal2">Einwohner</span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="Row">
                    <div class="Column">
                        <div class="form-check">
                            <label>
                                <input type="checkbox" name="PLZ"> <span class="normal2">PLZ</span>
                            </label>
                        </div>
                    </div>
                    <div class="Column">
                        <div class="form-check">
                            <label>
                                <input type="checkbox" name="Ort"> <span class="normal2">Ort</span>
                            </label>
                        </div>
                    </div>
                    <div class="Column">
                        <div class="form-check">
                            <label>
                                <input type="checkbox" name="PSG"> <span class="normal2">Primarschulgemeinde</span>
                            </label>
                        </div>
                    </div>
                    <div class="Column">
                        <div class="form-check">
                            <label>
                                <input type="checkbox" name="SESG"> <span class="normal2">Sekundarschulgemeinde</span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="Row">
                    <div class="Column">
                        <div class="form-check">
                            <label>
                                <input type="checkbox" name="EVKG"> <span class="normal2">Evangelische Kirchgemeinde</span>
                            </label>
                        </div>
                    </div>
                    <div class="Column">
                        <div class="form-check">
                            <label>
                                <input type="checkbox" name="KTKG"> <span class="normal2">Katholische Kirchgemeinde</span>
                            </label>
                        </div>
                    </div>
                    <div class="Column">
                        <div class="form-check">
                            <label>
                                <input type="checkbox" name="Siedlung"> <span class="normal2">Siedlung</span>
                            </label>
                        </div>
                    </div>
                    <div class="Column">
                        <div class="form-check">
                            <label>
                                <input type="checkbox" name="BFS"> <span class="normal2">BFS-Nummer</span>
                            </label>
                        </div>
                    </div>
                </div>
                <br>
                <!-- drop-down list and search function -->
                <div class="form-group">
                    <label for="exampleFormControlSelect1" class = "normal2">Sortieren nach</label>
                    <select class="form-control normal2" name="sort">
                        <option value="PolGemName">Politische Gemeinde</option>
                        <option value="PolGemNr">BFS-Nummer</option>
                        <option value="BezNr">Bezirksnummer</option>
                        <option value="BezName">Bezirk</option>
                        <option value="SiedName">Siedlung</option>
                        <option value="SiedEinwohner">Einwohner</option>
                        <option value="OrtPLZ">PLZ</option>
                        <option value="OrtName">Ort</option>
                        <option value="PrimSchulGName">Primarschulgemeinde</option>
                        <option value="SekSchulGName">Sekundarschulgemeinde</option>
                        <option value="EvanKirchGName">Evangelische Kirchgemeinde</option>
                        <option value="KathKirchGName">Katholische Kirchgemeinde</option>            
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1" class = "normal2">Filter</label>
                    <select class="form-control normal2" name="criteria1">
                        <option value="PolGemName">Politische Gemeinde</option>
                        <option value="PolGemNr">BFS Nr</option>
                        <option value="BezNr">Bezirksnummer</option>
                        <option value="BezName">Bezirk</option>
                        <option value="SiedName">Siedlung</option>
                        <option value="SiedEinwohner">Einwohner</option>
                        <option value="OrtPLZ">PLZ</option>
                        <option value="OrtName">Ort</option>
                        <option value="PrimSchulGName">Primarschulgemeinde</option>
                        <option value="SekSchulGName">Sekundarschulgemeinde</option>
                        <option value="EvanKirchGName">Evangelische Kirchgemeinde</option>
                        <option value="KathKirchGName">Katholische Kirchgemeinde</option>          
                    </select>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control normal2" name = "criteria2" id="exampleFormControlInput1" placeholder="Suchen nach">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1" class = "normal2">Filter</label>
                    <select class="form-control normal2" name="1criteria1">
                        <option value="PolGemName">Politische Gemeinde</option>
                        <option value="PolGemNr">BFS Nr</option>
                        <option value="BezNr">Bezirksnummer</option>
                        <option value="BezName">Bezirk</option>
                        <option value="SiedName">Siedlung</option>
                        <option value="SiedEinwohner">Einwohner</option>
                        <option value="OrtPLZ">PLZ</option>
                        <option value="OrtName">Ort</option>
                        <option value="PrimSchulGName">Primarschulgemeinde</option>
                        <option value="SekSchulGName">Sekundarschulgemeinde</option>
                        <option value="EvanKirchGName">Evangelische Kirchgemeinde</option>
                        <option value="KathKirchGName">Katholische Kirchgemeinde</option>              
                    </select>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control normal2" name = "1criteria2" id="exampleFormControlInput1" placeholder="Suchen nach">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1" class = "normal2">Filter</label>
                    <select class="form-control normal2" name="2criteria1">
                        <option value="PolGemName">Politische Gemeinde</option>
                        <option value="PolGemNr">BFS Nr</option>
                        <option value="BezNr">Bezirksnummer</option>
                        <option value="BezName">Bezirk</option>
                        <option value="SiedName">Siedlung</option>
                        <option value="SiedEinwohner">Einwohner</option>
                        <option value="OrtPLZ">PLZ</option>
                        <option value="OrtName">Ort</option>
                        <option value="PrimSchulGName">Primarschulgemeinde</option>
                        <option value="SekSchulGName">Sekundarschulgemeinde</option>
                        <option value="EvanKirchGName">Evangelische Kirchgemeinde</option>
                        <option value="KathKirchGName">Katholische Kirchgemeinde</option>           
                    </select>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control normal2" name = "2criteria2" id="exampleFormControlInput2" placeholder="Suchen nach">


                </div>

                <button type="submit" name = "btn" class="btn btn-primary normal2" onClick="document.getElementById('go-here1').scrollIntoView();">Suchen</button>

                <br>
                <!-- php --> 
                <?php
                error_reporting(0);
                //variables for connecting to the database / use your own database / MySQL-script is available on GitHub
                $servername = "";
                $username = "";
                $password = "";
                $dbname = "";

                if (isset($_POST['criteria1']) && '' != ($_POST['criteria2'])) {
                    $where = " and " . $_POST['criteria1'] . " = " . "'" . $_POST['criteria2'] . "'";
                }

                if (isset($_POST['1criteria1']) && '' != ($_POST['1criteria2'])) {
                    $where2 = " and " . $_POST['1criteria1'] . " = " . "'" . $_POST['1criteria2'] . "'";
                }

                if (isset($_POST['2criteria1']) && '' != ($_POST['2criteria2'])) {
                    $where3 = " and " . $_POST['2criteria1'] . " = " . "'" . $_POST['2criteria2'] . "'";
                }
                //The searching algorithm is programmed by Krishen Kanaganayagam, not copied from the internet
                $defsql = "select distinct *
from TPolitischeGemeinden p, TBezirke b,TSiedlungen s, TOrte o, TPrimSchulGemeinden pg, TSekSchulGemeinden sg, TEvanKirchGemeinden eg ,TKathKirchGemeinden kg
where s.PolGemNr = p.PolGemNr and s.BezNr = b.BezNr" . $where . $where2 . $where3 . " and s.OrtONRP = o.OrtONRP and s.PrimSchulGId = pg.PrimSchulGId and s.SekSchulGId = sg.SekSchulGId and s.EvanKirchGId = eg.EvanKirchGId and s.KathKirchGId = kg.KathKirchGId";

                if (isset($_POST['sort'])) {
                    $defsql = $defsql . ' order by ' . $_POST['sort'];
                }
                // Create and Check are from w3schools.com
                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);

                // Check connection, pls connect to the DB, if not, the footer wouldn't appear
                if ($conn->connect_error) {
                    echo '<hr class="featurette-divider"> <div class ="intro goHere" ><p class ="serial">Resultate</p><hr class="featurette-divider-for-mid"></div>';
                    die('<p class ="normal2">Die Datenbank ist zurzeit nicht verfügbar!</p><br>');
                }

                function showValue($postName, $lRow, $rowName) {
                    if (isset($_POST[$postName])) {
                        echo '<td>' . $lRow[$rowName] . '</td>';
                    }
                }

                function showValueName($postName, $rowName) {
                    if (isset($_POST[$postName])) {
                        echo '<th>' . $rowName . '</th>';
                    }
                }

                $result = $conn->query($defsql);
                if ($result->num_rows > 0) {
                    // output data of each row in a clean table

                    echo '<hr class="featurette-divider"> <div class ="intro" ><p class ="serial">Resultate</p><hr class="featurette-divider-for-mid"></div> ';
                    echo '<table class="table table-light table-striped normal2">';
                    echo '<tbody>';
                    echo'<thead>';
                    echo'<tr>';

                    showValueName('BFS', 'BFS-Nr');
                    showValueName('PoGe', 'Politsche Gemeinde');
                    showValueName('BzNr', 'Bezirk-Nr');
                    showValueName('BzBezeichnung', 'Bezirk');
                    showValueName('Siedlung', 'Siedlung');
                    showValueName('Einwohner', 'Einwohner');

                    showValueName('PLZ', 'PLZ');
                    showValueName('Ort', 'Ort');
                    showValueName('PSG', 'Primarschulgem.');
                    showValueName('SESG', 'Sekundarschulgem.');
                    showValueName('EVKG', 'Evangelische Kirchgem.');
                    showValueName('KTKG', 'Katholische Kirchgem.');

                    echo'</tr>';
                    echo'</thead>';
                    while ($row = $result->fetch_assoc()) {
                        echo '<tr>';
                        showValue('BFS', $row, 'PolGemNr');
                        showValue('PoGe', $row, 'PolGemName');
                        showValue('BzNr', $row, 'BezNr');
                        showValue('BzBezeichnung', $row, 'BezName');
                        showValue('Siedlung', $row, 'SiedName');
                        showValue('Einwohner', $row, 'SiedEinwohner');
                        showValue('PLZ', $row, 'OrtPLZ');
                        showValue('Ort', $row, 'OrtName');
                        showValue('PSG', $row, 'PrimSchulGName');
                        showValue('SESG', $row, 'SekSchulGName');
                        showValue('EVKG', $row, 'EvanKirchGName');
                        showValue('KTKG', $row, 'KathKirchGName');

                        echo '</tr>';
                    }
                    echo '</tbody>';
                    echo '</table>';
                } else { //if no data was found
                    echo '<hr class="featurette-divider"> <div class ="intro"><p class ="serial">Resultate</p><hr class="featurette-divider-for-mid"></div> ';
                    echo '<p class ="normal2">Keine Resultate gefunden!</p>';
                }
                $conn->close(); //w3schools.com
                ?>
            </form>

            <hr class="featurette-divider">
            <footer class="container">
                <p class="alignleft normal2">&copy; 2021 &middot; Varun Vivekanantharasa &middot; Krishen Kanaganayagam</p>
                <p class="alignright float-end normal2"><span class="text-muted" id="servertime" > </span><a href="#"> &middot; nach oben</a></p>
            </footer>
        </div>

    </main>



    <!-- Custom file(s) -->
    <script src="js/myscripts.js"></script> <!-- for timer-->

    <!-- jQuery and JS bundle w/ Popper.js -->
    <script crossorigin="anonymous"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script crossorigin="anonymous"
            integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
    src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Icons from ionic -->
    <script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>


</body>

</html>

