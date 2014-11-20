//podświetlenie aktywnej strony w menu
		$("#nav a").each(function () {
			var path = window.location.pathname;
			var href = $(this).attr('href');
			if (href ===  path) {
				$(this).closest('li').addClass('active');
			}
		});  
		/* ---------------------------------------------------------------------- */
		/*	Carousel
		/* ---------------------------------------------------------------------- */
		$(window).load(function(){			
			$('#carousel-projects').carouFredSel({
			responsive: true,
			items       : {
		        width       : 300,
		        height      : 295,
	        visible     : {
	            min         : 1,
	            max         : 4
	        }
	    },
			width: '200px',
			height: '295px',
			auto: true,
			circular	: true,
			infinite	: false,
			prev : {
				button		: "#car_prev",
				key			: "left",
					},
			next : {
				button		: "#car_next",
				key			: "right",
						},
			swipe: {
				onMouse: true,
				onTouch: true
				},
			scroll: {
	        easing: "",
	        duration: 1200
	    }
		});
			});

		//CALL TESTIMONIAL ROTATOR
		$( function() {
			/*
			- how to call the plugin:
			$( selector ).cbpQTRotator( [options] );
			- options:
			{
				// default transition speed (ms)
				speed : 700,
				// default transition easing
				easing : 'ease',
				// rotator interval (ms)
				interval : 8000
			}
			- destroy:
			$( selector ).cbpQTRotator( 'destroy' );
			*/
			$( '#cbp-qtrotator' ).cbpQTRotator();
		} );

		//CALL PRETTY PHOTO
		$(document).ready(function(){
			$("a[data-gal^='prettyPhoto']").prettyPhoto({social_tools:'', animation_speed: 'normal' , theme: 'dark_rounded'});
		});

		//MASONRY
		$(document).ready(function(){
		var $container = $('#content');
		  $container.imagesLoaded( function(){
			$container.isotope({
			filter: '*',	
			animationOptions: {
			 duration: 750,
			 easing: 'linear',
			 queue: false,	 
		   }
		});
		});
		$('#filter a').click(function (event) {
			$('a.selected').removeClass('selected');
			var $this = $(this);
			$this.addClass('selected');
			var selector = $this.attr('data-filter');
			$container.isotope({
				 filter: selector
			});
			return false;
		});
		});

	//ROLL ON HOVER
		$(function() {
		$(".roll").css("opacity","0");
		$(".roll").hover(function () {
		$(this).stop().animate({
		opacity: .8
		}, "slow");
		},
		function () {
		$(this).stop().animate({
		opacity: 0
		}, "slow");
		});
		});

	//PARTNERZY
	$('.nasi-partnerzy .slider').click(function(e){
		// SLIDER CONFIGURATION FOR PARNER LINKS
		var cfg = {
			image_width:2570,
			link_endings:[118,214,559,784,904,1061,1298,1403,1550,1725,1820,1970,2140,2340,2470,2570],
			link_adressess:['http://www.krakow.pl','http://www.bialystok.pl','http://www.lublin.eu/ua','http://www.gdansk.pl','http://www.opole.pl','http://www.olsztyn.com.pl','http://www.rzeszow.pl','http://www.zielona-gora.pl/','http://www.interia.pl/','http://www.notatek.pl/','http://study.lublin.eu/pl/', 'http://www.youngtalentmanagement.pl/YTM/Young_Talent_Management.html','http://www.m-ekspert.pl/','http://www.happinate.com/','http://www.um.kielce.pl/','http://www.happinate.com/'],
		};
		var tg = $(e.target);
		var _x = e.pageX - tg.offset().left;
		var bgp = parseInt(tg.css('background-position').match(/[0-9]+/)[0]);
		var cpos = (_x + (cfg.image_width - bgp % cfg.image_width)) % cfg.image_width;
		for (var i in cfg.link_endings) {
			if (cfg.link_endings[i] > cpos) {
				if (cfg.link_adressess[i]) 
					window.open(cfg.link_adressess[i],'_blank');
				return;
			}
		}
	});