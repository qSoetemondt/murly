<?php $this->layout('layout', ['title' => 'Murly']) ?>

<?php $this->start('main_content') ?>
	<h2>Murlyfication</h2>
	<p>Venez Murlyfier vos URL!</p>
	
	<form method="POST" id="input-murly">
		<input class="form-control input-lg" name="url"  type="text" placeholder="coller votre URL">
		<button class="btn btn-default" id="btn-murly" name="submit" type="submit">Murlyfication</button>
	</form>
<?php $this->stop('main_content') ?>
