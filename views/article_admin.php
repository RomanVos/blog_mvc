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
		<div>
			<p><a href="../index.php">На головну</a></p>
				<form method="post" action="index.php?action=<?=$_GET['action']?>&id=<?=$_GET['id']?>">

					<b>Назва статті</b>			
						<input type="text" name="title" value="<?=$article['title']?>" class="form-control" autofocus required>

					<b>Дата</b>			
					<input type="date" name="date" value="<?=$article['date']?>" class="form-control" required>

					<b>Текст статті</b>			
					<textarea class="form-control" name="content" required><?=$article['content']?>
					</textarea>

					<input type="file" name="image" value="Вибрати фото" multiple accept="image/*,image/jpeg">
				<p><input type="submit" value="Зберегти" class=""></p>
			</form>
		</div>

		<footer>
			<p>Блог про кондиціонери та кліматичне обладнання<br>Copyright &copy; 2020</p>
		</footer>
	</div>
	
</body>
</html>