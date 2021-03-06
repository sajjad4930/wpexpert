<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Wpexpert
 */

get_header();
?>

<section id="banner" class="section generic-banner">
	<div>
		<h1 class="heading">Uh-Oh, We Can't Find That</h1>
	</div>
</section>

<section class="section last-section white gutter">
	<div>
		<div style="text-align: center;">
			<p><strong>Lost? It may be a good idea to start at our <a href="<?php bloginfo('url');  ?>">Home page</a>.</strong></p>
			<p style="max-width: 600px; margin: 0 auto;"><img src="https://www.apptentive.com/wp-content/themes/apptentive/images/404.svg" alt="404 not found"></p>
		</div>
	</div>
</section>

<?php
get_footer();
