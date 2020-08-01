<?php

function route($name, $link, $data = []) {
	$controller = "controllers/{$name}_controller.php";
	$model = "models/{$name}_model.php";

	if (file_exists($controller) && file_exists($model)) {
		$function_controller = "{$name}_controller";
		$function_model = "{$name}_model";

		require_once $model;
		require_once $controller;

		if (function_exists($function_controller) && function_exists($function_model)) {
			return call_user_func($function_controller, $link, extract($data));
		}
	} else {
		return false;
	}
}