<?php

function home_controller($link) {
	$articles = home_model($link);

	return views('home', ['articles' => $articles]);
}

//Обрізання довжини виводу статті
function articles_intro($text, $len = 400)
{
	return mb_substr($text, 0, $len);
}
