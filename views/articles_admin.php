<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Блог про кондиціонери та кліматичне обладнання</title>
	<link rel="stylesheet" type="text/css" href="../styles.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<body>
	<div class="container">
		<h1>Блог про кондиціонери та кліматичне обладнання</h1>
		<p><a href="../index.php">На головну</a></p>
			<p><b><a href="index.php?action=add">Додати статтю</a></b></p>

		<table class="admin-table">
		<th>Дата</th>
		<th>Заголовок</th>
		<th>Редагування</th>
		<th>Видалення</th>
	</tr>
	<tr>
		<?php if (is_array($articles)) : ?>
			<?php foreach($articles as $v): ?>
			<td> <?=$v['date']?> </td>
			<td> <?=$v['title']?> </td>
			<td>
				<a href="index.php?action=edit&id=<?=$v['id']?>">Редагувати</a>
			</td>
			<td>
				<a href="index.php?action=delete&id=<?=$v['id']?>">Видалити</a>
			</td>
			<?php endforeach ?>
		<?php endif; ?>
	</tr>
</table>

		<footer>
			<p>Блог про кондиціонери та кліматичне обладнання<br>Copyright &copy; 2020</p>
		</footer>
	</div>
	
</body>
</html>