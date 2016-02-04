<?php 

  if ( get_field('videoaudio_embed') ) {
    include locate_template('page-point-vid.php' );
  } else {
    include locate_template('page-point-alt.php' );
  }

?>