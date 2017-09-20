$(function() {
	
	'use strict';

	/*======================SIDEBAR========================*/
	// Left Sidebar
	$('#menu-left').sideNav({
		menuWidth: 300, // Default is 240
		edge: 'left',
		closeOnClick: false // Closes side-nav on <a> clicks
	});
	// Right Sidebar
	$('#menu-right').sideNav({
		menuWidth: 300, // Default is 240
		edge: 'right',
		closeOnClick: false // Closes side-nav on <a> clicks
	});
	/*------------------------------------------------------*/

	/*======================LEFT MENU========================*/
	$('#main-menu li.has-sub > a').on('click', function(){
		$(this).removeAttr('href');
		var element = $(this).parent('li');
		if (element.hasClass('open')) {
			element.removeClass('open');
			element.find('li').removeClass('open');
			element.find('ul').slideUp();
		} else {
			element.addClass('open');
			element.children('ul').slideDown();
			element.siblings('li').children('ul').slideUp();
			element.siblings('li').removeClass('open');
			element.siblings('li').find('li').removeClass('open');
			element.siblings('li').find('ul').slideUp();
		}
	});

	$('#main-menu > ul > li.has-sub > a').append('<span class="fa fa-angle-right"></span>');
	$('#main-menu > ul > li.has-sub > ul > li.has-sub > a').append('<span class="fa fa-angle-double-right"></span>');
	/*------------------------------------------------------*/

	/*======================SLIDER========================*/
	// Featured slider
	$('.featured-slider').slick({
		dots: true,
		arrows: false,
		autoplay: true,
	});

	// Product (thumb) slider
	$('.product-slider').slick({
        dots: true,
        infinite: true,
        speed: 500,
        fade: true,
        slide: 'li',
        cssEase: 'linear',
        centerMode: true,
        slidesToShow: 1,
        variableWidth: true,
        responsive: [{
            breakpoint: 800,
            settings: {
                arrows: false,
                centerMode: false,
                centerPadding: '40px',
                variableWidth: false,
                slidesToShow: 1,
                dots: true
            },
            breakpoint: 1200,
            settings: {
                arrows: false,
                centerMode: false,
                centerPadding: '40px',
                variableWidth: false,
                slidesToShow: 1,
                dots: true

            }
        }],
        customPaging: function (slider, i) {
            return '<button class="tab">' + $('.slick-thumbs li:nth-child(' + (i + 1) + ')').html() + '</button>';
        }
    });
	
	// Product list slider
	$('.product-list-slider').slick({
		slidesToShow: 2,
		slidesToScroll: 1,
		prevArrow: '<span class="prev-arr"><i class="fa fa-chevron-left"></i></span>',
		nextArrow: '<span class="next-arr"><i class="fa fa-chevron-right"></i></span>',
		responsive: [
		{
			breakpoint: 401,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 1
			}
		},
		{
			breakpoint: 1025,
			settings: {
				slidesToShow: 4,
				slidesToScroll: 1
			}
		}]
	});
	/*------------------------------------------------------*/

	/*======================SCROLL TO TOP========================*/
	var winScroll = $(window).scrollTop();
	if (winScroll > 1) {
		$('#to-top').css({bottom:"10px"});
	} else {
		$('#to-top').css({bottom:"-100px"});
	}
	$(window).on("scroll",function(){
		winScroll = $(window).scrollTop();

		if (winScroll > 1) {
			$('#to-top').css({opacity:1,bottom:"30px"});
		} else {
			$('#to-top').css({opacity:0,bottom:"-100px"});
		}
	});
	$('#to-top').on("click", function() {
		$('html, body').animate({scrollTop: '0px'}, 800);
		return false;
	});
	/*------------------------------------------------------*/
	
	// Swipebox gallery
	$(document).swipebox({ selector: '.swipebox' });
	
	// Right sidebar tabs
	$('ul.tabs').tabs();

	/* A materialize framework trigger for open modal by 
	   button class (checkout-shipping.html line 73) */
	$('.modal-trigger').leanModal();

	// An initialize for select element in a form
	$('select').material_select();

});