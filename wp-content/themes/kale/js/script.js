(function($) {
	$(function() {

		var navi_height = 100, height_header = 112;

		$(window).bind('load resize', function(event) {
			if( $(window).width() > 991 ){
				height_header = 112;
				navi_height = 'auto';
			}
			else{
				height_header = $('#header').outerHeight();
				navi_height = $(this).outerHeight() - height_header;
			}
			$('#navi-top').css('height', navi_height);
		});

		$(window).scroll(function(event) {
			if($(window).scrollTop() > 10){
				$('#header').addClass('fixed');
			}else{
				$('#header').removeClass('fixed');
			}
			checkOffset();

			if($(window).scrollTop() > 500){
				$('.pageTop').fadeIn();
			}else{
				$('.pageTop').fadeOut();
			}
		});

		function checkOffset() {
			if($('.pageTop').offset().top + $('.pageTop').height() >= $('#footer').offset().top - 10)
				$('.pageTop').removeClass('fixed');
			if($(document).scrollTop() + window.innerHeight < $('#footer').offset().top)
				$('.pageTop').addClass('fixed');
		}

		$(window).load(function(e) {
			var myhash = location.hash+'Link';
			if (myhash != "Link")
			{
				var offTop = $(location.hash).offset().top;
				$('body, html').stop().animate({scrollTop:offTop - height_header}, 500);
			}
		});


		$(document).ready(function() {
			$(".pageTop a").click(function() {
				$("html, body").animate({ scrollTop : 0 });
				return false;
			});

			$('.hamburger-box').on('click', function(){
				$(this).toggleClass('is-active');
				$('#navi-top, html').toggleClass('is-active');
			});
			
			$('a.anchor-link, #navi-top a').click(function() {
				if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
					var target = $(this.hash);
					target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
					if (target.length) {
						$('html,body').animate({
							scrollTop: target.offset().top - height_header
						}, 1000);
						return false;
					}
				}
			});
			
			$(".hotel.tab a,.section-price .tab a").click(function() {
				
				var elm = $(this);
				
				elm.parent("li")
					.siblings()
					.removeClass("active");
				
				elm.parent("li").addClass("active");
				
				// コンテンツ本体である.tabContentsを一旦隠す
				elm.parents(".tab")
					.next()
					.children(".tabBox")
					.hide();
				
				// htmlにはメニューのa要素href属性に
				// 表示したいボックスのIDを記述する
				// 例） <a href="#tab1"> など
				$(this.hash).fadeIn();
				return false;
			});

			$('.sub-menu').find('li>ul').parent('li').find('> a').addClass('has-sub');
			
			// $('.btn-menu').click(function(e){
			// 	e.preventDefault();
            //
			// 	if($(this).parent('li').find('> ul').hasClass('open')){
			// 		$(this).parent('li').find('> ul').removeClass('open');
			// 	}
			// 	else{
			// 		$(this).parent().siblings('li').children('ul').removeClass('open');
			// 		//$('.list-category li > ul, .tab-menu li > ul, .menu-tour ul').removeClass('open');
			// 		$(this).parent('li').find('> ul').addClass('open');
			// 	}
			// });
			

			$('.has-sub').click(function(e){
				e.preventDefault();
				$(this).parent('li').find('> ul').toggleClass('open');
			});

			$('.country-list').each(function(){
				$(this).slick({
					infinite: true,
					slidesToShow: 5,
					arrows: false,
					autoplay: true,
					responsive: [
						{
							breakpoint: 1024,
							settings: {
								slidesToShow: 4
							}
						},
						{
							breakpoint: 769,
							settings: {
								slidesToShow: 3
							}
						},
						{
							breakpoint: 480,
							settings: {
								slidesToShow: 2
							}
						}
					]
				});
			});

			$('.tour-slider > ul').each(function(){
				$(this).slick({
					infinite: true,
					slidesToShow: 5,
					arrows: true,
					autoplay: true,
					centerMode: true,
					responsive: [
						{
							breakpoint: 1024,
							settings: {
								slidesToShow: 3
							}
						},
						{
							breakpoint: 769,
							settings: {
								slidesToShow: 2
							}
						},
						{
							breakpoint: 480,
							settings: {
								slidesToShow: 1
							}
						}
					]
				});
			});

			$('.tour-list li').click(function(e) {
				var link_list = $('.tour-name a', this).attr('href');
				if(link_list != null) {
					window.location.href = link_list;
				}
			}).on('click','a',function(e) {
				e.stopPropagation();
			});
		});


		var widthScreen = $(window).width();
		var $slider = $('.tour-slider-content');

		$(window).ready(showSliderScreen(widthScreen)).resize(function () {
			var widthScreen = $(window).width();
			showSliderScreen();
		});

		$slider.slick({
			infinite: true,
			slidesToShow: 1,
			arrows: true,
			autoplaySpeed : 4000,
			adaptiveHeight: true,
			asNavFor: '.navi-slider ul',
			fade: true,
			swipe: false
		});

		$slider.on('beforeChange', function(event, slick, currentSlide, nextSlide){
			$('.navi-slider li').removeClass('class active')
			$('.navi-slider li:nth-child('+(nextSlide+1)+')').addClass('active');
		})

		function showSliderScreen(){
			var carousel = $('.navi-slider ul');
			if(!carousel.hasClass('slick-initialized')){
				carousel.slick({
					slidesToShow: 5,
					slidesToScroll: 1,
					asNavFor: '.tour-slider-content',
					focusOnSelect: true,
					responsive: [
						{
							breakpoint: 2000,
							settings: "unslick"
						},
						{
							breakpoint: 1024,
							settings: {
								slidesToShow: 4
							}
						},
						{
							breakpoint: 769,
							settings: {
								slidesToShow: 3,
								centerMode: true,
							}
						},
						{
							breakpoint: 640,
							settings: {
								slidesToShow: 2,
								centerMode: true,
							}
						},
						{
							breakpoint: 480,
							settings: {
								slidesToShow: 1,
								centerMode: true,
							}
						}
					]
				});
			}

			$('.navi-slider li').click(function() {
				$(this).siblings('li').removeClass('active');
				$(this).addClass('active');
				$slider.slick('slickGoTo', $(this).data('index')-1);
			});
		}
		
		/* function load new */
		var flag = 0;
		$( "#btnmorenew").click(function() {			
            if(flag==0)
            {				
				flag=1;
				var totalpost = $('#totalpost').val();
				var offset = $('#offset').val();
				if (parseInt(offset) < parseInt(totalpost)) {
					var bottom_div = $('.grid').innerHeight();
					$('.grid').append("<li class='grid-item li_loading' style='text-align:center;clear: both; position: absolute;background:none !important;border:0px; left:0px; top:"+bottom_div+"px; width:100%; height: 70px;'><img src='../wp-content/themes/jumping-theme/images/common/loading.gif' height='60' width='60' /></li>");
									
					$.ajax({
						type: 'POST',
						url: ajaxurl,
						data: {
							action: 'filter_news',
							"totalpost": totalpost,
							"offset": offset
						},
						success: function (html) {
							if(html!="" && html!=0)
							{	
								var arraydata = html.split("@@--@@");						
								$('.grid .li_loading').remove();											
								$('.grid').append(arraydata[0]).masonry('appended', arraydata[0]);
								setTimeout(function(){
									$('.grid').masonry('reloadItems');
									$('.grid').masonry('layout');						
									$('#offset').val(arraydata[1]);						
									
									if(parseInt(arraydata[1])>=totalpost)
									{
										$( "#btnmorenew").hide();
									}
									flag = 0;
								}, 200);
							}else
							{								
							   $('.grid .li_loading').remove();
                               console.log("Load new error"); 							   
							}
						}
					});
			}	
			}else
			{
				$( "#btnmorenew").hide();
			}
		});
	});
})(jQuery);
