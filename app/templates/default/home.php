<?php $this->layout('layout', ['title' => 'Murly']) ?>

<?php $this->start('main_content') ?>
	<h2>Murlyfication</h2>
	<p>Venez Murlyfier vos URL!</p>
	<a href="<?= $this->url('liste') ?>" name="liste">Liste </a>
	<form method="POST" id="input-murly">
		<input class="form-control input-lg" name="url"  type="text" placeholder="coller votre URL">
		<button class="btn btn-default" id="btn-murly" name="submit" type="submit">Murlyfication</button>
	</form>
	
	<p>
		<?php
			if(isset($_COOKIE['MurlyCookie'])){
			
			echo $murl['url'];
			echo "<br>";
			echo 'http://murly/'.$murl['short_url'];
			echo "<br>";
			}
		
		?>
	</p>
	
	
	<?php $this->stop('main_content') ?>
	<?php $this->start('scripts')?>
	<script>
		$.getJSON('api/liste', function(data)){
			var items = [];
			console.dir(data);
		$.each(data,function(key , val){
			items.push("<a href=\"http://murly\\" + val.short_url + "\" >http://murly\\" + val.short_url + "</a><br>");
			
		});
		$("<div/>",{
			"class": "my-new-list",
			html: items.join("")
		}).appendTo("body");
		});
	</script>
    <?php $this->stop('scripts')?>
