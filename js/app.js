 $(function(){   
    $("body").on("click", '#open' ,function(){
        document.getElementById("myNav").style.height = "100%"
    });
    $("body").on("click", '.closebtn' ,function(){
        document.getElementById("myNav").style.height = "0%"
    });
    $("ul#primary").append('<li><a  id ="open" href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>');
    $("#s").attr("placeholder", "Buscar");
    $("#searchform label").addClass('hide');
    $("#searchsubmit").addClass('hide');
    $("#searchform div").append('<button type="submit" ><span class="fa fa-search"></span></button>');

});
