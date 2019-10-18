var progress= $("#sons").children().length;
for(var i=0;i<progress;i++){
$("#caixaProgress").append("<span></span>");
}
$("#caixaProgress span").first().addClass('select');

var list = $("#sons").children();