$(document).ready(function() {
    $("#browse").click(function() 
    {
        console.log("Clicked");
        $("#dynamic").fadeOut('slow',function()
        {
            $("#dynamic").load("/browse").fadeIn(slow);

        });
        console.log(this.index);
    });
});
$(document).ready(function() {
    $("#album").click(function() 
    {
        $("#dynamic").fadeOut('slow',function()
        {
            $("#dynamic").load("/album").fadeIn('slow');

        });
        console.log(this.index);
    });
});
$(document).ready(function() {
    $("#artist").click(function() 
    {
        $("#dynamic").fadeOut('slow',function()
        {
            $("#dynamic").load("/artist").fadeIn('slow');

        });
        console.log(this.index);
    });
});
$(document).ready(function() {
    $("#playlist").click(function() 
    {
        $("#dynamic").fadeOut('slow',function()
        {
            $("#dynamic").load("/playlist").fadeIn('slow');

        });
        console.log(this.index);
    });
});
$(document).ready(function() {
    $("#search").click(function() 
    {
        $("#dynamic").fadeOut('slow',function()
        {
            $("#dynamic").load("/search").fadeIn('slow');
        });
        console.log(this.index);
    });
});