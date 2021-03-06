<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="../../js/index.js"></script>
        <script src="../../js/saveRoute.js"></script>
        <script src="../../js/autoComplete.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBJMUqwdQmDhef158yXVrjvOJF3XcMUrEA&libraries=places&callback=initAutocomplete"
        async defer></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php
            include 'header.php';
            include '../Controller/unauthAccess.php';
            include '../Controller/openRoute.php';

            $start = $_SESSION['startPoint'];
            $end = $_SESSION['endPoint'];
        ?>
        <title>Two Wheel Nav</title>
    </head>
    <body id="bodyStyles" onload="initMap()">
        <div id="searchBody">
            <div id="mapContainer">
                <div id="map"></div>
            </div>
            <div>
                <fieldset id="fieldAlign">
                    <div id="alignDirections">
                        <form id="form" method="post" style="overflow-y:scroll;">
                        <h4 id="directionsHeading">Directions</h4>
                            <div>
                                <label class="white">Start point</label>
                            </div>
                                <?php
                                    if($start && $end != ""){
                                ?>
                                        <div>
                                            <input id="startPoint" onFocus="geolocate()" class="inputLog" value="<?php print_r($start); ?>" type="text" required>
                                        </div>
                                        <div>
                                            <label class="white">End point</label>
                                        </div>
                                        <div>
                                            <input id="endPoint" class="inputLog" value="<?php print_r($end); ?>" type="text" required>
                                        </div>
                                <?php
                                    }else{    
                                ?>
                                    <div>
                                        <input id="startPoint" onFocus="geolocate()" class="inputLog" type="text" required>
                                    </div>
                                    <div>
                                        <label class="white">End point</label>
                                    </div>
                                    <div>
                                        <input id="endPoint" class="inputLog" type="text" required>
                                    </div>
                                <?php
                                    }
                                ?>
                            <div>
                                <button id="submitSearch" onclick="initMap()" type="button" class="btn btn-primary btn-block btn-large">Go</button>
                            </div>
                            <div id="right-panel">
                                <div id="save">
                                    <label class="white">Route name</label>
                                    <input id="routeName" class="inputLog" type="text" required>
                                    <button id="saveRoutes" type="button" class="btn btn-primary btn-block btn-large">Save Route</button>
                                </div>
                                <p>Total Distance: <span id="total"></span></p>
                                <div>
                                    <h3 id="saveMessage"></h3>
                                </div>
                            </div>
                        </form>
                    </div>
                </fieldset>
            </div>
        </div>
        <div id="alignSearch">
            <div id="forecast">
                <label>Weather Forecast</label>
                <script type="text/javascript" src="https://www.weatherzone.com.au/woys/graphic_forecast.jsp?postcode=4051"></script>
                <a class="weatherLinks" href="http://www.weatherzone.com.au/radar.jsp">View lightning tracker</a>
            </div>
            <div id="currentWeather">
                <label>Current Weather</label>
                <script type="text/javascript" src="https://www.weatherzone.com.au/woys/graphic_current.jsp?postcode=4051"></script>
                <a class="weatherLinks" href="http://www.weatherzone.com.au/radar.jsp">View weather radar</a>
            </div>
        </div>
    </body>
    <footer><?php include 'footer.php';?></footer>
</html>