function submit() {
    $("#deleteRoute").click(function(e) {

      // Set all variables
      var id = $('#hiddenTouristID').val();
      var routeName = $('#hiddenRouteName').val();

      if(id && routeName != null){
        deleteRoutes(id, routeName);
      }else{
        alert('broken');
      }

      function deleteRoutes(id, routeName){
        $.ajax({
                url: '../php/Controller/deleteRoute.php' + '?' + $.param({"touristID": id, "routeName" : routeName}),
                type: 'DELETE',
                success: function() {
                    console.log('Delete Successful! :-)');
                },
                error: function (){
                    console.log('Delete did not work... :-(');
                }
            });            
      }
  });
}

$(document).ready(function() {
    submit();
});