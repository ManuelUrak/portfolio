jQuery(document).ready(function($){

    //Preloader

    let preloader = $('#preloader');
    let progress = $('.progress-bar .progress');

    let totalImages = $('img').length;
    let imagesLoaded = 0;

    $('img').each(function(){
        $('<img>').on('load error', function(){
            imagesLoaded++;
            let percent = (imagesLoaded / totalImages) * 100;
            progress.css('width', percent + '%');

            $('.loading-text').text('Loading...' + Math.round(percent) + '%');

            if(imagesLoaded === totalImages){
                setTimeout(function(){
                    preloader.fadeOut('slow');
                }, 1000);
            }
        }).attr('src', $(this).attr('src'));
    });

    //Smooth scroll behaviour for anchor tags corresponding to a section on the page

    $('a[href^="#"]').on('click', function(e){
        e.preventDefault();

        let target = this.hash;
        let $target = $(target);

        $('html, body').stop().animate({
            'scrollTop': $target.offset().top
        }, 800, 'swing', function(){
            window.location.hash = target;
        });
    });

    //Lazy loading for images even on older browser versions

    let lazyImages = $('.lazy img');
    
    function lazyLoadImages(){
        lazyImages.each(function(){
            if($(this).is(":visible") && $(this).offset().top <= $(window).scrollTop() + $(window).height()){
                let src = $(this).data('src');
                $(this).attr('src', src);
                $(this).removeClass('lazy');
            }
        });
    }

    lazyLoadImages();

    $(window).on('scroll', function(){
        lazyLoadImages();
    });

    $('.lazy img').each(function(){
        let src = $(this).attr('src');
        $(this).attr('data-src', src);
        $(this).attr('src', '');
    });

    //Add a grey background to the image container while the image is loading

    let lazyContainers = $('.lazy');
    let imagesTotal = lazyContainers.length;
    let loadedImages = 0;

    lazyContainers.css('background-color', '#22223B;');

    lazyContainers.each(function(){
        let $this = $(this);
        let img = $this.find('img');

        img.on('load', function(){
            loadedImages++;

            if(loadedImages === imagesTotal){
                lazyContainers.css('background-color', 'transparent');
            }
        });

        let src = img.data('src');

        if(src){
            img.attr('src', src);
            img.removeClass('lazy');
        }
    });

    //Open or close mobile navigation

    let navtoggle = $('.navbar-toggle');
    let mobilenav = $('.site-nav-mobile');
    let header = $('.site-header');

    navtoggle.on('click', function(){
        if(mobilenav.hasClass('active')){
            mobilenav.removeClass('active');
            header.removeClass('navbar-active')
        }else{
            mobilenav.addClass('active');
            header.addClass('navbar-active');
        }
    });

    $('body').on('click', function(event){
        if(!$(event.target).is(mobilenav) && !$(event.target).is(navtoggle)){
            mobilenav.removeClass('active');
            header.removeClass('navbar-active');
        }
    })

    //Sticky navigation

    $(window).scroll(function(){
        if($(window).scrollTop() > 50){
            header.addClass('sticky');
            mobilenav.addClass('sticky');
        }

        if($(window).scrollTop() < 50){
            header.removeClass('sticky');
            mobilenav.removeClass('sticky');
        }
    })

    //Function that checks if an Element is scrolled into view

    function scrolledIntoView(elem){
        if($(elem).length === 0) return false;

        let view_top = $(window).scrollTop();
        let view_bottom = view_top + $(window).height();
        let elem_top = $(elem).offset().top;

        return ((elem_top <= view_bottom) && (elem_top >= view_top));
    }

    //Trigger animation of the skill progressbar

    let skill_section = $('#skills-section');
    let progressbar = $('.progressbar-inner');

    $(window).scroll(function(){
        if(scrolledIntoView(skill_section)){
            progressbar.addClass('animate');
        }
    });

    //Trigger animation of the Services Section if the element is scrolled into view

    let services_section = $('#services-section');
    let services_element = $('.services-content--inner');

    $(window).scroll(function(){
        if(scrolledIntoView(services_section)){
            services_element.addClass('animate');
        }
    })

    //Add an ID the the contact-section

    $('.contact-section').attr('id', 'contact-section');



});