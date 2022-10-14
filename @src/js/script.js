// слайдер отзывы
$('.testi-slider').slick({
    dots: true,
    // prevArrow: '<button class="slider-arrow prev"><img src="img/dist/index/prev-arrow.svg" alt="prev"></button>',
    // nextArrow: '<button class="slider-arrow next"><img src="img/dist/index/next-arrow.svg" alt="prev"></button>',
    infinite: true,
    arrows: false,
    speed: 1000,
    slidesToShow: 2,
    centerMode: false,
    centerPadding: '30px',
    slidesToScroll: 1,
    adaptiveHeight: true,
    responsive: [
        {
            breakpoint: 800,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              infinite: true,
              dots: true,
              arrows: false
            }
        },
    ]
});



// Слайдер партнеры
$('.partner-slider').slick({
    dots: true,
    infinite: true,
    arrows: false,
    speed: 1000,
    slidesToShow: 4,
    // centerMode: true,
    slidesToScroll: 2,
    adaptiveHeight: true,
    variableWidth: true,
    responsive: [
        {
            breakpoint: 1000,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 2,
              infinite: true,
              dots: true,
              arrows: false,
              centerMode: true
            }
        },
        {
            breakpoint: 800,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 2,
              infinite: true,
              dots: true,
              arrows: false,
              centerMode: true
            }
        },
    ]
});



var $grid = $('.grid').imagesLoaded( function() {
    // init Masonry after all images have loaded
    $('.grid').masonry({
        // options
        itemSelector: '.grid-item',
    });
});




/* Открытие/закрытие мобильного меню
=========================================================================== */
$(function () {
    $('.burger-icon').on('click', function () {
        $('.mobile-menu').toggleClass('active')
        $('.overlay').toggleClass('show')
        $('.fullpage').toggleClass('hide')
        $('body').addClass('overflow')
    })

    $('.close-menu').on('click', function () {
        $('.mobile-menu').removeClass('active')
        $('.overlay').removeClass('show')
        $('.fullpage').removeClass('hide')
        $('body').removeClass('overflow')
    })

    $('.overlay, .mobile-list-item__1, .mobile-list-item-menu').on('click', function () {
        $('.mobile-menu').removeClass('active')
        $('.overlay').removeClass('show')
        $('.fullpage').removeClass('hide')
        $('body').removeClass('overflow')
    })  
})


document.body.onkeydown = function (e) {
    if (e.keyCode == 27) {
        $('.mobile-menu').removeClass('active');
        $('.burger-icon').removeClass('active');
        $('.overlay').removeClass('show');
        $('.fullpage').removeClass('hide');
        $('.modal-overlay').removeClass('show');
        $('.wrap-modal').removeClass('show');
        $('.modal-window').removeClass('show');
        $('body').removeClass('overflow')
        $('.input, .input-modal').removeClass('error')
    }
};


// вкладки в меню
$('.mobile-content').not(':first').hide();
    $('.mobile-tab').on('click', function () {
        $('.mobile-tab').removeClass('active').eq($(this).index()).addClass('active');
        $('.mobile-content').hide().eq($(this).index()).fadeIn('500');
    })


// аккордион в млюильном меню
// $('.mobile-list__1').hide()
// $('.mobile-list-item').on('click', function () {
//     if ($('.mobile-list').hasClass('one')) {
//         $('.mobile-list-item').not($(this)).removeClass('active');
//         $('.mobile-list__1').not($(this).next()).slideUp(300);
//     }
//     $(this).toggleClass('active').next().slideToggle(300);
// });

$('.mobile-list__1').hide()
$('.mobile-list-item').has('ul').addClass('has-children')

$('.mobile-list.one > li').on('click', function () {
    $('.mobile-list.one > li').not($(this)).removeClass('active')
    $('.mobile-list__1').not($(this).children('.mobile-list__1')).slideUp()
    $(this).toggleClass('active').children('.mobile-list__1').slideToggle();
})


// модальное окно
$('.request-btn').on('click', function () {
    $('.modal-overlay').toggleClass('show')
    $('.wrap-modal').toggleClass('show')
    $('.modal-window').toggleClass('show')
})

$('.modal-overlay').on('click', function () {
    $('.modal-overlay').removeClass('show')
    $('.wrap-modal').removeClass('show')
    $('.modal-window').removeClass('show')
    $('.input, .input-modal').removeClass('error')
})

$('.close-modal').on('click', function () {
    $('.modal-overlay').removeClass('show')
    $('.wrap-modal').removeClass('show')
    $('.modal-window').removeClass('show')
    $('.input, .input-modal').removeClass('error')
})



// маска для телефона 

var elements = document.querySelectorAll('.input-phone');
for (var i = 0; i < elements.length; i++) {
  new IMask(elements[i], {
    mask: '+{7}(000)000-00-00',
  });
}



$('.form-request').on('submit', function(e) {
    let error = false
    if ($('.input').val() == '') {
        $('.input').addClass('error')
        error = true
        console.log($('.input').val());
    } else if ($('.input').val() > 16) {
        error = true
        $('.input').addClass('error')
        // $('.input').addClass('success')
    } else {
   
    }

    if (error == true) {
        e.preventDefault($('.input').val())
    }
})
$('.input').on('focus', function () {
    $('.input').removeClass('error')
    $('.input').removeClass('success')
})

$('.form-modal-request').on('submit', function(e) {
    let error = false
    if ($('.input-modal').val() == '') {
        $('.input-modal').addClass('error')
        error = true
    } else {
        $('.input-modal').removeClass('error')
        $('.input-modal').addClass('success')
    }

    if (error == true) {
        e.preventDefault()
    }
})


// Плавный переход по ссылкам

$(function () {
    $('a[href^="#"]').on('click', function (e) {
        e.preventDefault();
        $('.top-menu-item a').removeClass('active').filter(this).addClass('active'); 
        var selector = $(this).attr('href'); 
        var h = $(selector);

        $('html, body').animate({
            scrollTop: h.offset().top - 60
        }, 1000);
    });
});






// стрелка scroll-up
$(function () {
    $(window).on('scroll', function () {
        if ($(this).scrollTop() > 300) {
            $('.arrow-up').addClass('active');
        } else {
            $('.arrow-up').removeClass('active');
        }
    });

    $('.arrow-up').on('click', function () {
        $('html, body').animate({
            scrollTop: 0
        }, 1000);
    });
});





// Карта 
var map = L.map('map').setView([55.722101,37.6902542], 13);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

L.marker([55.722101,37.6902542]).addTo(map)
    .bindPopup('Мы ждем Вас!<br> Москва , Волгоградский проспект д.32 к.10 офис 7')
    .openPopup();

    var baseLayers = {
        "Mapbox": mapbox,
        "OpenStreetMap": osm
    };
    
    var overlays = {
        "Marker": marker,
        "Roads": roadsLayer
    };
    
    L.control.layers(baseLayers, overlays).addTo(map);





