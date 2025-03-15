
if (sessionStorage.hasOwnProperty('popup_shown') == false) {
    $("#popup").css('display', 'normal');
    sessionStorage.setItem('popup_shown', true);



    $(function () {
        $("#popup").dialog({
            position: { my: "center", at: "center" },
            resizable: false,
            width: 400,
        });
    });
}
