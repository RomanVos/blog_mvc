<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Блог про кондиціонери та кліматичне обладнання</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<body>
	<div class="container">
		<h1>Блог про кондиціонери та кліматичне обладнання</h1>
		<a href="../index.php">На головну</a>
		<div class="article">
			<h3> <?=$id_article['title']?> </h3>
			<em>Опубліковано: <?=$id_article['date']?> </em>
			<img src="<?=$id_article['image']?>" alt="inverter" align="left" width="28%">
			<p> <?=$id_article['content']?></p>
		</div>

		<footer>
			<p>Блог про кондиціонери та кліматичне обладнання<br>Copyright &copy; 2020</p>
		</footer>
	</div>
	
</body>
</html>