<?php    
    include "../Model/connectDB.php";

    if(!isset($_SESSION)){
        session_start();
    }

    $id = $_SESSION['touristID'];

    $sqlRouteStart = "SELECT startPoint FROM savedroute WHERE touristID = '$id'";
    $sqlRouteStartResult = $pdo->query($sqlRouteStart);
    $showRouteStart = $sqlRouteStartResult->fetchAll(PDO::FETCH_COLUMN, 0);   
                    
    $sqlRouteEnd = "SELECT endPoint FROM savedroute WHERE touristID = '$id'";
    $sqlRouteEndResult = $pdo->query($sqlRouteEnd);
    $showRouteEnd = $sqlRouteEndResult->fetchAll(PDO::FETCH_COLUMN, 0);

    $response = array(); // Array to json encode

    if ($showRouteStart && $showRouteEnd == null){   

    }else{
        // our query returned at least one result. loop over results and do stuff.
        for($i = 0; $i<count($showRouteStart); $i++){

            $routeNumber = $i + 1;

            $sqlRouteName = "SELECT routeName FROM savedroute WHERE touristID = '$id' AND startPoint = '$showRouteStart[$i]' AND endPoint = '$showRouteEnd[$i]'";
            $sqlRouteNameResult = $pdo->query($sqlRouteName);
            $showRouteName = $sqlRouteNameResult->fetchColumn();

            echo '<input id="hiddenStart" type="hidden" value=' . $showRouteStart[$i] . '></input>';
            echo '<input id="hiddenEnd" type="hidden" value=' . $showRouteEnd[$i] . '></input>';

            echo '<input name="hiddenTouristID" type="hidden" value=' . $id . '></input>';
            echo '<div id="routeBlocks">';
            echo '<span>Route </span>' . $routeNumber . '<span>: <span>' . $showRouteName . '</span>';
            echo '<div>';
            echo '<label class="loopLabel">Start Point:</label>';
            echo '<div>' . $showRouteStart[$i] . '</div>';
            echo '<label class="loopLabel">End Point:</label>';
            echo '<div>' . $showRouteEnd[$i] . '</div>';
            echo '</div>';
            echo '<form action="" method="post"><div id="bufferButt"><button class="btn btn-primary btn-block btn-large" value="Open Route" type="submit">Open Route</button>
                  <button class="btn btn-primary btn-block btn-large" value='. $showRouteName .' type="submit" name="deleteRoute">Delete</button></div></form>';
            echo '</div>';
        }
    }
?>