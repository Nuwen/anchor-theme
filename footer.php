	<footer>
	<div id="footer-container">
	<p><a href="http://leighjohnson.me">Leigh Johnson</a> // <a href="https://github.com/Nuwen">Nuwen</a> @ Github 2014</p>
	<p><a href="http://opensource.org/licenses/MIT">MIT License</a> - go ahead and <a href="https://github.com/Nuwen/anchor-theme">fork it</a></div>
	</footer>
	</main> <!-- cd-main-content -->

	<!-- position: fixed elements cannot be nested in <main> // parent with transition/transform effects -->
	<!-- because Webkit is affected by bug https://bugs.webkit.org/show_bug.cgi?id=110478 -->
	<a href="#" class="go-top icon-arrow-up"></a>

	<div class="alert-bottom">
		<a href="#"><div class="alert-close icon-cancel"></div></a>
		<section>	
			<p>Like this template?</p>
			<a href="https://github.com/Nuwen/brag-sheet/archive/master.zip"><button class="icon-download"></button></a>
		</section>
		<section>
			<p>Buy Leigh a beer?</p>
			<a href="http://leighjohnson.me/donate"><button class="icon-mug"></button></a>
		</section>
		<section><p>Get in touch</p>
		<a href="<?php echo theme_url("/contact"); ?>"><button class="icon-envelope"></button></a></section>
	</div>
	<nav id="cd-lateral-nav">
		<ul class="cd-navigation cd-single-item-wrapper nav-emphasis">
			<?php while(menu_items()): ?>
				<li <?php echo (menu_active() ? 'class="active"' : ''); ?>>
				<a href="<?php echo menu_url(); ?>" title="<?php echo menu_title(); ?>">
					<?php echo menu_name(); ?>
				</a>
				</li>
			<?php endwhile; ?>
		</ul> <!-- cd-single-item-wrapper -->
		<ul class="cd-navigation">
			<li class="item-has-children">
				<a href="#0">Post Categories</a>
				<ul class="sub-menu">
					<?php while(categories()): ?>
							<li>
								<a href="<?php echo category_url(); ?>" title="<?php echo category_description(); ?>">
									<?php echo category_title(); ?>
								</a>
							</li>
					<?php endwhile; ?>
				</ul>
			</li> <!-- item-has-children -->

			<li class="item-has-children">
				<a href="#0">Made With</a>
				<ul class="sub-menu">
					<li><a href="http://anchorcms.com/">Anchor CMS</a></li>
					<li><a href="http://sass-lang.com/">SASS</a></li>
					<li><a href="http://bourbon.io">Bourbon & Neat</a></li>
					<li><a href="https://mixitup.kunkalabs.com/">MixItUp</a></li>
					<li><a href="http://dimsemenov.com/plugins/magnific-popup/">Magnific Popup</a></li>
					<li><a href="http://girlswhocode.com/">X Chromosomes</a></li>
				</ul>
			</li> <!-- item-has-children -->
		</ul> <!-- cd-navigation -->

		<ul class="cd-navigation cd-single-item-wrapper">
			<li><a href="http://leighjohnson.me/donate">Buy Leigh beer</a></li>
			<li><a href="https://github.com/Nuwen/brag-sheet">Fork Me</a></li>
			<li><a href="https://github.com/Nuwen/brag-sheet/archive/master.zip">Download</a></li>
		</ul> <!-- cd-single-item-wrapper -->
		<div class="cd-navigation socials">
		<form id="search" method="post" action="<?php echo search_url(); ?>" class="search"><input type="search" id="term" name="term" placeholder="Type your search..." value="<?php echo search_term(); ?>">
      				</form>
			
			<a href="https://github.com/Nuwen/"><span class="icon-github"></span></a>
			<a href="https://www.facebook.com/nuwen"><span class="icon-facebook"></span></a>
			<a href="http://gleighn.deviantart.com/"><span class="icon-deviantart"></span></a>
			<a href="https://twitter.com/gleighn"><span class="icon-twitter"></span></a>
			
		</div> <!-- socials -->
	</nav>
	<script src="<?php echo theme_url('js/navigation.min.js'); ?>"></script>

	<script>
	$(document).ready(function() {
			// Show or hide the sticky footer buttons
			$(window).scroll(function() {
				if ($(this).scrollTop() > 150) {
					$('.go-top').fadeIn(200);
					//don't display the alert if its been dismissed
					if ($.cookie('alert-bottom') != 'dismissed') {
						$('.alert-bottom').fadeIn(200);
					}
				} else {
					$('.alert-bottom').fadeOut(200);
					$('.go-top').fadeOut(200);
				}
			});

			$('.alert-close').click(function(){
				$('.alert-bottom').fadeOut(200);
				$('.alert-bottom').addClass('dismissed');
				// create a session cookie to store dismissed state
				$.cookie('alert-bottom', 'dismissed', {expires: 7, path: '/'})	
				return false;
			});

			// Animate the scroll to top
			$('.go-top').click(function(event) {
				event.preventDefault();
				
				$('html, body').animate({scrollTop: 0}, 300);
			})


	});
	</script>
	</body>
</html>