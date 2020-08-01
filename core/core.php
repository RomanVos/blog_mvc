<?php

function views($view, $data) {
	extract($data);
	$view = "views/{$view}.php";

	ob_start();
	if (file_exists($view)) {
		require_once $view;
	}
	require_once "views/404.php";

	return ob_get_clean();
}