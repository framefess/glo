// $(this).datepicker('clearDates');
$('#dates').datepicker({
    format: "dd/mm/yyyy",
    setDate: new Date(),
    todayBtn: true,
    clearBtn: true,
    language: "th",
    todayHighlight: true
});
$('#dates').datepicker('update', new Date());

$('#datee').datepicker({
    format: "dd/mm/yyyy",
    setDate: new Date(),
    todayBtn: true,
    clearBtn: true,
    language: "th",
    todayHighlight: true
});
$('#datee').datepicker('update', new Date());

$('.timepicker').timepicker({
    timeFormat: 'HH:mm',
    interval: 60,
    minTime: '00:00',
    maxTime: '23:00',
    defaultTime: '00:00',
    startTime: '00:00',
    dynamic: true,
    dropdown: true,
    scrollbar: false
});