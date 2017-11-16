
function unhide(show, hide1, hide2) {
    $(show).fadeIn("slow");
    $(hide1).hide();
    $(hide2).hide();
}
$(function () {
    $('#username').on('keyup',function () {
        if(this.value=="") {
            $('#spanusername').html("Username dibutuhkan");
        }else
            $('#spanusername').html("");
    })
    $('#password').on('keyup',function () {
        if(this.value=="") {
            $('#spanpassword').html("Password dibutuhkan");
        }else
            $('#spanpassword').html("");
    })

    $('#akiku').click(function () {
        alert("gsd");
    })

})/**
 * Created by Windows 10 on 05/10/2017.
 */
