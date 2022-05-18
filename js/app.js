"use strict";
$(document).ready(function(){
    $(".toggle_wrap .toggle").click(function (e) {
        e.preventDefault();
        let t = $(this),
            ti = $(this).index();
        if(!t.hasClass("active")){
            $(".toggle").removeClass("active");
            t.addClass("active");
            $(".game_box").removeClass("active");
            $(".game_box").eq(ti).addClass("active");
        }

    })

    $(".game_line_item").click(function (){
        let t = $(this),
            ti = $(this).index(),
            tc = t.closest(".game_line"),
            tcn = t.closest(".game_line").next(".game_line");
        if(!t.hasClass("active") && (tc.hasClass("active") || tc.index() === 0) && !t.hasClass("empty")) {
            t.siblings().removeClass("active");
            t.addClass("active");
            tc.removeClass("first_active");
            tc.removeClass("last_active");
            tc.addClass("active");
            tc.nextAll(".game_line").removeClass("active");
            tc.next(".game_line").addClass("active");
            tcn.find(".game_line_item").removeClass("active");
            if(ti === 0 && !t.hasClass("about")) {
                tc.addClass("first_active");
            }
            else if (ti === 2 && !t.hasClass("about")){
                tc.addClass("last_active");
            }
            else {}
        }
        else {
            if(t.hasClass("active") && t.siblings().length > 0) {
                open_popup("#user_popup");
            }
            else {
                if(tc.hasClass("active") && t.hasClass("empty") && t.siblings().length > 0) {
                    open_popup("#add_user_popup")
                }
            }

        }
    });


    let popup_arr = [];
    let st;

    $(document).on("click", ".popup_open", function (e) {
        e.preventDefault();
        open_popup($(e.target)[0].attributes["href"].nodeValue);
    });
    $(document).on("click", ".close_popup,.close_btn", function (e) {
        e.preventDefault();
        close();
    });
    $(document).on("click", ".back_popup,.back_btn", function (e) {
        e.preventDefault();
        back();
    });

    $(".black_layout,.popup_wrapper").mousedown(function (e) {
        if ($(e.target).closest(".popup").length) return 0;
        else close();
    });

    function open_popup(e) {
        $(".black_layout").fadeIn(200);
        st = $(window).scrollTop();
        if (popup_arr.length) {
            $(popup_arr[popup_arr.length - 1]).fadeOut(200);
        }
        // $(e).css("top", st + "px").fadeIn(200);
        $(e).fadeIn(200);
        popup_arr.push(e);
        // $(".page_wrapper").css( "cssText", "filter: blur(8px); overflow: hidden; position: relative; height: 100%; padding-right:"+getScrollbarWidth()+"px" );

    }

    function close() {
        $(".page_wrapper").removeAttr('style');
        $(".black_layout").fadeOut(200);
        $(".popup_wrapper").fadeOut(200);
       // $("html,body").scrollTop(st);
        popup_arr = [];
    }

    function back() {
        $(popup_arr[popup_arr.length - 1]).fadeOut(200);
        popup_arr.splice(-1, 1);
        if (popup_arr.length) {
            $(popup_arr[popup_arr.length - 1]).fadeIn(200);
        }
    }

    $(".form").submit(function() {
        var this1= $(this);
        var form_data = $(this).serialize(); //собераем все данные из формы
        if (is_empty(this1)){
            $.ajax({
                type: "POST", //Метод отправки
                url: "php/mail.php", //путь до php фаила отправителя
                data: form_data,
                success: function (res) {
                    console.log(res);
                    // alert('Ваше сообщение успешно отправлено');
                    //код в этом блоке выполняется при успешной отправке сообщения
                    this1.trigger('reset');
                }
            });
        }
        else {
            alert("Все поля обязательны к заполенению")
        }
        return false;
    });
    $('.form input[type="text"]').focus(function(){
        if($(this).hasClass('invalid')){
            $(this).removeClass('invalid');
        }
    });

});

function is_empty(elem){
    var a;
    elem.find('.req').each(function(){
        if($(this).val().length==0 || !$(this).val().replace(/\s+/g, '')) {
            $(this).addClass('invalid');
            a = 0;
        }
        else if($(this).hasClass("phone") && $(this).val().length!=17) {
            $(this).addClass('invalid');
            a = 0;
        }
        else if($(this).hasClass("mail") && !validateEmail($(this).val())) {
            $(this).addClass('invalid');
            a = 0;
        }
        else $(this).removeClass('invalid');
    });
    if (a!=0) a = 1;
    return a;
}

function validateEmail($email) {
    var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
    return emailReg.test( $email );
}


function getScrollbarWidth() {
    var outer = document.createElement("div");
    outer.style.visibility = "hidden";
    outer.style.width = "100px";
    outer.style.msOverflowStyle = "scrollbar";
    document.body.appendChild(outer);
    var widthNoScroll = outer.offsetWidth;
    outer.style.overflow = "scroll";
    var inner = document.createElement("div");
    inner.style.width = "100%";
    outer.appendChild(inner);
    var widthWithScroll = inner.offsetWidth;
    outer.parentNode.removeChild(outer);
    return widthNoScroll - widthWithScroll;
}