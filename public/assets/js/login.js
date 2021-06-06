$(document).ready(function () {
    let flag_capcha;
    let flag_capcha1;
    gen_capcha();
    $("#slideup").click(function () {
        $("#forgot").addClass("hide");
        $(".sign-in-container").fadeIn();
        $("input").val("");
        gen_capcha();
    });
    $("#slidedown").click(function () {
        $(".sign-in-container").css("display", "none");
        $("#forgot").removeClass("hide");
        $("#forgot").fadeIn();
    });

    $("#btn-log-in").click(function (e) {
        const email = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        let email_check = $(
            "#sign-in-container .account-input input[type=email]"
        ).val();
        let pass_check = $(
            "#sign-in-container .account-input input[type=password]"
        ).val();

        let flag = true;

        if (email_check === "" || !email_check.match(email)) {
            $("#sign-in-container .account-input input[type=email]").addClass(
                "error-input"
            );
            $("#sign-in-container .account-input input[type=email]").attr(
                "placeholder",
                "Bổ sung email đầy đủ"
            );
            setTimeout(function() {
                $("#sign-in-container .account-input input[type=email]").removeClass(
                    "error-input"
                );
                $("#sign-in-container .account-input input[type=email]").attr(
                    "placeholder",
                    "Nhập email ở đây"
                );
                $("#sign-in-container .account-input input[type=email]").val("");
            }, 2500);
            flag = false;
        }

        if (
            pass_check === "" ||
            pass_check.length < 8 ||
            pass_check.length > 16
        ) {
            $(
                "#sign-in-container .account-input input[type=password]"
            ).addClass("error-input");
            $("#sign-in-container .account-input input[type=password]").attr(
                "placeholder",
                "Bổ sung password đầy đủ"
            );
            setTimeout(function () {
                $(
                    "#sign-in-container .account-input input[type=password]"
                ).removeClass("error-input");
                $(
                    "#sign-in-container .account-input input[type=password]"
                ).attr("placeholder", "Nhập password ở đây");
                $("#sign-in-container .account-input input[type=password]").val(
                    ""
                );
            }, 2500);
            flag = false;
        }

        if ($("#txtInput").val() != flag_capcha) {
            gen_capcha();
            flag = false;
        }

        if (flag == true) {
            $("#sign-in-container").submit();
        }
    });

    $(".nav-tabs li").click(function (e) {
        $("input").val("");
        gen_capcha();
        gen_capcha1();
    });

    $("#btn-sign-up").click(function (e) {
        const email =
            /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        const regex_phone = /(0[3|5|7|8|9])+([0-9]{8})\b/;

        let email_check = $("#email").val();
        let pass_check = $("#pass").val();
        let repass_check = $("#repass").val();
        let name_check = $("#name").val();
        let phone_check = $("#phone").val();

        let flag = true;

        if (name_check === "") {
            $("#name").addClass("error-input");
            $("#name").attr("placeholder", "Bổ sung tên đầy đủ");
            setTimeout(function () {
                $("#name").removeClass("error-input");
                $("#name").attr("placeholder", "Nhập tên ở đây");
                $("#name").val("");
            }, 2500);
            flag = false;
        }

        if (phone_check === "" || !phone_check.match(regex_phone)) {
            $("#phone").addClass("error-input");
            $("#phone").attr("placeholder", "Bổ sung số điện thoại đầy đủ");
            setTimeout(function () {
                $("#phone").removeClass("error-input");
                $("#phone").attr("placeholder", "Nhập số điện thoại ở đây");
                $("#phone").val("");
            }, 2500);
            flag = false;
        }
        if (email_check === "" || !email_check.match(email)) {
            $("#email").addClass("error-input");
            $("#email").attr("placeholder", "Bổ sung email đầy đủ");
            setTimeout(function () {
                $("#email").removeClass("error-input");
                $("#email").attr("placeholder", "Nhập email ở đây");
                $("#email").val("");
            }, 2500);
            flag = false;
        }

        if (
            pass_check === "" ||
            pass_check.length < 8 ||
            pass_check.length > 16
        ) {
            $("#pass").addClass("error-input");
            $("#pass").attr("placeholder", "Bổ sung password đầy đủ");
            setTimeout(function () {
                $("#pass").removeClass("error-input");
                $("#pass").attr("placeholder", "Nhập password ở đây");
                $("#pass").val("");
            }, 2500);
            flag = false;
        }

        if (!pass_check.match(repass_check)) {
            $("#repass").addClass("error-input");
            $("#repass").attr("placeholder", "Bổ sung repassword đầy đủ");
            setTimeout(function () {
                $("#repass").removeClass("error-input");
                $("#repass").attr("placeholder", "Nhập repassword ở đây");
                $("#repass").val("");
            }, 2500);
            flag = false;
        }

        if ($("#txtInput1").val() != flag_capcha) {
            gen_capcha1();
            flag = false;
        }

        if (flag == true) {
            $("#sign--container").submit();
        }
    });

    function gen_capcha() {
        let iNumber = Math.floor(Math.random() * 10000);
        $("#divGenerateRandomValues").css({
            "background-image": "url(assets/img/Log/bg6.png)",
            width: "100px",
            height: "50px",
        });
        $("#divGenerateRandomValues").html(
            "<input id='txtNewInput' readonly></input>"
        );
        $("#txtNewInput").css({
            background: "transparent",
            "font-family": "Arial",
            "font-style": "bold",
            "font-size": "40px",
        });
        $("#txtNewInput").css({
            width: "100px",
            border: "none",
            color: "black",
        });
        $("#txtNewInput").val(iNumber);
        flag_capcha = iNumber;
    }

    function gen_capcha1() {
        let iNumber = Math.floor(Math.random() * 10000);
        $("#divGenerateRandomValues1").css({
            "background-image": "url(assets/img/Log/bg6.png)",
            width: "100px",
            height: "50px",
        });
        $("#divGenerateRandomValues1").html(
            "<input id='txtNewInput1' readonly></input>"
        );
        $("#txtNewInput1").css({
            background: "transparent",
            "font-family": "Arial",
            "font-style": "bold",
            "font-size": "40px",
        });
        $("#txtNewInput1").css({
            width: "100px",
            border: "none",
            color: "black",
        });
        $("#txtNewInput1").val(iNumber);
        flag_capcha = iNumber;
    }

    // page=============================================

    $("#btn-log-in-page").click(function (e) {

        const email = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        let email_check = $(
            "#sign-in-page .account-input input[type=email]"
        ).val();
        let pass_check = $(
            "#sign-in-page .account-input input[type=password]"
        ).val();

        let flag = true;

        if (email_check === "" || !email_check.match(email)) {
            $("#sign-in-page .account-input input[type=email]").addClass(
                "error-input"
            );
            $("#sign-in-page .account-input input[type=email]").attr(
                "placeholder",
                "Bổ sung email đầy đủ"
            );
            setTimeout(function() {
                $("#sign-in-page .account-input input[type=email]").removeClass(
                    "error-input"
                );
                $("#sign-in-page .account-input input[type=email]").attr(
                    "placeholder",
                    "Nhập email ở đây"
                );
                $("#sign-in-page .account-input input[type=email]").val("");
            }, 2500);
            flag = false;
        }

        if (
            pass_check === "" ||
            pass_check.length < 8 ||
            pass_check.length > 16
        ) {
            $(
                "#sign-in-page .account-input input[type=password]"
            ).addClass("error-input");
            $("#sign-in-page .account-input input[type=password]").attr(
                "placeholder",
                "Bổ sung password đầy đủ"
            );
            setTimeout(function () {
                $(
                    "#sign-in-page .account-input input[type=password]"
                ).removeClass("error-input");
                $(
                    "#sign-in-page .account-input input[type=password]"
                ).attr("placeholder", "Nhập password ở đây");
                $("#sign-in-page .account-input input[type=password]").val(
                    ""
                );
            }, 2500);
            flag = false;
        }

        console.log("input: " + $("#txtInput-page").val());
        console.log("check_flag" + flag_capcha1);

        if ($("#txtInput-page").val() != flag_capcha1) {
            gen_capcha_page();
            flag = false;
        }

        if (flag == true) {
            $("#sign-in-page").submit();
        }
    });
    gen_capcha_page();
    function gen_capcha_page() {
        let iNumber = Math.floor(Math.random() * 10000);
        $("#divGenerateRandomValues-page").css({
            "background-image": "url(assets/img/Log/bg6.png)",
            width: "100px",
            height: "50px",
        });
        $("#divGenerateRandomValues-page").html(
            "<input id='txtNewInput-page' readonly></input>"
        );
        $("#txtNewInput-page").css({
            background: "transparent",
            "font-family": "Arial",
            "font-style": "bold",
            "font-size": "40px",
        });
        $("#txtNewInput-page").css({
            width: "100px",
            border: "none",
            color: "black",
        });
        $("#txtNewInput-page").val(iNumber);
        flag_capcha1 = iNumber;

        console.log("check 1" + flag_capcha1);
        console.log("check 2:" + iNumber);
    }
    $("#btn-sign-up-page").click(function (e) {
        const email =
            /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        const regex_phone = /(0[3|5|7|8|9])+([0-9]{8})\b/;

        let email_check = $("#email-page").val();
        let pass_check = $("#pass-page").val();
        let repass_check = $("#repass-page").val();
        let name_check = $("#name-page").val();
        let phone_check = $("#phone-page").val();

        let flag = true;

        if (name_check === "") {
            $("#name-page").addClass("error-input");
            $("#name-page").attr("placeholder", "Bổ sung tên đầy đủ");
            setTimeout(function () {
                $("#name-page").removeClass("error-input");
                $("#name-page").attr("placeholder", "Nhập tên ở đây");
                $("#name-page").val("");
            }, 2500);
            flag = false;
        }

        if (phone_check === "" || !phone_check.match(regex_phone)) {
            $("#phone-page").addClass("error-input");
            $("#phone-page").attr("placeholder", "Bổ sung số điện thoại đầy đủ");
            setTimeout(function () {
                $("#phone-page").removeClass("error-input");
                $("#phone-page").attr("placeholder", "Nhập số điện thoại ở đây");
                $("#phone-page").val("");
            }, 2500);
            flag = false;
        }
        if (email_check === "" || !email_check.match(email)) {
            $("#email-page").addClass("error-input");
            $("#email-page").attr("placeholder", "Bổ sung email đầy đủ");
            setTimeout(function () {
                $("#email-page").removeClass("error-input");
                $("#email-page").attr("placeholder", "Nhập email ở đây");
                $("#email-page").val("");
            }, 2500);
            flag = false;
        }

        if (
            pass_check === "" ||
            pass_check.length < 8 ||
            pass_check.length > 16
        ) {
            $("#pass-page").addClass("error-input");
            $("#pass-page").attr("placeholder", "Bổ sung password đầy đủ");
            setTimeout(function () {
                $("#pass-page").removeClass("error-input");
                $("#pass-page").attr("placeholder", "Nhập password ở đây");
                $("#pass-page").val("");
            }, 2500);
            flag = false;
        }

        if (!pass_check.match(repass_check)) {
            $("#repass-page").addClass("error-input");
            $("#repass-page").attr("placeholder", "Bổ sung repassword đầy đủ");
            setTimeout(function () {
                $("#repass-page").removeClass("error-input");
                $("#repass-page").attr("placeholder", "Nhập repassword ở đây");
                $("#repass-page").val("");
            }, 2500);
            flag = false;
        }

        if ($("#txtInput1-page").val() != flag_capcha1) {
            gen_capcha1_page();
            flag = false;
        }

        if (flag == true) {
            $("#sign-in-page").submit();
        }
    });
    gen_capcha1_page();
    function gen_capcha1_page() {
        let iNumber = Math.floor(Math.random() * 10000);
        $("#divGenerateRandomValues1-page").css({
            "background-image": "url(assets/img/Log/bg6.png)",
            width: "100px",
            height: "50px",
        });
        $("#divGenerateRandomValues1-page").html(
            "<input id='txtNewInput1-page' readonly></input>"
        );
        $("#txtNewInput1-page").css({
            background: "transparent",
            "font-family": "Arial",
            "font-style": "bold",
            "font-size": "40px",
        });
        $("#txtNewInput1-page").css({
            width: "100px",
            border: "none",
            color: "black",
        });
        $("#txtNewInput1-page").val(iNumber);
        flag_capcha1 = iNumber;
    }
});
