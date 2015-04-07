jQuery(document).ready(function ($) {

    /* Marketo fix */

    $(window).on('marketo_form_loaded', function () {
        $('.mktoForm').each(function () {
            $(this).find('.mktoFormRow').each(function () {
                var col_count = $(this).find('.mktoFormCol').length;
                var col_class = 'col_' + col_count;

                $(this).addClass(col_class);
            });

            $(this).find('style').remove();
        });

        //if chosen 1.3.0 installed
        if (typeof ($.fn.chosen) != 'undefined') {
            $('.mktoForm').find('select').chosen();
        }

        $("link[href='http://app-lon02.marketo.com/js/forms2/css/forms2.css']").remove();
        $("link[href='http://app-lon02.marketo.com/js/forms2/css/forms2-theme-simple.css']").remove();
    })
});