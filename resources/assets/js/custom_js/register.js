"use strict";

$(document).ready(function () {

    //=================Preloader===========//
    $(window).on('load', function () {
        $('.preloader img').fadeOut();
        $('.preloader').fadeOut();
    });
    //=================end of Preloader===========//
    //Flat red color scheme for iCheck
    $('input[type="checkbox"], input[type="radio"]').iCheck({
        checkboxClass: 'icheckbox_minimal-blue',
        radioClass: 'iradio_minimal-blue',
        increaseArea: '20%'
    });
    $("#dee1").on('click', function() {
        $('input').iCheck('uncheck');
        $('select').trigger('change');
    });

    $('#register_form').bootstrapValidator({
        fields: {
            forename: {
                validators: {
                    notEmpty: {
                        message: 'The forename is required<br />'
                    }
                }
            },
            surname: {
                validators: {
                    notEmpty: {
                        message: 'The surname is required<br />'
                    }
                }
            },
            password: {
                validators: {
                    notEmpty: {
                        message: 'Please provide a password<br />'
                    },
                    stringLength: {
                        min: 6,
                        message: 'The password must be least 6 characters<br />'
                    },
                }
            },
            password_confirmation: {
                validators: {
                    notEmpty: {
                        message: 'The confirm password is required<br />'
                    },
                    stringLength: {
                        min: 6,
                        message: 'The password must be least 6 characters<br />'
                    },
                    identical: {
                        field: 'password',
                        message: 'Please enter the same password<br />'
                    }
                }
            },
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
            email_confirmation: {
                validators: {
                    notEmpty: {
                        message: 'The confirm email is required<br />'
                    },
                    regexp: {
                        regexp: /^\S+@\S{1,}\.\S{1,}$/,
                        message: 'The input is not a valid email address<br />'
                    },
                    identical: {
                        field: 'email',
                        message: 'Please enter the same email<br />'
                    }
                }
            },
            terms: {
                validators: {
                    notEmpty: {
                        message: 'The terms and conditions must be accepted<br />'
                    }
                }
            }
        }
    });


    /*
     Background slideshow
     */
    $('.bg-slider').backstretch([
        "/assets/img/pages/bg-1.jpg", "/assets/img/pages/bg-2.jpg", "/assets/img/pages/bg-3.jpg"
    ], { duration: 5000, fade: 1050 });

    $("#terms").on("ifChanged", function () {
        $('#register_form').bootstrapValidator('revalidateField', $('#terms'));
    });
    $("[type='reset']").on("click", function () {
        $('#register_form').bootstrapValidator("resetForm");
    });

});