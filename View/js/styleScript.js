/*
 * nav-bar toggle
 *
 * */
$(function () {
    $(".drop-down-btn").on("click", function(){
        $(".nav-list").toggle("slow");
    });
});