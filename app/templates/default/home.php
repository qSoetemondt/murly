<?php $this->layout('layout', ['title' => 'Murly']) ?>

<?php $this->start('main_content') ?>
	<h2>Murlyfication</h2>
	<p>Venez Murlyfier vos URL!</p>
	
	<form action="POST" id="input-murly">
		<input class="form-control input-lg"  type="text" placeholder="coller votre URL">
		<button class="btn btn-default" id="btn-murly" type="submit">Murlyfication</button>
	</form>
	
<?php $this->stop('main_content') ?>
