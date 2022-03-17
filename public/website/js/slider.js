$(document).ready(function(){
    var slider = 0;
    $('.sliderbutton li:first').css('background','#606060');
      $('#slider li').hide();
      $('#slider li:eq('+slider+')').fadeIn("fast");
    $.slider = function(toplam){
        $('#slider li').hide();
        if(slider < toplam-1)
        {
            slider++;
            $('.sliderbutton li').css('background','#cccccc');
            $('.sliderbutton li:eq('+slider+')').css('background','#606060');
            $('#slider li:eq('+slider+')').fadeIn("fast");

        }else if(slider < 0){

            slider = toplam-1;
            $('.sliderbutton li').css('background','#cccccc');
            $('.sliderbutton li:eq('+slider+')').css('background','#606060');
            $('#slider li:eq('+slider+')').fadeIn("fast");
        }else{

            $('#slider li:first').fadeIn("fast");
            slider=0;
            $('.sliderbutton li').css('background','#cccccc');
            $('.sliderbutton li:eq('+slider+')').css('background','#606060');
        }
    }
    var lenghtli = $('#slider li').length;
    var interval = setInterval('$.slider('+lenghtli+')',3000);
    $('#slider').hover(function(){
        interval = clearInterval(interval);
    },function(){
        interval = setInterval('$.slider('+lenghtli+')',3000);
    })
    $('.sliderbutton li').click(function(){
        $('.sliderbutton li').css('background','#cccccc');
        $(this).css('background','#606060');
        interval = clearInterval(interval);
       var indis = $(this).index();
        $('#slider li').hide();
        $('#slider li:eq('+indis+')').fadeIn("fast");
        slider = indis;
        interval = setInterval('$.slider('+lenghtli+')',3000);

    });
    $('.sliderleft').click(function () {

        slider--;
        $('.sliderbutton li').css('background','#cccccc');
        if(slider < 0)
        {
            $('.sliderbutton li:last').css('background','#606060');
            slider = lenghtli-1;
        }else{
            $('.sliderbutton li:eq('+slider+')').css('background','#606060');
        }

        $('#slider li').hide();
        $('#slider li:eq('+slider+')').fadeIn("fast");


    });
    $('.sliderright').click(function () {

        slider++;
        $('.sliderbutton li').css('background','#cccccc');
        if(slider > lenghtli-1)
        {
            $('.sliderbutton li:first').css('background','#606060');
            slider = 0;
        }else{
            $('.sliderbutton li:eq('+slider+')').css('background','#606060');
        }

        $('#slider li').hide();
        $('#slider li:eq('+slider+')').fadeIn("fast");


    });

});
