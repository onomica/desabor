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
    $(document).on('click', 'button[name=ets_av_submit]', function (e) {
        e.preventDefault();
        var btn = $(this),
            form = btn.parents('form').eq(0)
        ;
        if (!btn.hasClass('active')) {
            btn.addClass('active');
            form.find('.ets_av_error').remove();
            var formData = new FormData(form.get(0));
            $.ajax({
                type: 'POST',
                url: form.attr('action'),
                data: formData,
                dataType: 'json',
                processData: false,
                contentType: false,
                success: function (json) {
                    btn.removeClass('active');
                    if (json) {
                        if (json.errors)
                            form.find('.error_box').prepend('<div class="ets_av_error alert alert-error">' + json.errors + '</div>');
                        else
                            $('.ets_av_overload.active').removeClass('active');
                    }
                },
                error: function () {
                    btn.removeClass('active');
                }
            });
        }
    });

    $(document).on('click', 'a.ets_av_submit', function (e) {
        e.preventDefault();
        var btn = $(this),
            wrapper = btn.parent('ets_av_footer')
        ;
        if (!btn.hasClass('active') && btn.attr('href') !== '') {
            btn.addClass('active');
            wrapper.find('.ets_av_error').remove();
            $.ajax({
                type: 'POST',
                url: btn.attr('href'),
                data: 'ajax=1',
                dataType: 'json',
                success: function (json) {
                    btn.removeClass('active');
                    if (json) {
                        if (json.errors)
                            wrapper.prepend('<div class="ets_av_error alert alert-error">' + json.errors + '</div>');
                        else
                            $('.ets_av_overload.active').removeClass('active');
                    }
                },
                error: function () {
                    btn.removeClass('active');
                }
            });
        }
    });
});
