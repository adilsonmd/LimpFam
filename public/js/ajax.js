$(document).ready(function(){
    console.log("ajax ready?");
    $.ajax({
        url: "/api/latestmonth",
        type: "GET",
        success: function(dat){
            console.log(dat);
        }
    });
});