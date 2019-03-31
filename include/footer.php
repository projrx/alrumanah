	<!-- BEGIN FOOTER
================================================== -->
	<section>
	<div class="footer">
		<div class="container animated fadeInUpNow notransition">
			<div class="row">
				
                <div class="col-md-5">
					<h1>Al Rumanah Packaging</h1>
					<p>
						Al Rumanah Packaging & Printing was established to provide packaging & printing solution to middle east market. Quality, low price and on time delivery are key factors which distinguish us from other suppliers. 
						<br>
						Customer satisfaction is kept as a primary driver in our business model, we focus on maintaining quality in affordable price and provide customized solution to different industries according to their requirement.
						<br> We  deal in Products include Corrugated boxes, Cargo boxes, Pizza boxes, Perfume boxes, 3 - 9 ply corrugated sheets, Office and Production Printers, Paper & Plastic bags, Bubble rolls, Tapes, Toners & Cartridges, Printer consumables, Paper, Cardboard etc.
					</p>
				</div>
                <div class="col-md-4">
					<h1>Contact Form</h1>
					<div class="done">
						<div class="alert alert-success">
							<button type="button" class="close" data-dismiss="alert">×</button>
							Your message has been sent. Thank you!
						</div>
					</div>
					<form method="post" action="https://www.wowthemes.net/demo/calypso/contact.php" id="contactform">
						<div class="form">
							<input class="col-md-6" type="text" name="name" placeholder="Name">
							<input class="col-md-6" type="text" name="email" placeholder="E-mail">
                            
                            <input class="col-md-6" type="text" name="phone" placeholder="Phone">
							<input class="col-md-6" type="text" name="subject" placeholder="Subject">
                            
							<textarea class="col-md-12" name="comment" rows="2" placeholder="Message"></textarea>
							<input type="submit" id="submit" class="btn" value="Send">
						</div>
					</form>
				</div>
				<div class="col-md-3">
					<h1>Find Us</h1>
					<div class="footermap">
						<p>
							<strong>Address: </strong> <br> 
                            P-72900, Sharjah, UAE.
						</p>
						<p>
							<strong>Phone: </strong> 050 474 0448
						</p>
						<p>
							<strong>Whatsapp: </strong> 050 763 5908
						</p>
                        
						                        
						<p>
							<strong>Email 1: </strong> <a href="mailto:info@albarkahgroup.com">info@alrumanah.com</a>
						</p>                     
						<p>
							<strong>Email 2: </strong> <a href="mailto:sales@albarkahgroup.com">sales@alrumanah.com</a>
						</p>
                        
                        <p>
							<strong>URL: </strong> www.alrumanah.com
						</p>
						
					</div>
				</div>
				
			</div>
		</div>
	</div>
	<p id="back-top">
		<a href="#top"><span></span></a>
	</p>
	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<p class="pull-left">
						 &copy; Copyright 2019 @ Al Rumanah | All Rights Reserved.
					</p>
				</div>
				<div class="col-md-8">
					<ul class="footermenu pull-right">
						<li>Powered By: <a href="http://www.insideweb.com.pk" target="_blank">InsideWeb</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	</section>
	<!-- /footer section end-->
</div>
<!-- /.wrapbox ends-->
<!-- SCRIPTS, placed at the end of the document so the pages load faster
================================================== -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/plugins.js"></script>
<script src="js/common.js"></script>
<script>
	/* ---------------------------------------------------------------------- */
	/*	Carousel
	/* ---------------------------------------------------------------------- */
	$(window).load(function(){			
		$('#carousel-projects').carouFredSel({
		responsive: true,
		items       : {
        width       : 200,
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
</script>
<script>
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
</script>
<script>
	//CALL PRETTY PHOTO
	$(document).ready(function(){
		$("a[data-gal^='prettyPhoto']").prettyPhoto({social_tools:'', animation_speed: 'normal' , theme: 'dark_rounded'});
	});
</script>
<script>
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
</script>
<script>
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
</script>

<link rel="stylesheet" href="demo/css/style-switcher.css" media="screen"/>
<link rel="stylesheet" href="demo/css/colorpicker.css" media="screen"/>
<script type="text/javascript" src="demo/js/jquery.cookie.js"></script>
<script type="text/javascript" src="demo/js/styleswitch.js"></script>
<script type="text/javascript" src="demo/js/colorpicker.js"></script>
<script type="text/javascript" src="demo/js/switcher.js"></script>


<script>
function popupCenter(url, title, w, h) {
var left = (screen.width/2)-(w/2);
var top = (screen.height/2)-(h/2);
return window.open(url, title, 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width='+w+', height='+h+', top='+top+', left='+left);
}
</script>