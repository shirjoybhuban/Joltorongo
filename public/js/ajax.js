history.pushState(null, null, "/home");
$(document).ready(function() {
    $("#browse").click(function() {
        history.pushState(null, null, "/browse");
        $("#dynamic").load("/browse");
    });
});
$(document).ready(function() {
    $("#album").click(function() {
        history.pushState(null, null, "/album");

        $("#dynamic").load("/album");
    });
});
$(document).ready(function() {
    $(".sidebar-header").click(function() {
        history.pushState(null, null, "/home");
        $("#dynamic").load("/home #content .middle section");
    });
});
$(document).ready(function() {
    $("#artist").click(function() {
        history.pushState(null, null, "/artist");

        $("#dynamic").load("/artist");
    });
});
$(document).ready(function() {
    $("#playlist").click(function() {
        history.pushState(null, null, "/playlist");

        $("#dynamic").load("/playlist");
    });
});
$(document).ready(function() {
    $("#search").on("click", function() {
        history.pushState(null, null, "/index");

        $("#dynamic").load("/index");
    });
});

$(document).on("click", "#artistPage li", function() {
    history.pushState(null, null, "/" + this.id);
    $("#dynamic").load("/" + this.id);
});
$(document).on("click", "#content td", function() {
    history.pushState(null, null, "/" + this.id);
    $("#dynamic").load("/" + this.id);
});

$(document).on("click", "#albumPage li", function() {
    history.pushState(null, null, "/" + this.id);
    $("#dynamic").load("/" + this.id);
});

$(window).bind("popstate", function() {
    link = location.pathname.replace(/^.*[\\/]/, "");

    if (link.valueOf() == "home")
        $("#dynamic").load("/home #content .middle section");
    else {
        $("#dynamic").load(link);
    }
});
