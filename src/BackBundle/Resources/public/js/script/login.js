$(document).ready(function () {    console.log("ready!");    $('#btn-connexion').click(function (e) {        $("#error-connexion").addClass("hide");        if (!$.trim($(".password").val()) || !$.trim($(".login").val())) {            $('.message-error').html('Veuillez remplir tous les champs.');            if (!$.trim($(".login").val())) {                if (!$('#field-login').hasClass('has-error')) {                    $('#field-login').addClass('has-error');                }                $("#field-login .form-control-feedback").addClass('glyphicon-warning-sign');            }            if (!$.trim($(".password").val())) {                console.log("password vide");                if (!$('#field-password').hasClass('has-error')) {                    $('#field-password').addClass('has-error');                }                $("#field-password .form-control-feedback").addClass('glyphicon-warning-sign');            }            if ($("#field-message-error").hasClass("hide")) {                $("#field-message-error").fadeIn(600).removeClass("hide");            }            if (!$("#error-connexion").hasClass("hide")) {                $("#error-connexion").addClass("hide")            }            e.preventDefault();        }    });    $('.login').keyup(function () {        if ($.trim($(this).val())) {            $("#field-login .form-control-feedback").removeClass('glyphicon-warning-sign');            if ($('#field-login').hasClass('has-error')) {                $('#field-login').removeClass('has-error');            }        }    });    $('.password').keyup(function () {        if ($.trim($(this).val())) {            $("#field-password .form-control-feedback").removeClass('glyphicon-warning-sign');            if ($('#field-password').hasClass('has-error')) {                $('#field-password').removeClass('has-error');            }        }    });});