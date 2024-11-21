/**
 * 2007-2024 ETS-Soft
 *
 * NOTICE OF LICENSE
 *
 * This file is not open source! Each license that you purchased is only available for 1 wesite only.
 * If you want to use this file on more websites (or projects), you need to purchase additional licenses.
 * You are not allowed to redistribute, resell, lease, license, sub-license or offer our resources to any third party.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please contact us for extra customization service at an affordable price
 *
 * @author ETS-Soft <etssoft.jsc@gmail.com>
 * @copyright  2007-2024 ETS-Soft
 * @license    Valid for 1 website (or project) for each purchase of license
 *  International Registered Trademark & Property of ETS-Soft
 */

$(document).ready(function () {

    setTimeout(function () {
        $('input.mColorPicker').each(function () {
            var color = $(this).val() === '' ? '#ffffff' : $(this).val();
            $(this).css('background-color', color);
            $.fn.mColorPicker.setTextColor(color);
        });
    }, 350);

    setTimeout(function () {
        $('.bootstrap .alert.alert-success').hide();
    }, 3500);

    $(document).on('change', 'input[type=file][name=ETS_AV_ICON]', function () {
        var form = $(this).parents('form').eq(0),
            input = this;
        if (this.files && this.files[0]) {
            var fileReader = new FileReader();
            fileReader.onload = function (e) {
                if (form.find('.ets_av_thumbnail .imgm.img-thumbnail').length < 1) {
                    form.find('.ets_av_thumbnail [id*=images-thumbnails] p').before('<img src="#" alt="" style="max-width: 150px" class="imgm img-thumbnail">');
                }
                form.find('.ets_av_thumbnail .imgm.img-thumbnail').attr({
                    src: e.target.result,
                    alt: input.files[0].name
                });
                form.find('.ets_av_thumbnail input[type=hidden][name*=_REMOVED]').val(0);
                form.find('.ets_av_thumbnail .form-group').show();
                if ($('.ets_av_ageverification img.img-thumbnail').length < 1) {
                    $('.ets_av_ageverification').prepend('<img class="img-thumbnail" src="' + e.target.result + '" alt="' + input.files[0].name + '" style="max-width: 150px"/>');
                } else {
                    $('.ets_av_ageverification img.img-thumbnail').attr({
                        src: e.target.result,
                        alt: input.files[0].name
                    });
                }
            };
            fileReader.readAsDataURL(this.files[0]);
        }
    });

    $(document).on('click', '.ets_av_thumbnail [id*=images-thumbnails] a.btn', function (e) {
        e.preventDefault();

        var form = $(this).parents('form').eq(0);

        form.find('.ets_av_thumbnail .imgm.img-thumbnail').remove();
        form.find('.ets_av_thumbnail input[type=hidden][name*=_REMOVED]').val(1);
        form.find('.ets_av_thumbnail input[type=file], .ets_av_thumbnail .dummyfile.input-group input[type=text]').val('');

        $('.form-group-preview .ets_av_ageverification img.img-thumbnail').remove();
        $(this).closest('.form-group').hide();
    });

    $(document).on('click', 'input[name=ETS_AV_VERIFICATION_TYPE]', function () {

        $('.ets_av_verification_type.active').removeClass('active');
        $('.ets_av_verification_type.' + $(this).val()).addClass('active');

        if (parseInt($('#ETS_AV_MINIMUM_AGE').val()) > 0) {
            $('#ets_av_their_self').html(function () {
                return $(this).html().replace(/(\d+)/, $('#ETS_AV_MINIMUM_AGE').val());
            });
        }
    });

    $(document).on('change keyup', 'input[name=ETS_AV_MINIMUM_AGE]', function () {
        if (parseInt($('#ETS_AV_MINIMUM_AGE').val()) > 0) {
            $('#ets_av_their_self').html(function () {
                return $(this).html().replace(/(\d+)/, $('#ETS_AV_MINIMUM_AGE').val());
            });
        }
    });

    $(document).on('change keyup', 'input[name*=ETS_AV_TITLE]', function () {
        $('.ets_av_title').html($(this).val());
    });

    $(document).on('change', 'input[name=ETS_AV_SUBMIT_LABEL_COLOR]', function () {
        var color = $(this).val(),
            css = $('#ets_av_background_and_color').text()
        ;
        if (color === '')
            $(this).css('background-color', 'rgb(255, 255, 255)');
        $('#ets_av_background_and_color').html(css.replace(/(\.ets_av_primary\s*\{(.*?)color:\s*)(\#[a-z0-9]+)\s*/gs, '$1' + color + ' '));
    });

    $(document).on('change', 'input[name=ETS_AV_SUBMIT_BACKGROUND_COLOR]', function () {
        var color = $(this).val(),
            css = $('#ets_av_background_and_color').text()
        ;
        if (color === '')
            $(this).css('background-color', 'rgb(255, 255, 255)');
        $('#ets_av_background_and_color').html(
            css
                .replace(/(\.ets_av_primary\s*\{(.*?)background-color:\s*)(\#[a-z0-9]+)\s*/gs, '$1' + color + ' ')
                .replace(/(\.ets_av_primary\s*\{(.*?)border-color:\s*)(\#[a-z0-9]+)\s*/gs, '$1' + color + ' ')
        );
    });

    $(document).on('change', 'input[name=ETS_AV_SUBMIT_LABEL_HOVER]', function () {
        var color = $(this).val(),
            css = $('#ets_av_background_and_color').text()
        ;
        if (color === '')
            $(this).css('background-color', 'rgb(255, 255, 255)');
        $('#ets_av_background_and_color').html(css.replace(/(\.ets_av_primary:hover\s*\{(.*?)color:\s*)(\#[a-z0-9]+)\s*/gs, '$1' + color + ' '));
    });

    $(document).on('change', 'input[name=ETS_AV_SUBMIT_BACKGROUND_HOVER]', function () {
        var color = $(this).val(),
            css = $('#ets_av_background_and_color').text()
        ;
        if (color === '')
            $(this).css('background-color', 'rgb(255, 255, 255)');
        $('#ets_av_background_and_color').html(
            css
                .replace(/(\.ets_av_primary:hover\s*\{(.*?)background-color:\s*)(\#[a-z0-9]+)\s*/gs, '$1' + color + ' ')
                .replace(/(\.ets_av_primary:hover\s*\{(.*?)border-color:\s*)(\#[a-z0-9]+)\s*/gs, '$1' + color + ' ')
        );
    });

    $(document).on('click', '.dropdown-menu a', function () {
        var href = $(this).attr('href');
        var matches = href.match(/javascript:hideOtherLanguage\((\d+)\)/);
        if (matches)
            id_language = matches[1];
        etsAvPreviewLanguage();
    });
    $(document).on('click', '.ets_av_cancel, .ets_av_primary', function (e) {
        e.preventDefault();
    })
});

function etsAvPreviewLanguage() {
    $('.ets_av_ageverification .ets_av_title').html($('#ETS_AV_TITLE_' + id_language).val());
    $('.ets_av_ageverification .ets_av_desc').html($('#ETS_AV_DESCRIPTION_' + id_language).val());
}
