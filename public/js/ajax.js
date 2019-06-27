history.pushState(null, null, "/home");
// $(window).bind("beforeunload", function () {
//     link = location.pathname.replace(/^.*[\\/]/, "");
//     return "are you sure you want to leave?";
// });
// Page refresh
// var a,b;
// window.onbeforeunload = function (e) {
//     if (b) return;
//     a = setTimeout(function () {
//         b = true;
//         window.location.href = "home";
//     }, 500);
//     return "We dont do that here-BP";
// }
// window.onunload = function () {
//     clearTimeout(a);
// }


$(document).ready(function () {
    $("#album").click(function () {
        history.pushState(null, null, "/album");

        $("#dynamic").load($("#album").attr("href"));
        return false;
    });
});
$(document).ready(function () {
    $(".sidebar-header").click(function () {
        history.pushState(null, null, "/home");
        $("#dynamic").load("/home #content .middle section");
    });
});
$(document).ready(function () {
    $("#artist").click(function () {
        history.pushState(null, null, "/artist");

        $("#dynamic").load($("#artist").attr("href"));
        return false;
    });
});
$(document).ready(function () {
    $("#playlist").click(function () {
        history.pushState(null, null, "/playlist");

        $("#dynamic").load($("#playlist").attr("href"))
        return false;
    });
});
$(document).ready(function () {
    $("#music_news").click(function () {
        history.pushState(null, null, "/music_news");

        $("#dynamic").load($("#music_news").attr("href"))
        return false;
    });
});
$(document).ready(function () {
    $("#searchsong").on("click", function () {
        history.pushState(null, null, "/searchsong");

        $("#dynamic").load($("#searchsong").attr("href"))
        return false;
    });
});

$(document).ready(function () {
    $("#searchalbum").on("click", function () {
        history.pushState(null, null, "/searchalbum");

        $("#dynamic").load($("#searchalbum").attr("href"))
        return false;
    });
});

$(document).ready(function () {
    $("#searchartist").on("click", function () {
        history.pushState(null, null, "/searchartist");

        $("#dynamic").load($("#searchartist").attr("href"))
        return false;
    });
});

$(document).on("click", "#artistPage li", function () {
    history.pushState(null, null, "/" + this.id);
    $("#dynamic").load("/" + this.id);
});
$(document).on("click", "#content td", function () {
    history.pushState(null, null, "/" + this.id);
    $("#dynamic").load("/" + this.id);
});

$(document).on("click", "#albumPage li", function () {
    history.pushState(null, null, "/" + this.id);
    $("#dynamic").load("/" + this.id);
});
// open new albums

$(document).on("click", "#new1 ", function (event) {

    href = $(this).attr('href')
    event.preventDefault();

    history.pushState(null, null, "/" + this.id);
    $("#dynamic").load(href.valueOf());
});

$(document).on("click", "#new2 ", function (event) {

    href = $(this).attr('href')
    event.preventDefault();

    history.pushState(null, null, "/" + this.id);
    $("#dynamic").load(href.valueOf());
});

$(document).on("click", "#new3 ", function (event) {

    href = $(this).attr('href')
    event.preventDefault();

    history.pushState(null, null, "/" + this.id);
    $("#dynamic").load(href.valueOf());
});

$(document).on("click", "#new4 ", function (event) {

    href = $(this).attr('href')
    event.preventDefault();

    history.pushState(null, null, "/" + this.id);
    $("#dynamic").load(href.valueOf());
});

$(document).on("click", "#new5 ", function (event) {

    href = $(this).attr('href')
    event.preventDefault();

    history.pushState(null, null, "/" + this.id);
    $("#dynamic").load(href.valueOf());
});

$(document).on("click", "#new6 ", function (event) {

    href = $(this).attr('href')
    event.preventDefault();

    history.pushState(null, null, "/" + this.id);
    $("#dynamic").load(href.valueOf());
});

//finishing loading new albums

//loading new artist
$(document).on("click", "#newar1 ", function (event) {

    href = $(this).attr('href')
    event.preventDefault();

    history.pushState(null, null, "/" + this.id);
    $("#dynamic").load(href.valueOf());
});

$(document).on("click", "#newar2 ", function (event) {

    href = $(this).attr('href')
    event.preventDefault();

    history.pushState(null, null, "/" + this.id);
    $("#dynamic").load(href.valueOf());
});

$(document).on("click", "#newar3 ", function (event) {

    href = $(this).attr('href')
    event.preventDefault();

    history.pushState(null, null, "/" + this.id);
    $("#dynamic").load(href.valueOf());
});

$(document).on("click", "#newar4 ", function (event) {

    href = $(this).attr('href')
    event.preventDefault();

    history.pushState(null, null, "/" + this.id);
    $("#dynamic").load(href.valueOf());
});

$(document).on("click", "#newar5", function (event) {
    
	console.log("Logged Output: click", click)
    
    href = $(this).attr('href')
    event.preventDefault();

    history.pushState(null, null, "/" + this.id);
    $("#dynamic").load(href.valueOf());
});

$(document).on("click", "#newar6", function (event) {

    href = $(this).attr('href')
    event.preventDefault();

    history.pushState(null, null, "/" + this.id);
    $("#dynamic").load(href.valueOf());
});
//finish new artist

$(window).bind("popstate", function () {
    link = location.pathname.replace(/^.*[\\/]/, "");

    if (link.valueOf() == "home")
        $("#dynamic").load("/home #content .middle section");
    else {
        $("#dynamic").load(link);
    }
});