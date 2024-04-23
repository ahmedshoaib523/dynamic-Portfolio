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


//**********  chat js start here */
function ImageInput(element) {
  // Variables
  var $wrapper = element;
  var $file = $wrapper.querySelector('input[type=file]');
  var $input = $wrapper.querySelector('input[type=hidden]');
  var $img = $wrapper.querySelector('img');
  var maxSize = Number($file.getAttribute('max-size'));
  var types = $file.accept.split(',');

  var api = {
    onInvalid: onInvalid,
    onChanged: onChanged,
  };

  // Methods
  function fileHandler(e) {
    var file = $file.files.length && $file.files[0];

    if (!file) return;

    var errors = checkValidity(file);

    if (errors) {
      api.onInvalid(errors);
      $file.value = null;
      return;
    }

    api.onChanged(file, update, $wrapper)
  }

  function humanizeFormat(string) {
    return string.replace(/.*?\//, '');
  }

  function checkValidity(file) {
    var errors = [];

    types.includes(file.type) || errors.push('Format file harus: ' + types.map(humanizeFormat).join(', '));
    file.size < maxSize || errors.push('Ukuran file maksimal ' + maxSize / 1000000 + 'MB');

    return errors.length ? errors : false;
  }

  function getFileData(file, callback) {
    var reader = new FileReader();

    reader.addEventListener("load", function () {
      callback(reader.result);
    }, false);

    if (file) {
      reader.readAsDataURL(file);
    }
  }

  function update(data) {
    $img.src = data;
    $input.value = data;
  }

  function onInvalid(errors) {
    alert(errors.join('. '));
  }

  function onChanged(file, update, $wrapper) {
    console.log('.onChanged called');
    getFileData(file, update);
  }

  // Init
  $file.addEventListener('change', fileHandler);

  return api;
};

document.querySelectorAll('.image-input').forEach(_ => {
  var imageInput = new ImageInput(_);
  _.addEventListener("click", (e) => {
    if (e.target.classList.contains('image-remove')) {
      _.remove()
    }
  });



  if (_.classList.contains('withAjax')) {
    imageInput.onChanged = customOnChanged;

  }

  function customOnChanged(file, update, $el) {
    if (!$el.nextElementSibling) {
      var $remove = document.createElement('button');
      $remove.className = "image-remove";

      var $new = $el.cloneNode(true);
      $new.querySelector('input[type=hidden]').value = "";
      $new.querySelector('input[type=file]').value = "";
      $new.querySelector('img').src = "";

      $el.parentElement.append($new);
      $el.append($remove);

      var imageInput = new ImageInput($new);
      imageInput.onChanged = customOnChanged;
    }

    $el.classList.add('isUploading');
    setTimeout(function () {
      const reader = new FileReader();
      reader.onload = function (e) {
        const src = e.target.result;
        update(src);
      }
      reader.readAsDataURL(file);
      $el.classList.remove("isUploading");
    }, 500);

  };

});

$(document).on('click', '.upload-btn', function () {
  if ($('.file-attatch').css('display') == "none") {
    $('.file-attatch').css('display', 'flex')
  } else {
    $('.file-attatch').css('display', 'none')
  }
});

// $(document).on('click','.btn-send',function(){
//   console.log('here');
//   var input_val = $(this).closest('.form-group').find('input').val();
//   console.log(input_val);
// });

$(document).on('click', '#dropdownchat', function () {
  console.log('here');
  if ($('.chat-menu').css('display') == "none") {
    $('.chat-menu').css('display', 'block')
  } else {
    $('.chat-menu').css('display', 'none')
  }
});

$(document).on('click', '.user-card', function () {
  console.log('message show');
  if (window.matchMedia('(max-width: 767px)').matches) {
    // do functionality on screens smaller than 768px
    if ($('.messages-box').css('display') == "none") {
      $('.messages-box').css('display', 'flex')
    } else {
      $('.messages-box').css('display', 'none')
    }
    $(this).closest('.chat-main').find('.user-box').css('display', 'none');
  }
});

$(document).on('click', '.icon-back', function () {
  console.log('User show');
  if (window.matchMedia('(max-width: 767px)').matches) {
    // do functionality on screens smaller than 768px
    if ($('.user-box').css('display') == "none") {
      $('.user-box').css('display', 'block')
    } else {
      $('.user-box').css('display', 'none')
    }
    $(this).closest('.chat-main').find('.messages-box').css('display', 'none');
  }
});
//**********  chat js end here */

// $(document).on('click', '', function () {
//   console.log('here');
// });

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


// chart script start
// chart-one
var options = {
  series: [{
    name: "Desktops",
    data: [10, 41, 35, 51, 49, 62, 69, 91, 148]
  }],
  chart: {
    height: 350,
    type: 'line',
    zoom: {
      enabled: false
    }
  },
  dataLabels: {
    enabled: false
  },
  stroke: {
    curve: 'straight'
  },
  title: {
    text: 'Product Trends by Month',
    align: 'left'
  },
  grid: {
    row: {
      colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
      opacity: 0.5
    },
  },
  xaxis: {
    categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep'],
  }
};

var chart = new ApexCharts(document.querySelector("#chart"), options);
chart.render();
// chart-one

// chart-two
var options = {
  series: [{
    name: 'Net Profit',
    data: [44, 55, 57, 56, 61, 58, 63, 60, 66]
  }, {
    name: 'Revenue',
    data: [76, 85, 101, 98, 87, 105, 91, 114, 94]
  }, {
    name: 'Free Cash Flow',
    data: [35, 41, 36, 26, 45, 48, 52, 53, 41]
  }],
  chart: {
    type: 'bar',
    height: 350
  },
  plotOptions: {
    bar: {
      horizontal: false,
      columnWidth: '55%',
      endingShape: 'rounded'
    },
  },
  dataLabels: {
    enabled: false
  },
  stroke: {
    show: true,
    width: 2,
    colors: ['transparent']
  },
  xaxis: {
    categories: ['Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct'],
  },
  yaxis: {
    title: {
      text: '$ (thousands)'
    }
  },
  fill: {
    opacity: 1
  },
  tooltip: {
    y: {
      formatter: function (val) {
        return "$ " + val + " thousands"
      }
    }
  }
};

var chart = new ApexCharts(document.querySelector("#chart-pie"), options);
chart.render();
  // chart-two
// chart script end
