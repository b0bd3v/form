<input type="hidden" name="form" value="<?php echo $_GET['form']; ?>">
<?php 
	
	$arquivo = file_get_contents("templates/" . $_GET['form']);

	preg_match_all('/{{[a-zA-Z0-9]+}}/', $arquivo, $valores);

	foreach ($valores[0] as $key => $tag) {
		

		if($tag == '{{loop}}'){
			$in_loop = true;
			$first_item_loop = true;
		}elseif($tag == '{{endloop}}'){
			$last_item_loop = true;
		}

		?>

		<?php if($in_loop == true && $first_item_loop == true): ?>
			<div class="row">
				<div class="container">
					<br><br>
					Loop <br>
		<?php endif;?>
		<?php
			$first_item_loop = false;
		?>
		<?php if($in_loop == true): ?>
			<div class="form-group">
		<?php endif;?>
				<?php if(!Tag::isReserved())?>
					<label class="sr-only" for="inlineFormInput"><?php echo $tag; ?></label>
					<input
						style="margin-top: 12px"
						type="text"
						onchange="refreshTemplate(this);"
						onpaste="this.onchange();" oninput="this.onchange();"
						class="form-control mb-2 mr-sm-2 mb-sm-0 template_item" placeholder="<?php echo $tag ?>" name="<?php echo $tag ?>" value="<?php echo $_GET['' . $tag . '']; ?>">
				<?php endif; ?>
		<?php if($in_loop == true): ?>
			</div>
		<?php endif;?>

		<?php if($in_loop == true && $last_item_loop == true): ?>

				<a onclick="" class="btn btn-primary" role="button"><i class="glyphicon glyphicon-plus"></i></a>

				</div>
			</div>
		<?php endif;?>

		<?php
		$last_item_loop = false;
		if($tag == '{{endloop}}'){
			$in_loop = false;
		}
	}


?>

<br><br>
<input type="submit" name="" value="Gerar" class="btn btn-primary btn-lg">


<?php 
$file = $arquivo;
foreach ($_GET as $key => $tag) {
	$file = str_replace('' . $key . '', $tag, $file); 
}
?>
<br>
<br><br><br>
<pre>
	<?php echo $file; ?>
</pre>