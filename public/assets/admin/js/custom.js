$(document).ready(function () {
  var path = window.location.href;
  var check_val = 1;
  $('.ai-icon').each(function () {
    if (this.href === path) {
      $(this).addClass('active');
      check_val = 0;
      return false;
    }
  });

  if (check_val) {
    $('.link-child').each(function () {
      if (this.href === path) {
        $(this).addClass('active');
        check_val = 0;
        $(this).closest('li').parent().closest('li').find('.ai-icon').addClass("active");
        $(this).closest('li').parent().closest('li').find('.ai-icon').attr("aria-expanded", "true");
        $(this).closest('ul').addClass("mydrop show");
        return false;
      }
    });
  }

  $('.ai-icon').click(function () {
    console.log('here');
    var status = 1;
    if ($(this).hasClass("active")) {
      status = 0
    }
    $('.ai-icon').removeClass("active");
    $('.ai-icon').attr("aria-expanded", "false");
    $('.dropdown').removeClass("show");
    $('.dropdown').removeClass("mydrop");

    if (status) {
      $(this).addClass("active");
      $(this).attr("aria-expanded", "true");
      $(this).closest('li').find('.dropdown').addClass("mydrop show");
    }
  });
});

// datatable
$(document).ready(function () {
  $('#example').DataTable();
});
// datatable
// toggle password
$(".toggle-password").click(function () {
  $(this).toggleClass("fa-eye fa-eye-slash");
  var input = $($(this).attr("toggle"));
  if (input.attr("type") == "password") {
    input.attr("type", "text");
  } else {
    input.attr("type", "password");
  }
});
// toggle password

// side-menu js 300 t0 991 start
$(document).ready(function () {
  if (window.matchMedia("(max-width: 991px)").matches) {
    var btn = document.querySelector('.toggle');
    var btnst = true;
    btn.onclick = function () {
      if (btnst == true) {
        document.querySelector('.toggle span').classList.add('toggle');
        document.getElementById('sidebar').classList.add('sidebarshow');
        btnst = false;
      } else if (btnst == false) {
        document.querySelector('.toggle span').classList.remove('toggle');
        document.getElementById('sidebar').classList.remove('sidebarshow');
        btnst = true;
      }
    }
  }
});
// side-menu js 300 t0 991 end

// side-menu js 991 t0 2000 start
$(document).ready(function () {
  if (window.matchMedia("(min-width: 992px)").matches) {
    var btn = document.querySelector('.toggle');
    var btnst = true;
    btn.onclick = function () {
      if (btnst == true) {
        document.querySelector('.toggle span').classList.add('toggle');
        document.getElementById('sidebar').classList.add('short-icons');
        document.getElementById('header').classList.add('short-bar-header');
        document.getElementById('footer').classList.add('short-bar-footer');
        document.getElementsByClassName('content-body')[0].classList.add('short-bar-body');
        btnst = false;
      } else if (btnst == false) {
        document.querySelector('.toggle span').classList.remove('toggle');
        document.getElementById('sidebar').classList.remove('short-icons');
        document.getElementById('header').classList.remove('short-bar-header');
        document.getElementById('footer').classList.remove('short-bar-footer');
        document.getElementsByClassName('content-body')[0].classList.remove('short-bar-body');
        btnst = true;
      }
    }
  }
});
// side-menu js 991 t0 2000 end

// loader js start
// $(document).ready(function () {
//   // Will wait for everything on the page to load.
//   $(window).bind('load', function () {
//     $('.overlay, body').addClass('loaded');
//     setTimeout(function () {
//       $('.overlay').css({ 'display': 'none' })
//     }, 2000)
//   });

//   // Will remove overlay after 1min for users cannnot load properly.
//   setTimeout(function () {
//     $('.overlay, body').addClass('loaded');
//   }, 60000);

// });
// loader js end

// counter js start
$.fn.jQuerySimpleCounter = function (options) {
  var settings = $.extend({
    start: 0,
    end: 100,
    easing: 'swing',
    duration: 400,
    complete: ''
  }, options);

  var thisElement = $(this);

  $({ count: settings.start }).animate({ count: settings.end }, {
    duration: settings.duration,
    easing: settings.easing,
    step: function () {
      var mathCount = Math.ceil(this.count);
      thisElement.text(mathCount);
    },
    complete: settings.complete
  });
};

$('#number1').jQuerySimpleCounter({ end: parseInt($('#number1').text()), duration: 3000 });
$('#number2').jQuerySimpleCounter({ end: parseInt($('#number2').text()), duration: 3000 });
$('#number3').jQuerySimpleCounter({ end: parseInt($('#number3').text()), duration: 2000 });
$('#number4').jQuerySimpleCounter({ end: parseInt($('#number4').text()), duration: 2000 });
// counter js end

// change img start
function readURLcl(input) {
  console.log("yes");
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function (e) {
      $(input).closest('.avatar-upload').find('img').attr('src', e.target.result);
    }
    reader.readAsDataURL(input.files[0]);
  }
}
$(".change-img").change(function () {
  readURLcl(this);
});
// change img start

