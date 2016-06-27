 $(function(){   
    $("body").on("click", '#open' ,function(){
        document.getElementById("myNav").style.height = "100%"
    });
    $("body").on("click", '.closebtn' ,function(){
        document.getElementById("myNav").style.height = "0%"
    });
});
