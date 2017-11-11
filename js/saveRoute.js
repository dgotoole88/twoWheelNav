// Save routes - jQuery / AJAX
function submit() {
  $("#saveRoutes").click(function(e) {

      // Set all variables
      var startPoint = $('#startPoint').val();
      var endPoint = $('#endPoint').val();
      var routeName = $('#routeName').val();

      if (startPoint && endPoint != "") {
          checkRoute(startPoint, endPoint, routeName);
      } else {
          alert('broken');
      }

      function checkRoute(startPoint, endPoint, routeName) {
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
                  if (data.status == 'Success') {
                      console.log("Route saved");
                      bootbox.alert({
                          message: "Success! route saved.",
                          size: 'small'
                      });
                  }
                  if (data.status == 'Error') {
                      console.log("Route did not save");
                      bootbox.alert({
                          message: "Route did not save ;-(",
                          size: 'small'
                      });
                  }
              },
              error: function() {
                  if (data.status == 'Error') {
                      console.log("Save was unsuccessful");
                      bootbox.alert({
                          message: "Route did not save ;-(",
                          size: 'small'
                      });
                  }
              },
          });
      }
  });
}

$(document).ready(function() {
  submit();
});