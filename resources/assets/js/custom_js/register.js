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
                        message: 'The forename is required'
                    }
                }
            },
            surname: {
                validators: {
                    notEmpty: {
                        message: 'The surname is required'
                    }
                }
            },
            password: {
                validators: {

                    notEmpty: {
                        message: 'Please provide a password'
                    }
                }
            },
            password_confirm: {
                validators: {
                    notEmpty: {
                        message: 'The confirm password is required'
                    },
                    identical: {
                        field: 'password',
                        message: 'Please enter the same password'
                    }
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: 'The email address is required'
                    },
                    regexp: {
                        regexp: /^\S+@\S{1,}\.\S{1,}$/,
                        message: 'The input is not a valid email address'
                    }
                }
            },
            email_confirm: {
                validators: {
                    notEmpty: {
                        message: 'The confirm email is required'
                    },
                    regexp: {
                        regexp: /^\S+@\S{1,}\.\S{1,}$/,
                        message: 'The input is not a valid email address<br />'
                    },
                    identical: {
                        field: 'email',
                        message: 'Please enter the same email'
                    }
                }
            },
            terms: {
                validators: {
                    notEmpty: {
                        message: 'The terms and conditions must be accepted'
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
    ], { duration: 5000, fade: 850 });

    $("#terms").on("ifChanged", function () {
        $('#register_form').bootstrapValidator('revalidateField', $('#terms'));
    });
    $("[type='reset']").on("click", function () {
        $('#register_form').bootstrapValidator("resetForm");
    });

});