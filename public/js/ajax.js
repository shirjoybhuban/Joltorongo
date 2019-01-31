$(document).ready(function() {
    $("#browse").click(function() {
        $("#content").load("/browse");
        console.log(this.index);
    });
});
$(document).ready(function() {
    $("#album").click(function() {
        $("#content").load("/album");
        console.log(this.index);
    });
});
$(document).ready(function() {
    $("#artist").click(function() {
        $("#content").load("/artist");
        console.log(this.index);
    });
});
$(document).ready(function() {
    $("#playlist").click(function() {
        $("#content").load("/playlist");
        console.log(this.index);
    });
});
$(document).ready(function() {
    $("#search").click(function() {
        $("#content").load("/search");
        console.log(this.index);
    });
});