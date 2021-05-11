$(document).ready(() => {
    console.log("PREPARING");

    const SRPs = $('#SRP-col').children();
    SRPs.hide();

    $('#Table-Row').find('select').change(function() {
        SRPs.hide();
        $('#srp-' + $(this).val()).show();
    });

});