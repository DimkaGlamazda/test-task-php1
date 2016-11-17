$(function () {
    /*
     *
     * add user
     *
     * */
    $("input[name=CreateUser]").on("click", function (e) {
        e.preventDefault();

        var name = $("input[name=userName]").val();
        var email = $("input[name=email]").val();
        var age = $("input[name=age]").val();

        if (checkEmpty(name) && checkEmpty(email) && checkEmpty(age)){
            if(!checkEmail(email)){
                alert("Email isn't valid!");
                return;
            }
            if(!checkNumber(age)){
                alert("Age isn't valid!");
                return;
            }
            $.ajax({
                url: "../route.php",
                method: 'post',
                data:{
                    saveUser: 1,
                    name : name,
                    email : email,
                    age : age
                },
                success: function (data) {
                    $("input[name=userName]").val(" ");
                    $("input[name=email]").val(" ");
                    $("input[name=age]").val(" ");
                    alert(data);
                }
            });
        }else{
            alert("Value is empty!");
            return;
        }
    });


});
