function main_class(){
    this.elements =  {marker:$("#marker")};
}


$(function(){
    var main = new main_class();

    var focuc_el_with;
    $("li").mouseover(function(){

        var lpos = $(this).offset().left + 25;
        main.elements.marker.offset({left:lpos});

    });

});




