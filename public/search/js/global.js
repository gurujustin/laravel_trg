(function ($) {
    'use strict';
    /*==================================================================
        [ Daterangepicker ]*/


    try {

        $('#input-start').daterangepicker({
            ranges: true,
            autoApply: true,
            applyButtonClasses: false,
            autoUpdateInput: false
        },function (start, end) {
            $('#input-start').val(start.format('DD/MM/YYYY'));
            $('#input-end').val(end.format('DD/MM/YYYY'));
        });




    } catch(er) {console.log(er);}


})(jQuery);
