$(document).on("click", "input[name='lift']", function(){
    let thisRadio = $(this);
    if (thisRadio.hasClass("imChecked")) {
        thisRadio.removeClass("imChecked");
        thisRadio.prop('checked', false);
    } else {
        thisRadio.prop('checked', true);
        thisRadio.addClass("imChecked");
    }
})

$(document).on("click", "input[name='a/c']", function(){
    let thisRadio = $(this);
    if (thisRadio.hasClass("imChecked")) {
        thisRadio.removeClass("imChecked");
        thisRadio.prop('checked', false);
    } else {
        thisRadio.prop('checked', true);
        thisRadio.addClass("imChecked");
    }
})
