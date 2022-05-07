<?php

function gen_html($path, $args = [] ){
	$found = false;
	$file =  __DIR__ . DIRECTORY_SEPARATOR . $path . '.php';

	if ( file_exists( $file ) ) {
		$found = $file;
	}
	if ( ! $found ) {
		return '';
	}
	if ( is_array( $args ) ){
		extract( $args );
	}
	ob_start();
	include $found;
	$content =  ob_get_clean();
	$dist = __DIR__ . DIRECTORY_SEPARATOR . $path . '.html';
	$dist_file = fopen($dist, "w") or die("Unable to find destination file at: " . $dist);
	fwrite($dist_file, $content);
	fclose($dist_file);
}

function gen_page($path) {
	include('templates/page-header.php');
	gen_html($path);
	include('templates/page-footer.php');
}

gen_page("index");

gen_page("page/about/index");
gen_page("page/contact/index");

gen_page("sample/necoyoad/index");
gen_page("sample/phantasoft-embeddable-image-editor/index");
gen_page("sample/pick-em/index");
gen_page("sample/torch/index");
gen_page("sample/torch-mobile/index");