<?php
	get_header();

	/* Start the Loop */
	while ( have_posts() ) :
		the_post();
		
		include get_parent_theme_file_path("contents/single.php");

		if ( comments_open() || get_comments_number() ) {
			comments_template(array(
				'reply' => "Responder"
			));
		}

		the_post_navigation(
			array(
				'next_text' =>  "Próximo - %title >",
				'prev_text' =>  "< Anterior - %title",
			)
		);
		
	endwhile; // End of the loop.

	get_footer();
?>