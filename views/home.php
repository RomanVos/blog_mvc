
<div class="container">
	<h1>Блог про кондиціонери та кліматичне обладнання</h1>
	<a href="admin">Панель адміністратора</a>

	<?php foreach($articles as $v): ?>
		<div class="article">
			<h3>
				<a href="<?="article.php?id=".$v['id']?>"> <?= $v['title']?></a>
				<img src="<?=$v['image']?>" alt="inverter" width="28%">
			</h3>
			<em>Опубліковано: <?=$v['date']?> </em>
			<p> <?=articles_intro($v['content']) ?></p>
		</div>
	<?php endforeach ?>

	<footer>
		<p>Блог про кондиціонери та кліматичне обладнання<br>Copyright &copy; 2020</p>
	</footer>
</div>
