function trains(){
$.post( "trains.php", { to: "LIV", from: "WKI" })
  .done(function( data ) {
    obj = JSON.parse(data);
  


var i = 0;
var len = obj.length;
var text2 = "";

op = 1;
j = 1;
highestval = 10;
highestvalop = highestval+1;




for (; i < len; ) {
op = op - (j/highestvalop);

    text2 += "<div style='opacity:" + op.toFixed(1) + "'><img src='./images/whitetrain.png' id='train-icon'>&nbsp;" + obj[i][1] + "&nbsp;" + obj[i][3] + "</div>";
    i++;
}
document.getElementById("trains").innerHTML = "Trains to " + obj[0][2] + "<Br>" + text2;
});
}
setTimeout(trains(), 3600);