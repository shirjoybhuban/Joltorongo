
$(document).ready(function() {
    $("#browse").click(function() 
    {
        console.log("Clicked");
        $("#dynamic").fadeOut('slow',function()
        {
            $("#dynamic").load("/browse").fadeIn(slow);

        });
    });
});
$(document).ready(function() {
    $("#album").click(function() 
    {
        $("#dynamic").fadeOut('slow',function()
        {
            $("#dynamic").load("/album").fadeIn('slow');

        });
    });
});
$(document).ready(function() {
    $("#artist").click(function() 
    {
        $("#dynamic").fadeOut('slow',function()
        {
            $("#dynamic").load("/artist").fadeIn('slow');

        });
    });
});
$(document).ready(function() {
    $("#playlist").click(function() 
    {
        $("#dynamic").fadeOut('slow',function()
        {
            $("#dynamic").load("/playlist").fadeIn('slow');

        });
    });
});
$(document).ready(function() {
    $("#search").off('click').on('click',(function() 
    {
        $("#dynamic").fadeOut('slow',function()
        {
            $("#dynamic").load("/search").fadeIn('slow');
        });
        console.log('Button click');
        
    }));
});


    
$(document).on('click', "#artistPage li", function () {
    $("#dynamic").load("/" +this.id)
    console.log("/" +this.id)
});

$(document).on('click', "#albumPage li", function () {
    $("#dynamic").load("/" +this.id)
    console.log("/" +this.id)
});
