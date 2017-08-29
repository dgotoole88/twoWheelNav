<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <?php include 'View/header.php';?>
        <link rel="stylesheet" type="text/css" href="View/css/twoWheelNav.css" media="screen"/>
        <title>Two Wheel Nav</title>
    </head>
    <body>
        <div id="searCont">
            <div id="barCont">
                <div class="searchBar">
                    <input size="46" placeholder="Search for a Location" type="text" required>
                    <button name="submit" type="submit">Search</button>
                </div>
                <h2>OR</h2>
                <div class="searchBar">
                    <input size="20" placeholder="Start Point" type="text" required>
                    <input size="20" placeholder="End Point" type="text" required>
                    <button name="submit" type="submit">Search</button>
                </div>
            </div>
            <div id="searchContainer">
                <div id="mapContainer">
                    <div id="poi">
                        <img id="note" alt="Google Maps" src="images/poi.png">
                    </div>
                    <div id="googleMaps">
                        <img alt="Google Maps" src="images/exampleMap.png">
                    </div>
                </div>
            </div>
            <div id="poiDescription">
                <h2>Description of POI</h2>
                <textarea name="poiD" id="poiTextArea" cols="95" rows="10"></textarea>
            </div>
        </div>
        <footer><?php include 'View/footer.php';?></footer>
    </body>
</html>