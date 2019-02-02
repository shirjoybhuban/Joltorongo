
//<![CDATA[
$(document).ready(function(){
  console.log(sites.length)
  var arr = [];
  var len = sites.length;
  for (var i = 0; i < len; i++) {
    arr.push({
        title: sites[i].title,
        mp3: sites[i].path,
        oga: sites[i].path

    });
}
  new jPlayerPlaylist({
    jPlayer: "#jquery_jplayer_1",
    cssSelectorAncestor: "#jp_container_1"
  },
 arr, {
    swfPath: "js/music-player/swf",
    supplied: "oga, mp3",
    wmode: "window",
    useStateClassSkin: true,
    autoBlur: false,
    smoothPlayBar: true,
    keyEnabled: true
  });
});
//]]>
