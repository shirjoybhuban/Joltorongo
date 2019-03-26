
var executed = true;
var myPlaylist;
$(document).ready(function() {
    executed = false;

    if (!executed) 
    var arr = [];
    var len = sites.length; // sites has the  the list of songs I should change the name but I am lazy AF
    for (var i = 0; i < len; i++) {
        arr.push({
            title: sites[i].title,
            mp3: sites[i].path,
            oga: sites[i].path
        });
    }
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

$(document).on("click", "#clicker li", function() {  // Here both the list of songs in artist and album blades have id clicker
    executed = true;
    path = this.id
    num = 0
    for(count = 0; count < myPlaylist.playlist.length; count++)
    {
        if(myPlaylist.playlist[count].mp3 == path)
        {
            num = count
        }
    }
    myPlaylist.play(num)
});
