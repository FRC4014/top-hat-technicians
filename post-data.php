<?php
/*
 * Added to override the "tagged with" functionality on the main theme.
 */

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) {
	exit;
}

if ( !is_page() && !is_search() ) { ?>

	<div class="post-data">
	<?php 
	printf( __( 'Posted in %s', 'responsive' ), get_the_category_list( ', ' ) );
	//the_tags( __( 'Tagged with:', 'responsive' ) . ' ', ', ', '<br />' ); //commented out to remove functionality
	?>
	</div><!-- end of .post-data -->

<?php } //end if
?>

<div class="post-edit"><?php edit_post_link( __( 'Edit', 'responsive' ) ); ?></div>
