$(function(){
	if ($('#searchpage').size() > 0) {
		searchpage.init('#searchpage');
	}
	if ($('#znajdz-uczelnie-mini').size() > 0) {
		searchpage.init('#znajdz-uczelnie-mini');
	}
});

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
			if ($('#carousel-projects_services').size() > 0) {	
				$('#carousel-projects_services').carouFredSel({
					responsive: true,
					items       : {
			        width       : 200,
			        height      : 150,
			        visible     : {
			            min         : 1,
			            max         : 4
			        }
			    },
					width: '200px',
					height: '150px',
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
			}
			if ($('#carousel-projects').size() > 0) {		
				$('#carousel-projects').carouFredSel({
					responsive: true,
					items       : {
			        width       : 200,
			        height      : 380,
			        visible     : {
			            min         : 1,
			            max         : 4
			        }
			    },
				width: '200px',
				height: '380px',
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
			}
			if ($('#carousel-projects_gallery').size() > 0) {		
				$('#carousel-projects_gallery').carouFredSel({
					responsive: true,
					items       : {
			        width       : 250,
			        height      : 210,
			        visible     : {
			            min         : 1,
			            max         : 4
			        }
			    },
				width: '250px',
				height: '200px',
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
			}
			if ($('#carousel-projects_uni').size() > 0) {	
				$('#carousel-projects_uni').carouFredSel({
				responsive: true,
				items       : {
		        width       : 150,
		        height      : 350,
		        visible     : {
		            min         : 1,
		            max         : 4
		        }
		    },
				width: '150px',
				height: '350px',
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
			}
		});
		//CALL PRETTY PHOTO
		$(document).ready(function(){
			$("a[data-gal^='prettyPhoto']").prettyPhoto({social_tools:'', animation_speed: 'normal' , theme: 'dark_rounded'});
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

		//MASONRY
		$(document).ready(function(){
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

		/* ---------------------------------------------------------------------- */
	/*	Accordion 1
	/* ---------------------------------------------------------------------- */
	/*!
	*/
	$(document).ready(function()
	{
	//Add Inactive Class To All Accordion Headers
	$('.accordion-header').toggleClass('inactive-header');
	//Set The Accordion Content Width
	var contentwidth = $('.accordion-header').width();
	$('.accordion-content').css({'width' : contentwidth });
	//Open The First Accordion Section When Page Loads
	$('.accordion-header').first().toggleClass('active-header').toggleClass('inactive-header');
	$('.accordion-content').first().slideDown().toggleClass('open-content');
	// The Accordion Effect
	$('.accordion-header').click(function () {
		if($(this).is('.inactive-header')) {
			$('.active-header').toggleClass('active-header').toggleClass('inactive-header').next().slideToggle().toggleClass('open-content');
			$(this).toggleClass('active-header').toggleClass('inactive-header');
			$(this).next().slideToggle().toggleClass('open-content');
			if($(this).is('#lokalizacja')){
			    initialize();
			}
		}
		else {
			$(this).toggleClass('active-header').toggleClass('inactive-header');
			$(this).next().slideToggle().toggleClass('open-content');
		}
	});
	return false;
	});

	/* ---------------------------------------------------------------------- */
	/*	Tabs1&2
	/* ---------------------------------------------------------------------- */
	$(document).ready(function () {
		$('#horizontalTab').easyResponsiveTabs({
			type: 'default', //Types: default, vertical, accordion           
			width: 'auto', //auto or any width like 600px
			fit: true   // 100% fit in a container
		});
		$('#verticalTab').easyResponsiveTabs({
			type: 'vertical',
			width: 'auto',
			fit: true
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

var searchpage = {
	init: function(tel) {
		searchpage.tel = $(tel);
		var x_typ = {
			autocomplete:true,
			sel:'input[name="typ"]',
			selDataFromId:'input[name="id_typ"]',
			def:'TYP',
			cfg:{
				source:[
					{label:'Studia licencjackie',value:'1'},
					{label:'Studia inżynierskie',value:'2'},
					{label:'Studia magisterskie',value:'3'},
					{label:'Studia podyplomowe',value:'4'}
				],
				minLength: 0
			}
		};
		var x_tryb = {
			autocomplete:true,
			sel:'input[name="tryb"]',
			selDataFromId:'input[name="id_tryb"]',
			def:'TRYB',
			cfg:{
				source:[
					{label:'Stacjonarne',value:'1'},
					{label:'Niestacjonarne',value:'2'}
				],
				minLength: 0
			}
		};
		var x_kierunek = {
			autocomplete:true,
			sel:'input[name="kierunek"]',
			selDataFromId:'input[name="kierunek_id"]',
			def:'KIERUNEK',
			cfg:{
				source:searchpage.getKierunki,
				minLength: 1
			}
		};
		var x_jezyk = {
			autocomplete:true,
			sel:'input[name="jezyk"]',
			selDataFromId:'input[name="jezyk_id"]',
			def:'JĘZYK',
			cfg:{
				source:searchpage.getJezyki,
				minLength: 1
			}
		};
		var x_wojewodztwo = {
			autocomplete:true,
			sel:'input[name="wojewodztwo"]',
			selDataFromId:'input[name="id_wojewodztwo"]',
			def:'WOJEWÓDZTWO',
			cfg:{
				source:searchpage.getWojewodztwa,
				minLength: 0
			}
		};
		var x_miasto = {
			autocomplete:true,
			sel:'input[name="miasto"]',
			def:'MIASTO',
			cfg:{
				source:searchpage.getMiasta,
				minLength: 0
			}
		};
		var x_slowo = {
			autocomplete:false,
			sel:'input[name="slowo"]',
			def:'SŁOWO KLUCZOWE',
		};
		//searchpage.setDataFromHidden();
		searchpage.cfg = [
			x_typ,
			x_tryb,
			x_kierunek,
			x_wojewodztwo,
			x_miasto,
			x_slowo,
			x_jezyk
		];
		for (var i in searchpage.cfg) {
			var ti = searchpage.cfg[i];
			var tg = $(ti.sel);
			if (tg.size() === 0) continue;
			//console.log('setCfg',ti);
			tg.data('cfg',ti);
			tg.bind('blur',searchpage.triggerBlur);
			tg.bind('click',searchpage.triggerClick);
			if (ti.autocomplete) {
				tg.autocomplete(ti.cfg);
				var idVal = 'selDataFromId' in ti ? $(ti.selDataFromId).val() : '';
				//console.log(idVal);
				if (idVal !== '') {
					//console.log(typeof ti.cfg.source);
					switch (typeof ti.cfg.source) {
						case "function":
							ti.cfg.source({term:'',idVal:idVal,ti:ti},searchpage.setDefaultFromFunction);
							break;
						case "object":
							tg.val(ti.cfg.source[idVal-1].label);
							break;
					}
				}
				tg.bind('autocompleteselect',searchpage.triggerSelect);
			}
			if ($(tg).is('.kieronly')) ti.def = 'SZUKAJ KIERUNKU';
			if (tg.val().length === 0) tg.val(ti.def);
		}
	},
	setDefaultFromFunction: function(r,d) {
		for (var i in r) {
			if (r[i].value == d.idVal) {
				$(d.ti.sel).val(r[i].label);
				return;
			}
		}
	},
	getJezyki: function(d,c) {
		var txt = d.term;
		$.ajax({
			type: "POST",
			url: "/universities/ajax/wczytaj-kierunki-3.html",
			data: {txt:txt},
			dataType: "json",
			success:function(r){
				c(r,d);
			}
		});
	},
	getKierunki: function(d,c) {
		var txt = d.term;
		$.ajax({
			type: "POST",
			url: "/courses/ajax/3",
			data: {txt:txt},
			dataType: "json",
			success:function(r){
				c(r,d);
			}
		});
	},
	getMiasta: function(d,c) {
		var woj = $('input[name="id_wojewodztwo"]').val();
		var txt = d.term;
		if (!woj && txt.length === 0) return;
		$.ajax({
			type: "POST",
			url: "/universities/ajax/2",
			data: {txt:txt,wid:woj},
			dataType: "json",
			success:function(r){
				c(r,d);
			}
		});
	},
	getWojewodztwa: function(d,c) {
		var txt = d.term;
		$.ajax({
			type: "POST",
			url: "/universities/ajax/1",
			data: {txt:txt},
			dataType: "json",
			success:function(r){
				c(r,d);
			}
		});
	},
	setDataFromHidden: function() {
		searchpage.tel.find('.znajdz-uczelnie :hidden').each(function(){
			var tn = this.name.match(/\[(.+)\]/)[1];
			searchpage.setDataParams(tn,this.value);
		});
	},
	setDataParams: function(_param,_data) {
		searchpage.tel.find('.znajdz-uczelnie input[name="'+_param+'"]').val(_data);
	},
	triggerSelect: function (e,sel) {
		var tg = e.target;
		var vl = sel.item.value;
		var cfg = $(tg).data('cfg');
		$(cfg.selDataFromId).val(sel.item.value);
		$(cfg.sel).val(sel.item.label);
		e.preventDefault();
		if (tg.name === 'wojewodztwo]') {
			$('input[name="miasto"]').val('');
			$('input[name="miasto"]').trigger('blur');
		}
		if ($(tg).is('.kieronly')) {
			window.location.href = '/kierunek/szukaj-'+vl+'.html';
		}
	},
	triggerBlur: function(e) {
		var tg = e.target;
		var vl = tg.value;
		var cfg = $(tg).data('cfg');
		if (vl === '') tg.value = cfg.def;

		if (!cfg.autocomplete) return;
		if (vl === '') $(cfg.selDataFromId).val('');
	},
	triggerClick: function(e) {
		var tg = e.target;
		var vl = tg.value;
		var cfg = $(tg).data('cfg');
		if (cfg.def === vl) tg.value = '';

		if (!cfg.autocomplete) return;

		//console.log('trigger click');
		if (!tg.value) $(tg).autocomplete("search",tg.value);
	}
}

schowek = function() {
	var x = {};
	x.initialized = false;

	x.init = function() {
		x.load();
		$('.uczelnia-schowek').bind('click',x.eadd);
		$('.schowek-call').bind('click',x.wysun);
	}
	x.show = function() {
		if (!x.initialized) {
			$('body').append($('<div/>').attr('id','schowek'));
			x.jel = $('#schowek');
			x.create();
			$("#schowek .slidec").scrollable({
			});	
			x.initialized = true;
		}
	}
	x.create = function() {
		x.jel.append('<div class="wysun">wysuń schowek</div>');
		x.jel.find('.wysun').click(x.wysun);
		x.jel.append('<div class="menu"><div class="schowaj">schowaj schowek</div><div class="cl"></div><div class="slidec"><div class="slide"></div></div></div>');
		x.jel.find('.schowaj').click(x.schowaj);
		x.smenu = x.jel.find('.menu');
		x.smenu.hide();
	}
	x.schowaj = function() {
		x.smenu.hide();
	}
	x.wysun = function() {
		x.smenu.show();
	}
	x.eadd = function(e) {
		x.add(event.target.getAttribute('rel'));
	}
	x.addItem = function(r) {
		if (r.image !== false) x.smenu.find('.slide').append($('<div class="image"><a href="'+r.link+'"><img src="'+r.image+'" alt="'+r.name+'" /></a><span>usuń</span></div>'));
		else x.smenu.find('.slide').append($('<div class="image"><a href="'+r.link+'">'+r.name+'</a><span>usuń</span></div>'));
		x.smenu.find('.image span').unbind('click',x.usun).bind('click',x.usun);
	}
	x.add = function(_id) {
		var d = {id:_id};
		$.ajax({
			type: "POST",
			url: "/storages/ajax/5",
			dataType: "json",
			data:d,
			success:function(r){
				if (r) {
					x.show();
					x.addItem(r[0]);
					x.wysun();
				}
			}
		});
	}
	x.load = function() {
		$.ajax({
			type: "POST",
			url: "/storages/ajax/6",
			dataType: "json",
			data: {},
			success:function(r){
				if (r) {
					x.show();
					for (var i in r[0].schowek) {
						x.addItem(r[0].schowek[i]);
					}
					hslider();
				}
			}
		});
	}
	x.usun = function(e) {
		var tid = e.target.previousSibling.href.match(/\-([0-9]+)\.html/);
		tid = tid[1];
		$(e.target.parentNode).remove();
		$.ajax({
			type: "POST",
			url: "/storages/ajax/7",
			dataType: "json",
			data: {id:tid},
			success:function(r){
				if (r) {
					x.show();
					for (var i in r[0].schowek) {
						x.addItem(r[0].schowek[i]);
					}
					hslider();
				}
			}
		});
	}
	x.init();
}