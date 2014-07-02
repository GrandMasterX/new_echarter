jQuery(document).ready(function(){
    jQuery('input.birthdate,input.psprt_date').datepicker({
        changeMonth: true,
        changeYear: true,
        yearRange: Date.today().add({years: -120}).toString('yyyy') + ":" + Date.today().toString('yyyy')
    });
});