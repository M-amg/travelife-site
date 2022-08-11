$(".acceptation").change(function () {
    if ($(this).is(':checked')) {
        $(".resa" ).prop("disabled", false);
    } else {
        $(".resa" ).prop("disabled", true);
    }
});