<?php get_header(); ?>
<div class="home">
	<div class="header">
		<div class="header-row">
			<p class="header-p-2">A creative designer &amp; <span class="span-text" style="background-image: url('<?php bloginfo('template_url'); ?>/images/text-img.jpg');">developer</span></p>
		</div>
	</div>

	<!-- content 1 start -->
	<div class="content-1" id="works">
		<p class="home-works-h1">SELECTED WORKS</p>
		<div class="home-works">
			<div class="home-works-1">
				<section class="works-section">
					<p class="home-works-title">Alvin Tan Creatives</p>
					<p class="date">02.18.19</p>
					<div class="website-p">
						<div class="line"></div>
						<p class="home-works-p">Website</p>
					</div>
					<a class="launch-a" href="https://alvintancreatives.ml/" target="_blank">LAUNCH SITE +</a>
				</section>
			</div>
			<div class="home-works-2">
				<div class="works-img1" style="background-image: url('<?php bloginfo('template_url'); ?>/images/alvin-work.jpg');"></div>
			</div>
		</div>

		<div class="home-works">
			<div class="home-works-1">
				<section class="works-section">
					<p class="home-works-title2">My Maniwaya Island Tour</p>
					<p class="date">11.05.18</p>
					<div class="website-p">
						<div class="line"></div>
						<p class="home-works-p">Website</p>
					</div>
					<a class="launch-a" href="">LAUNCH SITE +</a>
				</section>
			</div>
			<div class="home-works-2">
				<div class="works-img2" style="background-image: url('<?php bloginfo('template_url'); ?>/images/maniwaya1.jpg');"></div>
			</div>
		</div>

		<div class="home-works">
			<div class="home-works-1">
				<section class="works-section">
					<p class="home-works-title3">GSL Construction</p>
					<p class="date">04.1.19</p>
					<div class="website-p">
						<div class="line"></div>
						<p class="home-works-p">Website</p>
					</div>
					<a class="launch-a" href="https://gslcdc.com/" target="_blank">LAUNCH SITE +</a>
				</section>
			</div>
			<div class="home-works-2">
				<div class="works-img3" style="background-image: url('<?php bloginfo('template_url'); ?>/images/gsl-work.jpg');"></div>
			</div>
		</div>

		<div class="home-works">
			<div class="home-works-1">
				<section class="works-section">
					<p class="home-works-title4">AJMM Architects &amp; Builders</p>
					<p class="date">5.21.18</p>
					<div class="website-p">
						<div class="line"></div>
						<p class="home-works-p">Website</p>
					</div>
					<a class="launch-a" href="https://arkivin.tk/" target="_blank">LAUNCH SITE +</a>
				</section>
				</div>
			<div class="home-works-2">
				<div class="works-img4" style="background-image: url('<?php bloginfo('template_url'); ?>/images/ajmm.jpg');"></div>
			</div>
		</div>
	</div>
	<!-- content 1 end -->

	<!-- about me start -->
	<div class="about" id="about">
		<div class="about-content">
			<p class="about-title">About Me</p>
			<p class="about-p">I'm a Fulltime <span>Software Engineer</span> from Manila focused on UI/UX. I'm very passionate in building digital projects that revolves around in latest features and designs.</p>
		</div>
	</div>
	<!-- about me end -->

	<!-- services start -->
	<div class="services" id="services">
		<p class="services-h1">SERVICES</p>
		<section class="services-flex">
			<div class="services-col">
				<p class="services-title">CMS DRIVEN APPS</p>
				<p class="services-p">Used to enables clients to have full control and access over their applications. We use this technology nowadays to easily update the content of our site, ensure security and administrative priviledges.</p>
			</div>
			<div class="services-col">
				<p class="services-title">UI/UX FOCUSED APPS</p>
				<p class="services-p">Focused on the overall design and user experience. I believe that attracting the client through creative design is one of the main reason on why users visits and decides to stay inside an application.</p>
			</div>
		</section>

		<section class="services-flex">
			<div class="services-col">
				<p class="services-title">BLOG &amp; ECOMMERCE</p>
				<p class="services-p">I use CMS tools and technologies to build Personal Blogs and Ecommerce apps. Time to time update of content and products could become difficult. With this, you can ensure long term stability for your site/application.</p>
			</div>
			<div class="services-col">
				<p class="services-title">STATIC SITES</p>
				<p class="services-p">Website that focuses on Product Advertising, Personal Portfolio, SEO, and engagement to people that doesn't have that much functionality. Different tools and technologies can be used with this one depending on the request.</p>
			</div>
		</section>
	</div>
	<!-- services end -->

	<!-- contact page -->
	<div class="contact" id="contact">
			<div class="contact-col-1">
				<?php if(have_posts()) : ?>
				<?php while(have_posts()) : the_post(); ?>
					<div class="post-content">
						<?php the_content(); ?>
					</div>					
				<?php endwhile; ?>
				<?php else : ?>
				<div class="post"><h2><?php _e('Not Found', 'plaintext'); ?></h2></div>
				<?php endif; ?>		
			</div>
			<div class="contact-col-2">
				<p class="contact-h1">Get in Touch</p>
				<p>Email: carljacobdiazcruz@gmail.com</p>
				<p>+63 9455061297</p>


				<p class="social-links"><a href="https://www.facebook.com/LykosKeyAh" target="_blank">Facebook</a><br/>
				<a href="https://github.com/JacobDiazCruz" target="_blank">Github</a><br/>
				<a href="https://www.linkedin.com/in/jacob-cruz-b3404b165/" target="_blank">LinkedIn</a><br/>
				<a href="https://dribbble.com/JacobCruz" target="_blank">Dribbble</a></p>
			</div>
	</div>
	<!-- contact page end -->


</div>
<?php get_footer(); ?>