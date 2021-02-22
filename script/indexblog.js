$(document).ready(function(){
    $("#tout").addClass("active");
    
    $("#permaculture").click(function()
        {
            $(".tout").hide();
            $(".permaculture").show();
            $("#tout,#bienetre,#antigaspi").removeClass("active")
            $("#permaculture").addClass("active");
        });
    
        $("#bienetre").click(function()
        {
            $(".tout").hide();
            $(".bienetre").show();
            $("#tout,#permaculture,#antigaspi").removeClass("active")
            $("#bienetre").addClass("active");
        });
    
        $("#antigaspi").click(function()
        {
            $(".tout").hide();
            $(".antigaspi").show();
            $("#tout,#permaculture,#bienetre").removeClass("active")
            $("#antigaspi").addClass("active");
        });
    
        $("#tout").click(function()
        {
            $(".tout").show();
            $("#antigaspi,#permaculture,#bienetre").removeClass("active")
            $("#tout").addClass("active");
        });
    
    })