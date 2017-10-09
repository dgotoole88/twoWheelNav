<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <script src="../../js/index.js"></script>
        <script src="../../js/autoComplete.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBJMUqwdQmDhef158yXVrjvOJF3XcMUrEA&libraries=places&callback=initAutocomplete"
        async defer></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php
            include 'header.php';
            include '../Controller/unauthAccess.php';
        ?>
        <title>Two Wheel Nav</title>
    </head>
    <body id="bodyStyles" onload="initMap()">
        <div id="searchHeadings">
            <h1 class="searchHeadings">Welcome to Two Wheel Nav's route planner!</h1>
        </div>
        <div id="alignSearch">
        </div>
        <div id="searchBody">
            <div id="mapContainer">
                <div id="map"></div>
            </div>
            <div>
                <fieldset>
                    <form id="form" method="post" style="overflow-y:scroll;">
                    <h4>Directions</h4>
                        <div>
                            <label>Start point</label>
                        </div>
                        <div>
                            <input id="startPoint" onFocus="geolocate()" class="inputLog" type="text" required>
                        </div>
                        <div>
                            <label>End point</label>
                        </div>
                        <div>
                            <input id="endPoint" class="inputLog" type="text" required>
                        </div>
                        <div>
                            <button id="submitSearch" onclick="initMap()" type="button" class="btn btn-primary btn-block btn-large">Go</button>
                        </div>
                        <div id="right-panel">
                            <p>Total Distance: <span id="total"></span></p>
                        </div>
                    </form>
                </fieldset>
            </div>
        </div>
    </body>
    <footer><?php include 'footer.php';?></footer>
</html>