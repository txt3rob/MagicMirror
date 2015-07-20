$.post( "trains.php", { to: "LIV", from: "WKI" })
  .done(function( data ) {
    obj = JSON.parse(data);
  


var i = 0;
var len = obj.length;
var text2 = "";

for (; i < len; ) {
    text2 += "<img src='./images/whitetrain.png' id='train-icon'>&nbsp;" + obj[i][1] + "&nbsp;" + obj[i][3] + "<br>";
    i++;
}
document.getElementById("trains").innerHTML = "Trains to " + obj[0][2] + "<Br>" + text2;
});