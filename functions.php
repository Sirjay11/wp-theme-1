<?php 

require_once('lib/helpers.php');
require_once('lib/enqueue-assets.php');

function after_pagination() {
 echo 'hfjdhsfhs';
}

function after_pagination2() {
 echo 'sdlgjlkdfjglfkd';
}
add_action( '_themename_after_pagination', 'after_pagination' );
add_action( '_themename_after_pagination', 'after_pagination2' );

?>

