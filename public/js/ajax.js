
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

$(document).ready(function() {
    // console.log('ready');
    $(document).on('click', ".list-group-item list-group-item-action list_colum_item", function()
    {
        var page_link = $(this).attr("href");
        console.log(page_link);
        $('#dynamic').fadeOut('slow', function()
        {
            $('#dynamic').load(page_link, function()
            {
                $('#dynamic').fadeIn('slow');
            });
        });
    })});
