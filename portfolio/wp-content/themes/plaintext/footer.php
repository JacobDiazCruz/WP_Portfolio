
<script>
	jQuery(document).ready(function($) {
		// header start
		var controller = new ScrollMagic.Controller();
		
		var nav = new ScrollMagic.Scene({
			triggerElement: '.nav'
		})
		.setClassToggle('.nav', 'fade-in')
		.addTo(controller);

		var logo = new ScrollMagic.Scene({
			triggerElement: '.logo'
		})
		.setClassToggle('.logo', 'fade-in')
		.addTo(controller);

		// works images
		var works1 = new ScrollMagic.Scene({
			triggerElement: '.works-img1'
		})
		.setClassToggle('.works-img1', 'fade-in')
		.addTo(controller);

		var works2 = new ScrollMagic.Scene({
			triggerElement: '.works-img2'
		})
		.setClassToggle('.works-img2', 'fade-in')
		.addTo(controller);

		var works3 = new ScrollMagic.Scene({
			triggerElement: '.works-img3'
		})
		.setClassToggle('.works-img3', 'fade-in')
		.addTo(controller);

		var works4 = new ScrollMagic.Scene({
			triggerElement: '.works-img4'
		})
		.setClassToggle('.works-img4', 'fade-in')
		.addTo(controller);

		// works text
		var workstitle = new ScrollMagic.Scene({
			triggerElement: '.home-works-title'
		})
		.setClassToggle('.home-works-title', 'fade-in')
		.addTo(controller);

		var workstitle2 = new ScrollMagic.Scene({
			triggerElement: '.home-works-title2'
		})
		.setClassToggle('.home-works-title2', 'fade-in')
		.addTo(controller);

		var workstitle3 = new ScrollMagic.Scene({
			triggerElement: '.home-works-title3'
		})
		.setClassToggle('.home-works-title3', 'fade-in')
		.addTo(controller);

		var workstitle4 = new ScrollMagic.Scene({
			triggerElement: '.home-works-title4'
		})
		.setClassToggle('.home-works-title4', 'fade-in')
		.addTo(controller);

		// about
		var about = new ScrollMagic.Scene({
			triggerElement: '.about'
		})
		.setClassToggle('.about', 'fade-in')
		.addTo(controller);

		var abouttext = new ScrollMagic.Scene({
			triggerElement: '.about-p'
		})
		.setClassToggle('.about-p', 'fade-in')
		.addTo(controller);


		TweenMax.to(".header-p-2", 1, {
			marginTop: "0px",
			opacity: 1,
			ease: Expo.easeInOut
		});

		TweenMax.to(".nav", 1, {
			delay: -0.5,
			left: "0%",
			ease: Power2.easeInOut
		});
	});
</script>
<?php wp_footer(); ?>
</body>
</html>