$(document).ready(function () {

    // --------------------------------------------------------------------------------------

    // Add body-small class if window less than 768px
    if ($(this).width() < 769) {
        $('body').addClass('body-small')
    } else {
        $('body').removeClass('body-small')
    }

    // --------------------------------------------------------------------------------------

    // Editor summer note
    $('.summernote').summernote({
        height: 270,
        lang: 'pt-BR'
    });

    // --------------------------------------------------------------------------------------

    // MetsiMenu
    $('#side-menu').metisMenu();

    // --------------------------------------------------------------------------------------

    // Switchery
    if (document.querySelector('.js-switch') != null) {
        new Switchery(document.querySelector('.js-switch'), {color: '#2281C3'});
    }

    // --------------------------------------------------------------------------------------

    // Close menu in canvas mode
    $('.close-canvas-menu').click(function () {
        $("body").toggleClass("mini-navbar");
        SmoothlyMenu();
    });

    // --------------------------------------------------------------------------------------

    // Run menu of canvas
    $('body.canvas-menu .sidebar-collapse').slimScroll({
        height: '100%',
        railOpacity: 0.9
    });

    // --------------------------------------------------------------------------------------

    // Bootstrap datetimepicker
    $('.datetimepicker').datetimepicker({
        step: 10
    });

    // --------------------------------------------------------------------------------------

    // Open close right sidebar
    $('.right-sidebar-toggle').click(function () {
        $('#right-sidebar').toggleClass('sidebar-open');
    });

    // --------------------------------------------------------------------------------------

    // Initialize slimscroll for right sidebar
    $('.sidebar-container').slimScroll({
        height: '100%',
        railOpacity: 0.4,
        wheelStep: 10
    });

    // --------------------------------------------------------------------------------------

    // Small todo handler
    $('.check-link').click(function () {
        var button = $(this).find('i');
        var label = $(this).next('span');
        button.toggleClass('fa-check-square').toggleClass('fa-square-o');
        label.toggleClass('todo-completed');
        return false;
    });

    // --------------------------------------------------------------------------------------

    // Minimalize menu
    $('.navbar-minimalize').click(function () {
        $("body").toggleClass("mini-navbar");
        SmoothlyMenu();
    });

    // --------------------------------------------------------------------------------------

    // Tooltips demo
    $('[data-toggle="tooltip"]').tooltip();

    // --------------------------------------------------------------------------------------

    // Move modal to body
    // Fix Bootstrap backdrop issu with animation.css
    $('.modal').appendTo("body");

    // --------------------------------------------------------------------------------------

    // Full height of sidebar
    function fix_height() {
        var heightWithoutNavbar = $("body > #wrapper").height() - 61;
        $(".sidebard-panel").css("min-height", heightWithoutNavbar + "px");

        var navbarHeigh = $('nav.navbar-default').height();
        var wrapperHeigh = $('#page-wrapper').height();

        if (navbarHeigh > wrapperHeigh) {
            $('#page-wrapper').css("min-height", navbarHeigh + "px");
        }

        if (navbarHeigh < wrapperHeigh) {
            $('#page-wrapper').css("min-height", $(window).height() + "px");
        }

        if ($('body').hasClass('fixed-nav')) {
            if (navbarHeigh > wrapperHeigh) {
                $('#page-wrapper').css("min-height", navbarHeigh - 60 + "px");
            } else {
                $('#page-wrapper').css("min-height", $(window).height() - 60 + "px");
            }
        }

    }

    fix_height();

    // --------------------------------------------------------------------------------------

    // Fixed Sidebar
    $(window).bind("load", function () {
        if ($("body").hasClass('fixed-sidebar')) {
            $('.sidebar-collapse').slimScroll({
                height: '100%',
                railOpacity: 0.9
            });
        }
    });

    // --------------------------------------------------------------------------------------

    // Move right sidebar top after scroll
    $(window).scroll(function () {
        if ($(window).scrollTop() > 0 && !$('body').hasClass('fixed-nav')) {
            $('#right-sidebar').addClass('sidebar-top');
        } else {
            $('#right-sidebar').removeClass('sidebar-top');
        }
    });

    // --------------------------------------------------------------------------------------

    $(window).bind("load resize scroll", function () {
        if (!$("body").hasClass('body-small')) {
            fix_height();
        }
    });

    // --------------------------------------------------------------------------------------

    $("[data-toggle=popover]").popover();

    // --------------------------------------------------------------------------------------

    // Add slimscroll to element
    $('.full-height-scroll').slimscroll({
        height: '100%'
    })

    // --------------------------------------------------------------------------------------

});

// --------------------------------------------------------------------------------------

// Minimalize menu when screen is less than 768px
$(window).bind("resize", function () {
    if ($(this).width() < 769) {
        $('body').addClass('body-small')
    } else {
        $('body').removeClass('body-small')
    }
});