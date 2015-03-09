function validateEmail(email) {
    var re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return !re.test(email);
}
jQuery(document).ready(function ($) {
    $(".fancybox").fancybox();
    $('#contact_form_submit').click(function () {
        var boolArr = [], bool = false, i = 0;
        $('.contact_form input').each(function () {
            if ($(this).attr('type') == 'email') {
                if (validateEmail($(this).val())) {
                    $(this).parents('.form-group').addClass('has-error');
                    $(this).parents('.form-group').find('label').addClass('control-label');
                    boolArr[i] = false;
                } else {
                    $(this).parents('.form-group').removeClass('has-error');
                    $(this).parents('.form-group').find('label').removeClass('control-label');
                    boolArr[i] = true;
                }
            } else {
                if ($(this).val() == '') {
                    $(this).parents('.form-group').addClass('has-error');
                    $(this).parents('.form-group').find('label').addClass('control-label');
                    boolArr[i] = false;
                } else {
                    $(this).parents('.form-group').removeClass('has-error');
                    $(this).parents('.form-group').find('label').removeClass('control-label');
                    boolArr[i] = true;
                }
            }
            i++;
        });

        if ($('#yourMessage').val() == '') {
            $('#yourMessage').parents('.form-group').addClass('has-error');
            $('#yourMessage').parents('.form-group').find('label').addClass('control-label');
            boolArr[i] = false;
        } else {
            $('#yourMessage').parents('.form-group').removeClass('has-error');
            $('#yourMessage').parents('.form-group').find('label').removeClass('control-label');
            boolArr[i] = true;
        }

        for (var k in boolArr) {
            if (boolArr[k]) {
                bool = true;
                continue;
            } else {
                bool = false;
                break;
            }
        }
        return bool;
    });
});