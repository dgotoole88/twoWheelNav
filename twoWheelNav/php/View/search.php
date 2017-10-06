<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php 
            include 'header.php';
        ?>
        <title>Two Wheel Nav</title>
    </head>
    <body>
        <div id="searCont">
            <div id="barCont">
                <div class="searchBar">
                    <input class="inputLog" size="46" placeholder="Search for a Location" type="text" required>
                    <button name="submit" type="submit">Search</button>
                </div>
            </div>
            <div id="searchContainer">
                <div id="mapContainer">
                    <div id="googleMaps">
                        <img alt="Google Maps" src="images/exampleMap.png">
                    </div>
                </div>
            </div>
        </div>
        <footer><?php include 'footer.php';?></footer>
    </body>
</html>