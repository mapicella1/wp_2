<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package storefront
 */
wp_head();
?>
		<div class="col-full">		
		<a class="skip-link screen-reader-text" href="#site-navigation">Skip to navigation</a>
		<a class="skip-link screen-reader-text" href="#content">Skip to content</a>
		<div class="site-branding">
			<a href="http://localhost/website2/" class="custom-logo-link" rel="home" itemprop="url"><img width="229" height="110" src="http://localhost/website2/wp-content/uploads/2018/06/cropped-CGK_Logo_Final-1.jpg" class="custom-logo" alt="First WordPress" itemprop="logo"></a>		</div>
			<?php wp_nav_menu(); ?>
			<!-- <nav id="site-navigation" class="main-navigation" role="navigation" aria-label="Primary Navigation">
		<button class="menu-toggle" aria-controls="site-navigation" aria-expanded="false"><span>Menu</span></button>
			<div class="primary-navigation">
				<ul id="menu-cgk-menu" class="menu nav-menu" aria-expanded="false">
				<li id="menu-item-17" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-7 current_page_item menu-item-17"><a href="http://localhost/website2/">Home</a></li>
				<li id="menu-item-75" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-75"><a href="http://localhost/website2/services/">Services</a></li>
				<li id="menu-item-74" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-74"><a href="http://localhost/website2/blog-2/">Blog</a></li>
				<li id="menu-item-73" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-73"><a href="http://localhost/website2/speaking/">Speaking</a></li>
				<li id="menu-item-72" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-72"><a href="http://localhost/website2/contact-2/">Contact</a></li>
				</ul></div>
		</nav>#site-navigation -->
		</div>
		
		<div class="storefront-primary-navigation"><div class="col-full">		

		</div>
		</div>

	</header><!-- #masthead -->

	<?php
	/**
	 * Functions hooked in to storefront_before_content
	 *
	 * @hooked storefront_header_widget_region - 10
	 * @hooked woocommerce_breadcrumb - 10
	 */
	do_action( 'storefront_before_content' ); ?>

	<div id="content" class="site-content" tabindex="-1">
		<div class="col-full">

		<?php
		do_action( 'storefront_content_top' );
