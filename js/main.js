function main_class(){
    this.elements =  {top_menu:$(".top-menu"),marker:$("#marker")};

    this.setFigurePos = function(){
        $(".figure3").css({left:this.elements.top_menu.position().left - 50});
        $(".figure3,.figure4").css({top:$(".color2").position().top - 15});

        $(".figure4").css({left:this.elements.top_menu.position().left + this.elements.top_menu.width() - $(".figure4").width()});
    };
}


$(function(){
    var main = new main_class();

    var focuc_el_with;

    $(".nav-icons li").mouseover(function(){

        var lpos = $(this).offset().left + 25;
        main.elements.marker.offset({left:lpos});

    });


    main.setFigurePos();

    $(window).resize(function(){
        main.setFigurePos();
    });

});




