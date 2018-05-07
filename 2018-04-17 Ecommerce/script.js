function columnSpan(width) {
    if (width.matches) {
        for (var i = 0; i < entry.length; i++) {
  		  entry[0].colSpan = "0";
  		  entry[1].colSpan = "0";
  		  entry[2].colSpan = "0";
  		}
    } else {
        for (var i = 0; i < entry.length; i++) {
  		  entry[0].colSpan = "2";
  		  entry[1].colSpan = "2";
  		  entry[2].colSpan = "2";
  		}
    }
}

var width = window.matchMedia("(max-width: 600px)")
var entry = document.getElementsByClassName("math");

columnSpan(width)
width.addListener(columnSpan)