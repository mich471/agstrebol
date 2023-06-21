define([
        "jquery"
    ],
    function($) {
        "use strict";
            $(".title_a").click(function() {
                $(".a").toggle()
                if($('.a').css('display') === 'none'){
                    $('.title_a').removeClass('up');
                }else{
                    $('.title_a').addClass('up');
                }
            });
            $(".title_b").click(function() {
                $(".b").toggle()
                if($('.b').css('display') === 'none'){
                    $('.title_b').removeClass('up');
                }else{
                    $('.title_b').addClass('up');
                }
            });
            $(".title_c").click(function() {
                $(".c").toggle()
                if($('.c').css('display') === 'none'){
                    $('.title_c').removeClass('up');
                }else{
                    $('.title_c').addClass('up');
                }
            });
        if (window.matchMedia('(min-width: 1023px)').matches){
            $('.a , .b , .c').removeClass('a');

        }
    });
