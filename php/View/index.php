<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <script src="../../js/index.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBJMUqwdQmDhef158yXVrjvOJF3XcMUrEA&libraries=places&callback=initAutocomplete" async defer></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php
            include 'header.php';
        ?>
        <title>Two Wheel Nav</title>
    </head>
    <body id="bodyStyles">
        <div id="searchHeadings">
            <h1 class="searchHeadings">Welcome to Two Wheel Nav's route planner!</h1><br>
            <h3 class="searchHeadings">Start by searching for a location</h3>
        </div>
        <div id="alignSearch">
            <div id="searchInput">
                <input id="pac-input" class="inputLog" type="text" placeholder="Search Box">
            </div>
        </div>
        <div id="searchBody">
            <div id="mapContainer">
                <div id="map"></div>
            </div>
            <div>
                <fieldset>
                    <form id="form" method="post">
                    <h4>Save a marker</h4>
                        <div>
                            <label>Marker name</label>
                        </div>
                        <div>
                            <input id="markerName" class="inputLog" type="text" name="username" pattern="[A-Za-z]{2,32}" required>
                            <div class="formHint">Enter a name for your marker</div>
                        </div>
                        <div>
                            <label>Address</label>
                        </div>
                        <div>
                            <input id="markerAddress" class="inputLog" type="text" name="username" required>
                            <div class="formHint">Enter address</div>
                        </div>
                        <div>
                            <label>Type</label>
                        </div>
                        <div>
                            <select id="type">
                                <option value="bar">Bar</option>
                                <option value="restaurant">restaurant</option>
                            </select>
                        </div>
                        <div>
                            <button name="submitMarker" onclick="saveData()" type="button" value="Save" class="btn btn-primary btn-block btn-large">Save</button>
                        </div>
                    </form>
                </fieldset>
            </div>
        </div>
    </body>
    <footer><?php include 'footer.php';?></footer>
</html>