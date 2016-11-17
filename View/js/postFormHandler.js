$(function () {
    /*
    *
    * autoload user select
    *
    * */
    $.ajax({
        url: "../route.php",
        method: 'get',
        data:{ loadUserSelect: 1 },
        success: function (data) {
            var json = jQuery.parseJSON(data);
            $.each(json, function(i, val){
                $('select[name=userList]').append('<option value="' + val["id"] + '">' + val["name"] + '</option>');
            });
        }
    });


    /*
     *
     * add post
     *
     * */
    $("input[name=createPost]").on("click", function (e) {

        e.preventDefault();

        var title = $("input[name=title]").val();
        var content = $("textarea[name=content]").val();
        var userId = $("select[name=userList]").val();

        if(checkEmpty(title) && checkEmpty(content)){
            $.ajax({
                url: "../route.php",
                method: 'post',
                data:{ savePost: 1,
                    title: title,
                    content: content,
                    userId: userId
                },
                success: function (data) {
                     $("input[name=title]").val(" ");
                     $("textarea[name=content]").val(" ");
                     $("select[name=userList]").val(" ");
                    alert(data);
                }
            });
        }else{
            alert("Value is empty!");
            return;
        }

    });
});
