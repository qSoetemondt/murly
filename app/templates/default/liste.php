<?php $this->layout('layout', ['title' => 'Murly']) ?>

<?php $this->start('main_content') ?>
	<h2>Liste des Url's</h2>
	
	<table class="table table-striped">
  		<tr></tr>
		  <td>ID</td>
		  <td>URL</td>
		  <td>Mini-url</td>
		  <td>Date de création</td>
		<?php foreach ($liste as $list) {?>
			<tr></tr>
			<td> <?= $list['id']?></td>
			<td> <?= $list['url']?></td>
			<td> <a href="<?= "http://murly/".$list['short_url']?>"><?= "http://murly/".$list['short_url']?> </td>
			<td> <?= $list['date_creation'] ?>
			<?php } ?>
  
  
  
	</table>

	
<?php $this->stop('main_content') ?>
