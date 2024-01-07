$(function () {
    var pathname = window.location.pathname;
    $(window).scroll(function () {
        if ($(window).scrollTop() >= 50) {
            $('.header-top').addClass('fixed');
            if (pathname === "/" && pathname === "index.php" && pathname === "" && pathname === "investors.php" && pathname === "about-us") {
                $('.navbar-brand').html('<img src="./assets/img/dark-logo.svg" alt="logo"/>');
            }
        }
        else {
            $('.header-top').removeClass('fixed');
            if (pathname === "/" && pathname === "index.php" && pathname === "" && pathname === "investors.php" && pathname === "about-us") {
                $('.navbar-brand').html('<img src="./assets/img/light-logo.svg" alt="logo"/>');
            }
        }
    });
    $('.popup-youtube').magnificPopup({
        type: 'iframe',
        iframe: {
            markup: '<div class="mfp-iframe-scaler">' +
                '<div class="mfp-close"></div>' +
                '<iframe class="mfp-iframe" frameborder="0" allow="autoplay"></iframe>' +
                '</div>',
            patterns: {
                youtube: {
                    index: 'youtube.com/',
                    id: 'v=',
                    src: 'https://www.youtube.com/embed/%id%?autoplay=1'
                }
            }
        },
        mainClass: 'mfp-fade',
        removalDelay: 160,
        preloader: false,
        fixedContentPos: true,

    });




    $('.dp-carousel-main').slick({
        slidesToShow: 2.4,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 0,
        speed: 9000,
        cssEase: 'linear',
        pauseOnHover: false,
        arrows: false,
        dots: false,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1.5,
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                }
            }
        ]
    });

    const teamModal = new bootstrap.Modal(document.getElementById('team'));
    $('.biography-btn').on('click', function (e) {
        e.preventDefault();
        var title = $(this).parent().find('.team-title').html();
        var decription = $(this).parent().find('.team-description').html();
        $('#team').find('.modal-title').text(title);
        $('#team').find('.modal-body').html(decription);
        teamModal.show();
    });




    $('.cchat-box').each(function (e) {
        var videoSrc = $(this).find('.getThumbnail').attr('href');
        var videoID = videoSrc.match(/youtube\.com.*(\?v=|\/embed\/)(.{11})/).pop();
        var video_thumbnail = $('<img src="//img.youtube.com/vi/' + videoID + '/maxresdefault.jpg" class="object-fit-contain" alt="Cancervax">');
        $(this).find('.getThumbnail').siblings('.cchat-thumbnail').html(video_thumbnail);
    });


})

//
//   Variables
//
//////////////////////////////////////////////////////////////////////

// Play with this value to change the speed
let tickerSpeed = 1.5;

let flickity = null;
let isPaused = false;
const slideshowEl = document.querySelector('.js-slideshow');


//
//   Functions
//
//////////////////////////////////////////////////////////////////////

const update = () => {
    if (isPaused) return;
    if (flickity.slides) {
        flickity.x = (flickity.x - tickerSpeed) % flickity.slideableWidth;
        flickity.selectedIndex = flickity.dragEndRestingSelect();
        flickity.updateSelectedSlide();
        flickity.settle(flickity.x);
    }
    window.requestAnimationFrame(update);
};

const pause = () => {
    isPaused = true;
};

const play = () => {
    if (isPaused) {
        isPaused = false;
        window.requestAnimationFrame(update);
    }
};


//
//   Create Flickity
//
//////////////////////////////////////////////////////////////////////

flickity = new Flickity(slideshowEl, {
    autoPlay: false,
    prevNextButtons: false,
    pageDots: false,
    draggable: false,
    wrapAround: true,
    selectedAttraction: 0.015,
    friction: 0.25,
    adaptiveHeight: true,
    imagesLoaded: true,
    setGallerySize: false
});
flickity.x = 0;


//
//   Add Event Listeners
//
//////////////////////////////////////////////////////////////////////

slideshowEl.addEventListener('mouseenter', pause, false);
slideshowEl.addEventListener('focusin', pause, false);
slideshowEl.addEventListener('mouseleave', play, false);
slideshowEl.addEventListener('focusout', play, false);

flickity.on('dragStart', () => {
    isPaused = true;
});


//
//   Start Ticker
//
//////////////////////////////////////////////////////////////////////

update();


// window.onresize = function (event) { flickity.resize(); elem.querySelector('.flickity-viewport').style.height = null; };