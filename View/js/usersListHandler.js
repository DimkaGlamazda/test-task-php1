$(function () {
    /*
     *
     * autoload users and their posts
     *
     * */
    $.ajax({
        url: "../route.php",
        method: 'get',
        data:{ loadUserList: 1 },
        success: function (data) {
            var json = jQuery.parseJSON(data);
            for(var i = 0; i < json.length; i++){
                $("#list").append('<h4> User name: ' +json[i][0] + '</h4><h5>User posts:</h5>');
                var arTemp = json[i];
                for(var j = 1; j < arTemp.length; j++ ){
                    $("#list").append('<p>' + arTemp[j] + '</p>');
                }

            }
        }
    });
});
