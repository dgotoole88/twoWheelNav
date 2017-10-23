// Save routes - jQuery / AJAX

function submit() {
    $("#saveRoutes").click(function(e) {

      // Set all variables
      var startPoint = $('#startPoint').val();
      var endPoint = $('#endPoint').val();
      var routeName = $('#routeName').val();

      if(startPoint && endPoint != ""){
        checkRoute(startPoint, endPoint, routeName);
      }else{
        alert('broken');
      }

      function checkRoute(startPoint, endPoint, routeName){
        $.ajax({
          type: 'POST',
          datatype: 'json',
          url: '../Controller/saveRoute.php',
          data: {
            startPoint: startPoint,
            endPoint: endPoint,
            routeName: routeName
          },
          success: function(data) {
            if(data.status == 'Success'){
              console.log("Route saved");
              document.getElementById("saveMessage").innerHTML="Route Saved";
            }
            if(data.status == 'Error'){
                console.log("Route did not save");
            }
          },
          error: function() {
            if(data.status == 'Error'){
                console.log("Save was unsuccessful");
            }
          },
      });
      }
  });
}

$(document).ready(function() {
    submit();
});