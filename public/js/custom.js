// add class to Locations
$('.navbar-collapse .nav').children("li:nth-child(1), li:nth-child(2)").children("ul").children("li:last").addClass("menu_last");
$('.navbar-collapse .nav').children("li:nth-child(1), li:nth-child(2), li:nth-child(4)").children("ul").css('min-width', '210px');
// add class to Expertise
$('.navbar-collapse .nav').children("li:nth-child(3)").addClass("drop_menu");
// add class to Expertise children li tags
$('.navbar-collapse .nav').children("li:nth-child(3)").children("ul").children("li").addClass("col-xs-12 col-sm-4");

// add class to Expertise element of children li tag (service, technologies, engagement)
$('.navbar-collapse .nav').children('li:nth-child(3)').children('ul').children('li').children('ul').children('li:nth-child(1)').addClass('expertise-sub');

// disable the click event of the dropdown-toggle element
$('.navbar-collapse .dropdown-toggle').removeAttr('data-target').removeAttr('data-toggle').click(function() {
  if ($(this).parents('ul:first').hasClass('navbar-nav')) {
    return false;
  }
});

$('body').addClass('cbp-spmenu-push');
$('.cbp-spmenu').find('span.caret').removeClass('caret').addClass('glyphicon glyphicon-menu-down');
$('.cbp-spmenu').find('ul').removeAttr('class');
$('.cbp-spmenu').find('li').removeAttr('class');
$('.cbp-spmenu').find('a').removeAttr('class');
$('.cbp-spmenu').find('a').removeAttr('data-target');
$('.cbp-spmenu').find('a').removeAttr('data-toggle');
$('.cbp-spmenu a').each(function(index, item) {
  item = $(item);
  if (item.parent().children('ul').length) {
    item.removeAttr('href').addClass('sp-menu');
    item.click(function() {
      var arrows = $(this).children('span').attr('class');
      if (arrows == 'glyphicon glyphicon-menu-down') {
        $(this).children('span').attr({
          class: 'glyphicon glyphicon-menu-up'
        });
        $(this).parent('li').siblings('li').children('a').children('span').attr({
          class: 'glyphicon glyphicon-menu-down'
        });
        $(this).siblings("ul").slideToggle('slow/400/fast').parent().siblings("li").find("ul").slideUp('slow/400/fast');
      } else {
        $(this).children('span').attr({
          class: 'glyphicon glyphicon-menu-down'
        });
        $(this).siblings("ul").slideToggle('slow/400/fast');
      }
    });
  } else {
    item.click(function() {
      if (item.text().toLowerCase() == 'blog') {
        window.open(item.attr('href'));
        closeMenu();
        return false;
      } else {
        item.click(function() {
          closeMenu();
        });
      }
    });
  }
});

// mobile menu main
var menuRight = document.getElementById('cbp-spmenu-s2'),
  showRightPush = document.getElementById('showRightPush'),
  body = document.body;

showRightPush.onclick = function() {
  classie.toggle(this, 'active');
  classie.toggle(body, 'cbp-spmenu-push-toleft');
  classie.toggle(menuRight, 'cbp-spmenu-open');
  //disableOther( 'showRightPush' );
};

function closeMenu() {
  $('ul.cbp-spmenu').removeClass('cbp-spmenu-open');
  $('body').removeClass('cbp-spmenu-push-toleft');
}
