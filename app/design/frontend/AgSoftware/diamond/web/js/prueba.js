define([
        "jquery"
    ],
    function($) {
        "use strict";
        $(".title_a").click(function() {
            $(".a").toggle()
        });
        $(".title_b").click(function() {
            $(".b").toggle()
        });
        $(".title_c").click(function() {
            $(".c").toggle()
        });
    });
