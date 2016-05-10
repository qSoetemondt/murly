<?php $this->layout('layout', ['title' => 'Murly']) ?>

<?php $this->start('main_content') ?>
	<h2>Liste des Url's</h2>
	<?php 
	foreach ($liste as $list) {
		echo $list['url'];
		echo "<br>";
		echo $list['short_url'];
		echo "<br>";
	}
	?>
	
<?php $this->stop('main_content') ?>
