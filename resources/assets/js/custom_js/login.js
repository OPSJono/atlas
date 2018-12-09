"use strict";

$(document).ready(function() {

    //=================Preloader===========//
    $(window).on('load', function () {
        $('.preloader img').fadeOut();
        $('.preloader').fadeOut();
    });
    //=================end of Preloader===========//
    
    /*Background slideshow */

    $('.bg-slider').backstretch([
        "/assets/img/pages/lbg-1.jpg", "/assets/img/pages/lbg-2.jpg", "/assets/img/pages/lbg-3.jpg"
    ], {
        duration: 5000,
        fade: 1050
    });

    $('input').iCheck({
        checkboxClass: 'icheckbox_minimal-blue',
        radioClass: 'iradio_minimal-blue',
        increaseArea: '20%' // optional
    });
    $("#authentication").bootstrapValidator({
        fields: {

            email: {
                validators: {
                    notEmpty: {
                        message: 'The email address is required<br />'
                    },
                    regexp: {
                        regexp: /^\S+@\S{1,}\.\S{1,}$/,
                        message: 'The input is not a valid email address<br />'
                    }
                }
            },
            password: {
                validators: {
                    notEmpty: {
                        message: 'Password is required'
                    }

                }
            }

        }
    });
    
});
