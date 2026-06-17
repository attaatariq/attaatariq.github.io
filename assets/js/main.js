(function($) {
	"use strict";
	$(document).ready(function() {
		$('[data-toggle="tooltip"]').tooltip();
		$('.player').mb_YTPlayer();
		var wow = new WOW({
			boxClass: 'wow',
			animateClass: 'animated',
			offset: 0,
			mobile: true,
			live: true
		});
		wow.init();
		$('#gallery-masonary,.blog-masonry').imagesLoaded(function() {
			$('.mix-item-menu').on('click', 'button', function() {
				var filterValue = $(this).attr('data-filter');
				$grid.isotope({
					filter: filterValue
				});
			});
			$('.mix-item-menu button').on('click', function(event) {
				$(this).siblings('.active').removeClass('active');
				$(this).addClass('active');
				event.preventDefault();
			});
			var $grid = $('#gallery-masonary').isotope({
				itemSelector: '.gallery-item',
				percentPosition: true,
				masonry: {
					columnWidth: '.gallery-item',
				}
			});
			$('.blog-masonry').isotope({
				itemSelector: '.blog-item',
				percentPosition: true,
				masonry: {
					columnWidth: '.blog-item',
				}
			});
		});
		$(".popup-link").magnificPopup({
			type: 'image',
		});
		$(".popup-gallery").magnificPopup({
			type: 'image',
			gallery: {
				enabled: true
			},
		});
		$(".popup-youtube, .popup-vimeo, .popup-gmaps").magnificPopup({
			type: "iframe",
			mainClass: "mfp-fade",
			removalDelay: 160,
			preloader: false,
			fixedContentPos: false
		});
		$('.magnific-mix-gallery').each(function() {
			var $container = $(this);
			var $imageLinks = $container.find('.item');
			var items = [];
			$imageLinks.each(function() {
				var $item = $(this);
				var type = 'image';
				if ($item.hasClass('magnific-iframe')) {
					type = 'iframe';
				}
				var magItem = {
					src: $item.attr('href'),
					type: type
				};
				magItem.title = $item.data('title');
				items.push(magItem);
			});
			$imageLinks.magnificPopup({
				mainClass: 'mfp-fade',
				items: items,
				gallery: {
					enabled: true,
					tPrev: $(this).data('prev-text'),
					tNext: $(this).data('next-text')
				},
				type: 'image',
				callbacks: {
					beforeOpen: function() {
						var index = $imageLinks.index(this.st.el);
						if (-1 !== index) {
							this.goTo(index);
						}
					}
				}
			});
		});
		$('.timer').countTo();
		$('.fun-fact').appear(function() {
			$('.timer').countTo();
		}, {
			accY: -100
		});
		$(".service-style-one-item").hover(function() {
			$(this).addClass('active').parent().siblings().find('.service-style-one-item').removeClass('active');
		});
		 const testimonialOneCarousel = new Swiper(".testimonial-style-one-carousel", {
			direction: "horizontal",
			loop: true,
			autoplay: true,
			pagination: {
				el: '.swiper-pagination',
				type: 'bullets',
				clickable: true,
			},
			navigation: {
				nextEl: ".swiper-button-next",
				prevEl: ".swiper-button-prev"
			}
		});
		 const projectDetailsCarousel = new Swiper(".project-details-carousel", {
			loop: true,
			freeMode: true,
			grabCursor: true,
			slidesPerView: 1,
			spaceBetween: 50,
			autoplay: true,
			pagination: {
				el: ".swiper-pagination",
				clickable: true,
			},
			breakpoints: {
				768: {
					slidesPerView: 2,
				},
				1200: {
					slidesPerView: 3,
				},
			},
		});
		let ofsetHeight = document.querySelector(".services-style-one-items");
		if (ofsetHeight) {
			ScrollTrigger.matchMedia({
				"(min-width: 992px)": function() {
					let pbmitpanels = gsap.utils.toArray(".services-style-one-item");
					const spacer = 0;
					let pbmitheight = pbmitpanels[0].offsetHeight + 120;
					pbmitpanels.forEach((pbmitpanel, i) => {
						TweenMax.set(pbmitpanel, {
							top: i * 0
						});
						const tween = gsap.to(pbmitpanel, {
							scrollTrigger: {
								trigger: pbmitpanel,
								start: () => `top bottom-=100`,
								end: () => `top top+=40`,
								scrub: true,
								invalidateOnRefresh: true
							},
							ease: "none",
							scale: () => 1 - (pbmitpanels.length - i) * 0.035
						});
						ScrollTrigger.create({
							trigger: pbmitpanel,
							start: () => "top 140px",
							endTrigger: '.services-style-one-items',
							end: `bottom top+=${pbmitheight + (pbmitpanels.length * spacer)}`,
							pin: true,
							pinSpacing: false,
						});
					});
				},
				"(max-width:1025px)": function() {
					ScrollTrigger.getAll().forEach(pbmitpanels => pbmitpanels.kill(true));
				}
			});
		}
		let upDown_Scroll = document.querySelector(".upDownScrol");
		if (upDown_Scroll) {
			gsap.set(".upDownScrol", {
				yPercent: 80
			});
			gsap.to(".upDownScrol", {
				yPercent: -80,
				ease: "none",
				scrollTrigger: {
					trigger: ".upDownScrol",
					end: "bottom center",
					scrub: 1
				},
			});
		}
		function scrollToTop() {
			var $scrollUp = $("#scrollUp"),
			  $lastScrollTop = 0,
			  $window = $(window);
		
			$window.on("scroll", function () {
			  var st = $(this).scrollTop();
			  $lastScrollTop = st;
			});
		
			$scrollUp.on("click", function (evt) {
			  $("html, body").animate({ scrollTop: 0 }, 400);
			  evt.preventDefault();
			});
		}
		scrollToTop();
		$('#contact-form').on('submit', function(e) {
			e.preventDefault();
			var name = $('#name').val().trim();
			var email = $('#email').val().trim();
			var phone = $('#phone').val().trim();
			var comments = $('#comments').val().trim();
			var $message = $('#message');
			if (!name || !email || !comments) {
				$message.html('<div class="alert-msg error">Please fill in name, email, and message.</div>').slideDown();
				return;
			}
			var subject = encodeURIComponent('Portfolio Contact from ' + name);
			var body = encodeURIComponent(
				'Name: ' + name + '\nEmail: ' + email + '\nPhone: ' + (phone || 'N/A') + '\n\nMessage:\n' + comments
			);
			window.location.href = 'mailto:attaatariq@gmail.com?subject=' + subject + '&body=' + body;
			$message.html('<div class="alert-msg success">Your email client should open shortly. If not, please email attaatariq@gmail.com directly.</div>').slideDown();
		});
		$('a[href^="#"]').on('click', function(e) {
			var href = this.getAttribute('href');
			if (href.length <= 1) return;
			var target = $(href);
			if (target.length) {
				e.preventDefault();
				$('html, body').animate({ scrollTop: target.offset().top - 80 }, 600);
				$('.side').removeClass('on');
				$('.overlay-screen').removeClass('opened');
			}
		});
		$('.simple-menu-list a[href^="#"]').on('click', function() {
			$('.close-side').trigger('click');
		});
	});
	$(window).scroll(function() {
		let background_Zoom = document.querySelector("#js-hero");
		if (background_Zoom) {
			var scroll = $(window).scrollTop();
			$("#js-hero").css({
				width: (100 + scroll / 18) + "%"
			})
		}
	});
	const svg = document.getElementById("preloaderSvg");
	const tl = gsap.timeline();
	const curve = "M0 502S175 272 500 272s500 230 500 230V0H0Z";
	const flat = "M0 2S175 1 500 1s500 1 500 1V0H0Z";
	tl.to(".preloader-heading .load-text , .preloader-heading .cont", {
		delay: 1.5,
		y: -100,
		opacity: 0,
	});
	tl.to(svg, {
		duration: 0.5,
		attr: { d: curve },
		ease: "power2.easeIn",
	}).to(svg, {
		duration: 0.5,
		attr: { d: flat },
		ease: "power2.easeOut",
	});
	tl.to(".preloader", {
		y: -1500,
	});
	tl.to(".preloader", {
		zIndex: -1,
		display: "none",
	});
})(jQuery);