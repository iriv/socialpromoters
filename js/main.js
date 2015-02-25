function main_class(){
    this.elements =  {marker:$("#marker")};
}




$(function(){

    var main = new main_class();


    $("li").mouseover(function(){
        var lpos = $(this).position().left + 50;
        main.elements.marker.offset({left:lpos});
    });

});




