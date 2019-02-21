
var executed = true;
var myPlaylist;
$(document).ready(function() {
    executed = false;

    if (!executed) var arr = [];
    var len = sites.length;
    for (var i = 0; i < len; i++) {
        arr.push({
            title: sites[i].title,
            mp3: sites[i].path,
            oga: sites[i].path
        });
    }
    // console.log(sites[0]);
    myPlaylist = new jPlayerPlaylist(
        {
            jPlayer: "#jquery_jplayer_1",
            cssSelectorAncestor: "#jp_container_1"
        },
        arr,
        {
            swfPath: "js/music-player/swf",
            supplied: "oga, mp3",
            wmode: "window",
            useStateClassSkin: true,
            autoBlur: false,
            smoothPlayBar: true,
            keyEnabled: true
        }
    );
});

$("#clicker").on("click", "li", function() {
    executed = true;
    // a = sites[0].title;
    // b = sites[0].path;
    // sites[0].title = sites[this.id].title;
    // sites[0].path = sites[this.id].path;
    // sites[this.id].title = a;
    // sites[this.path] = b;

    // console.log(sites[0]);

    myPlaylist.play(this.id);
});
