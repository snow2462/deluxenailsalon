// ==============================================================
// 
// STANDARD for Responsive
// --script.js--
// 
// ==============================================================

(function($) {
	'use strict';
	$(function() {
		
		// retina
		/*if(window.devicePixelRatio > 1 && window.innerWidth <= 768 ) {
			$('img.retina').each(function() {
				var t = $(this);
				t.attr('src', t.attr('src').replace(/(\.[a-z]+)$/i, "@2x$1"));
			});
		}*/
		
		// change image
		function change_img() {
			$('.img-sp').each(function() {
				var rep_w = 768,
					win_w = parseInt(window.innerWidth||document.documentElement.clientWidth);
				if(win_w > rep_w) {
					$(this).attr('src', $(this).attr('src').replace('_sp', '_pc'));
					$(this).attr('srcset', $(this).attr('srcset').replace('_sp', '_pc'));
				}
				else {
					$(this).attr('src', $(this).attr('src').replace('_pc', '_sp'));
					$(this).attr('srcset', $(this).attr('srcset').replace('_pc', '_sp'));
				}
			});
		}
		change_img();
		
		$(window).resize(function() {
			change_img();
		});
		
		// fixed header
		$(window).scroll(function() {
			var $scrollTop = $(window).scrollTop();
			var $bar = $('.header-bar');
			if ($scrollTop > $('#keyv').offset().top && $scrollTop + $bar.outerHeight() < $('#contact').offset().top) {
				$bar.addClass('fixed');
			} else {
				$bar.removeClass('fixed');
			}
		});
		
		$('.bounce-in').on('inview', function(event, isInView, visiblePartX, visiblePartY) {
            if (isInView) {
                $(this).stop().addClass('hvr');
            }
			else {
                $(this).stop().removeClass('hvr');
			}
        });
		
		// anchor link
		$('a[href^="#"]').on('click', function() {
			var target = this.hash;
			if(target == '') {
				$('html, body').stop().animate({
					'scrollTop': 0
				}, 500, 'swing');
			}
			else {
				var $target = $(target);
				$('html, body').stop().animate({
					'scrollTop': $target.offset().top
				}, 500, 'swing');
			}
			return false;
		});

		$('.keyv-box').ready(function(){
			$('.keyv-box .price-keyv p').addClass('show');
		})
		
		// calling tel
		$(document).ready(function() {
			var ua = navigator.userAgent;
			if(ua.indexOf('iPhone') > 0 || ua.indexOf('Android') > 0) {
				$('.tel').each(function() {
					$('a', this).css('pointer-events', 'auto');
				});
			}
			else {
				$('.tel').each(function() {
					$('a', this).css('pointer-events', 'none');
				});
			}			
		});
	});
})(jQuery);