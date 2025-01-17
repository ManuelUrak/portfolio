$(document).ready(function(){

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