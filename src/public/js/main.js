/*global $, console, alert, jQuery*/

$(function () {

    $(".box-right .nav a").on("click", function () {
        $(".box-right .nav a").removeClass("choosen")
        $(this).addClass("choosen");
        $(".tab").addClass("d-none");
        $($(this).attr('data-open')).removeClass("d-none");

    })
    $("#dash .box-admin").on("click", function () {
        $(".tab").addClass("d-none");
        $($(this).attr('data-open')).removeClass("d-none");

    })
    $(".dele").on("click", function () {
        var father = $(this).parents('tr')
        father.remove();

    })
    $(".top-box a").on("click", function () {
        $(".top-box a").removeClass("choosen")
        $(this).addClass("choosen");
        $(".tab").addClass("d-none");
        $($(this).attr('data-open')).removeClass("d-none");

    })
    $(".btncode").on("click", function () {
        $(".putemail").addClass("codeshow");
        $(".creatcode").removeClass("codeshow");

    })
    $(".skill-btn").on('click', function () {
        var skillIn = $("#skl").val();
        if (skillIn !== "") {
            var skillOut = $("<span></span>").text(skillIn);
            skillOut.appendTo('.skill-box');
        }

        $("#skl").val("");
    })
    $(".skill-box ").on('click', 'span', function () {
        $(this).remove();
    });
    $(".profile .fab").on('click', function () {
        $('.profile .fab').removeClass('chosed')
        $(this).addClass('chosed')
    });
    $('.color').on('click', function () {
        if ($(this).hasClass("xclcked")) {
            $(this).addClass('clcked');
            $(this).removeClass('xclcked');
        } else {
            $(this).addClass('xclcked');
            $(this).removeClass('clcked');
        }

        $('body').toggleClass('dark')
    })

    $('#datepicker').datepicker({
        uiLibrary: 'bootstrap4',
        locale: 'es-es',
    });
    $('#datepicker1').datepicker({
        uiLibrary: 'bootstrap4',
        locale: 'es-es',
    });



    $('input[type="file"]').change(function (e) {
        var fileName = e.target.files[0].name;
        $('span.filename').html(fileName)
    });


    //    adding button

    $('.add-btn button').on('click', function () {
        var selectElm = $(this).parents('.add-btn').find('.col-md-10:first').clone();
        $(this).parents('.col-md-2').before(selectElm)
    })

});
