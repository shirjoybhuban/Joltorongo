$(document).ready(function() {
    $("#browse").click(function() 
    {
        $("#content").fadeOut('slow',function()
        {
            $("#content").load("/browse").fadeIn(slow);

        });
        console.log(this.index);
    });
});
$(document).ready(function() {
    $("#album").click(function() 
    {
        $("#content").fadeOut('slow',function()
        {
            $("#content").load("/album").fadeIn('slow');

        });
        console.log(this.index);
    });
});
$(document).ready(function() {
    $("#artist").click(function() 
    {
        $("#content").fadeOut('slow',function()
        {
            $("#content").load("/artist").fadeIn('slow');

        });
        console.log(this.index);
    });
});
$(document).ready(function() {
    $("#playlist").click(function() 
    {
        $("#content").fadeOut('slow',function()
        {
            $("#content").load("/playlist").fadeIn('slow');

        });
        console.log(this.index);
    });
});
$(document).ready(function() {
    $("#search").click(function() 
    {
        $("#content").fadeOut('slow',function()
        {
            $("#content").load("/search").fadeIn('slow');
        });
        console.log(this.index);
    });
});