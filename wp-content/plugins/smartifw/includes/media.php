<?php
function smart_ifw_mime_types( $mimes ){
	$mimes['svg'] = 'image/svg+xml';
	$mimes['ttf'] = 'font/ttf';
	$mimes['woff'] = 'font/woff';
	$mimes['eot'] = 'font/eot';
	return $mimes;
}

?>