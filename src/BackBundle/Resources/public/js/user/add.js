$(function () {    var regex = /^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)([-+!*$@%_\w]{8,})$/;    var regexPhone = /^0[1-9]([0-9]){9}$/;    var textPwd = "Le mot de passe doit comporter au moins 8 caractères et doit comporter au moins un chiffre ou des " +        "caractères spéciaux (-+!*$@%_), une lettre en majuscule et en miniscule";    /* ADD User */       $('.input-required').keyup(function () {        if ($(this).val()) {            if ($(this).closest(".form-group").hasClass('has-error')) {                $(this).closest(".form-group").removeClass('has-error');            }        }    });         $('.name,.firstName').change(function () {         if ($(".name").val() && $(".firstName").val() && !$(".login").val()) {            $('.login').val($.trim($(".firstName").val().toLowerCase()) + "." + $.trim($(".name").val().toLowerCase()));        }     });    $('.password').tooltip({        'trigger': 'focus',        placement: "bottom",        'title': textPwd    });    $('.btn-add-user').click(function (e) {        console.log('Button add');        if (!$('.name').val() || !$('.firstName').val()            || !$('.login').val() || !$('.password').val() || !$('.confirm-password').val()) {            $("input.input-required").each(function () {                console.log($(this).val());                if (!$.trim($(this).val())) {                    if (!$(this).closest(".form-group").hasClass('has-error')) {                        $(this).closest(".form-group").addClass('has-error');                    }                }            });            $("#div-message-error").removeClass("display-hide")            $("#div-message-error").find('.message-error')                .html('Veuillez remplir tous les champs obligatoires.');            e.preventDefault();        }    });    /*$(".service").change(function () {     console.log($(this).val());     var address = "";     var service = $(this).val().substr(0, 4);     if (service == "Sain") {     address = {     "address": "Bis, 2 Avenue Foch",     "postalCode": "94160",     "city": "Saint-Mandé",     "country": "France",     };     } else if (service == "Issy") {     address =     {     "address": "16 Rue Jean Jacques Rousseau",     "postalCode": "92130",     "city": "Issy-les-Moulineaux",     "country": "France",     };     } else if (service == "Luxe") {     address = {     "address": "4 Avenue de la Gare",     "postalCode": "1610",     "city": "Luxembourg",     "country": "Luxembourg",     }     }     console.log(address);     $(".address").val(address.address);     $(".postalCode").val(address.postalCode);     $(".city").val(address.city);     $(".country").val(address.country);     });     */});