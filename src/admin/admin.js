$('.input-daterange input').each(function() {
    // $(this).datepicker('clearDates');
    $(this).datepicker({
        format: "dd/mm/yyyy",
        setDate: new Date(),
        todayBtn: true,
        clearBtn: true,
        language: "th",
        todayHighlight: true
    });
    $(this).datepicker('update', new Date());
});