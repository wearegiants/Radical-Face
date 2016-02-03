<?php 

	if ( $post->post_parent == '5' ) {
		include locate_template('page-point.php' );
	} else {
		include locate_template('page-default.php' );
	}

?>