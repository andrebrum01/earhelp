var progress= $("#sons").children().length;
for(var i=0;i<progress;i++){
$("#caixaProgress").append("<span></span>");
}
$('.select').click(function() {
    var index = $(".select").index();
    $("#caixaProgress").children().eq(index).removeClass('select');
    index++;
    if(index==progress) index=0;
    $("#caixaProgress").children().eq(index).addClass('select');
});