<?php
// Exit if accessed directly
if (!defined( 'ABSPATH' ))
	exit;
/**
 * The page for displaying 404 pages (Not Found)
 */
?>
<?php get_header(); ?>

<div id="content-full" class="grid col-940">

	<?php responsive_entry_before(); ?>
	<div id="post-0" class="error404">
		<?php responsive_entry_top(); ?>

		<div class="post-entry">

			<h1 class="title-404">Oh my.</h1>
			<p>You&apos;re not supposed to be here, are you?</p>
			<div style="text-align: center; font-size: 100pt; margin-top: 100px; margin-bottom: 150px;">404</div>
			
		</div><!-- end of .post-entry -->

		<?php responsive_entry_bottom(); ?>
	</div><!-- end of #post-0 -->
	<?php responsive_entry_after(); ?>

</div><!-- end of #content-full -->

<?php get_footer(); ?>
