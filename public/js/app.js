/*****
* CONFIGURATION
*/

// // Active ajax page loader
$.ajaxLoad = true;
//
//required when $.ajaxLoad = true
$.defaultPage = '/main';
$.subPagesDirectory = 'http://osol.test/';
$.page404 = '/404';
$.mainContent = $('#view');
//
// //Main navigation
// $.navigation = $('nav > ul.nav');
//
//
'use strict';


/****
* AJAX LOAD
* Load pages asynchronously in ajax mode
*/

$(function(){
    var form = $(".login-form");

    form.css({
        opacity: 1,
        "-webkit-transform": "scale(1)",
        "transform": "scale(1)",
        "-webkit-transition": ".5s",
        "transition": ".5s"
    });
});


if ($.ajaxLoad) {
//
  var paceOptions = {
    elements: false,
    restartOnRequestAfter: false
  };
//
  var url = location.hash.replace(/^#/, '');
  console.log(url)

  if (url != '') {
    setUpUrl(url);
      $('.ui.modal').modal('show')
  } else {
    setUpUrl($.defaultPage);
  }
//
    $(document).on('click', '.setupajax', function(e) {
        e.preventDefault();
        var target = $(e.currentTarget);
        setUpUrl(target.attr('href'));
    });
    $(document).on('click', '.openajax', function(e) {
        e.preventDefault();
        var target = $(e.currentTarget);
        if(target.attr('data-url')){
            setUpUrl(target.attr('data-url'));
        }else {
            setUpUrl(target.attr('href'));
        }

        metroDialog.open('#dialog')
    });

    $(document).on('click', '.sure', function(e) {
        e.preventDefault();
        if (confirm('متأكد ؟') == true) {
            var target = $(e.currentTarget);
            location.href = target.attr('href');
        } else {
            null
        }

    });



    $(document).on('click', 'button.back', function(e) {
        setUpUrl(url);

    });
//
//
//
//     $(document).on('click', '.nav a[href!="#"]', function(e) {
//     if ( $(this).attr('target') == '_top' ) {
//       e.preventDefault();
//       var target = $(e.currentTarget);
//       window.location = (target.attr('href'));
//     } else if ( $(this).attr('target') == '_blank' ) {
//       e.preventDefault();
//       var target = $(e.currentTarget);
//       window.open(target.attr('href'));
//     } else {
//       e.preventDefault();
//       var target = $(e.currentTarget);
//       setUpUrl(target.attr('href'));
//     }
//   });
//
//
//   $(document).on('click', 'a[href="#"]', function(e) {
//     e.preventDefault();
//   });
}
//
function setUpUrl(url) {

  // $('nav .nav li .nav-link').removeClass('active');
  // $('nav .nav li.nav-dropdown').removeClass('open');
  // $('nav .nav li:has(a[href="' + url.split('?')[0] + '"])').addClass('open');
  // $('nav .nav a[href="' + url.split('?')[0] + '"]').addClass('active');

  loadPage(url);
}
//
function loadPage(url) {
    $.ajax({
    type : 'GET',
    url : $.subPagesDirectory + url,
    dataType : 'html',
    cache : false,
    async: false,
    beforeSend : function() {
      $.mainContent.css({ opacity : 0 });
    },
    success : function() {
      Pace.restart();
      $('html, body').animate({ scrollTop: 0 }, 0);
      $.mainContent.load($.subPagesDirectory + url, null, function (responseText) {
        window.location.hash = url;
      }).delay(250).animate({ opacity : 1 }, 0);

    },
    error : function() {
      window.location.href = $.page404;
    }

  });
}
//
// /****
// * MAIN NAVIGATION
// */
//
// $(document).ready(function($){
//
//   // Add class .active to current link - AJAX Mode off
//   $.navigation.find('a').each(function(){
//
//     var cUrl = String(window.location).split('?')[0];
//
//     if (cUrl.substr(cUrl.length - 1) == '#') {
//       cUrl = cUrl.slice(0,-1);
//     }
//
//     if ($($(this))[0].href==cUrl) {
//       $(this).addClass('active');
//
//       $(this).parents('ul').add(this).each(function(){
//         $(this).parent().addClass('open');
//       });
//     }
//   });
//
//   // Dropdown Menu
//   $.navigation.on('click', 'a', function(e){
//
//     if ($.ajaxLoad) {
//       e.preventDefault();
//     }
//
//     if ($(this).hasClass('nav-dropdown-toggle')) {
//       $(this).parent().toggleClass('open');
//       resizeBroadcast();
//     }
//   });
//
//   /* ---------- Main Menu Open/Close, Min/Full ---------- */
//   $('.sidebar-toggler').click(function(){
//     $('body').toggleClass('sidebar-hidden');
//     resizeBroadcast();
//   });
//
//   $('.sidebar-minimizer').click(function(){
//     $('body').toggleClass('sidebar-minimized');
//     resizeBroadcast();
//   });
//
//   $('.brand-minimizer').click(function(){
//     $('body').toggleClass('brand-minimized');
//   });
//
//   $('.aside-menu-toggler').click(function(){
//     $('body').toggleClass('aside-menu-hidden');
//     resizeBroadcast();
//   });
//
//   $('.mobile-sidebar-toggler').click(function(){
//     $('body').toggleClass('sidebar-mobile-show');
//     resizeBroadcast();
//   });
//
//   $('.sidebar-close').click(function(){
//     $('body').toggleClass('sidebar-opened').parent().toggleClass('sidebar-opened');
//   });
//
//   /* ---------- Disable moving to top ---------- */
//   $('a[href="#"][data-top!=true]').click(function(e){
//     e.preventDefault();
//   });
//
// });
//
//
// function init(url) {
//
//   /* ---------- Tooltip ---------- */
//   $('[rel="tooltip"],[data-rel="tooltip"]').tooltip({"placement":"bottom",delay: { show: 400, hide: 200 }});
//
//   /* ---------- Popover ---------- */
//   $('[rel="popover"],[data-rel="popover"],[data-toggle="popover"]').popover();
//
// }
//
//

function close_window() {
    if (confirm("Close Window?")) {
        close();
    }


}


//
//
//
//



$('.ui.dropdown')
    .dropdown()
;



$(function (){
    'use strict';
    var pieData = {
        labels: [
            'Red',
            'Green',
            'Yellow'
        ],
        datasets: [{
            data: [300, 50, 100],
            backgroundColor: [
                '#FF6384',
                '#36A2EB',
                '#FFCE56'
            ],
            hoverBackgroundColor: [
                '#FF6384',
                '#36A2EB',
                '#FFCE56'
            ]
        }]
    };
    var ctx = document.getElementById('canvas-assets');
    var chart = new Chart(ctx, {
        type: 'doughnut',
        data: pieData,
        options: {
            responsive: true
        }
    });
});
