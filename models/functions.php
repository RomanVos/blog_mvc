<?php

function articles_all($link)
{
	//Запрос
	$query = "SELECT * FROM articles ORDER BY `id` DESC";
	$result = mysqli_query($link, $query);

	if(!$result)
		die(mysqli_error($link));

	//Витягування з БД
	$n = mysqli_num_rows($result);
	$articles = array();
	for($i = 0; $i < $n; $i++){
		$row = mysqli_fetch_assoc($result);
		$articles[] = $row;
	}
	return $articles;
}

function articles_get($link, $id_article)
{
	$query = "SELECT * FROM articles WHERE id=$_GET[id]";
	$result = mysqli_query($link, $query);

	if(!$result)
		die(mysqli_error($link));

	$article = mysqli_fetch_assoc($result);
	return $article;
}

function articles_new($link, $title, $date, $content, $image)
{
	//Підготовка
	$title = trim($title);
	$content = trim($content);
	$image = "img/".$image;
	//Перевірка
	if($title == '')
		return false;

	//Запрос
	$t = "INSERT INTO articles (title, `date`, content, image) VALUES ('%s', '%s', '%s', '%s')";
	$query = sprintf($t, mysqli_real_escape_string($link, $title),
						 mysqli_real_escape_string($link, $date),
						 mysqli_real_escape_string($link, $content),
						 mysqli_real_escape_string($link, $image));
	$result = mysqli_query($link, $query);

	if(!result)
		die(mysqli_error($link));

	return true;
}

function validate($id, $title, $content, $date, $image) {
	$title = trim($title);
	$content = trim($content);
	$date = trim($date);
	$id = (int)$id;
	$image = "img/".$image;

	return [
		'title' => $title,
		'content' => $content,
		'date' => $date,
		'id' => $id,
		'image' => $image
	];
}

function insert_to_articles($link, $data) {
	$sql = "UPDATE articles SET title='%s', `date`='%s', content='%s', image='%s' WHERE id='%d'";
	$query = sprintf($sql, mysqli_real_escape_string($link, $data['title']),
		mysqli_real_escape_string($link, $data['date']),
		mysqli_real_escape_string($link, $data['content']),
		mysqli_real_escape_string($link, $data['image']),
		$data['id']);

	return mysqli_query($link, $query);
}

function save_img($img_path, $data) {
	if(is_uploaded_file($data)) {
		if(move_uploaded_file($data, $img_path)) {
			echo "Sussecfully uploaded your image.";
		}
		else {
			echo "Failed to move your image.";
		}
	}
	else {
		echo "Failed to upload your image.";
	}
}

function articles_edit($link, $id, $title, $date, $content, $image)
{
	if ($_FILES['image']['tmp_name']) {
		save_img(__PATH__ . "/../img/test/{$_FILES['image']['name']}", $_FILES['image']['tmp_name']);
	}
	$result = insert_to_articles($link, validate($id, $title, $content, $date, $image));



	if($result['title'] == '')
		return false;


	if(!$result)
		die(mysqli_error($link));

	return mysqli_affected_rows($link);

}

function articles_delete($link, $id)
{
	$id = (int)$id;
	if($id == 0)
		return false;

	$query = sprintf("DELETE FROM articles WHERE id='%d'", $id);
	$result = mysqli_query($link, $query);

	if(!$result)
		die(mysqli_error($link));

	return mysqli_affected_rows($link);
}

//Обрізання довжини виводу статті
function articles_intro($text, $len = 400)
{
	return mb_substr($text, 0, $len);
}