$(function () {
    $("#showPwd").on("click", function () {
        const inputPassword = document.querySelector("#pwd1");
        if (inputPassword.type === "password") {
            inputPassword.type = "text";
        } else {
            inputPassword.type = "password";
        }

    });

});
