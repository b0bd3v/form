<input type="hidden" name="form" value="<?php echo $_GET['form']; ?>">
<?php 
	
	$arquivo = file_get_contents("templates/" . $_GET['form']);

	preg_match_all('/{{[a-zA-Z0-9]+}}/', $arquivo, $valores);

	foreach ($valores[0] as $key => $value) {
		?>
		<br> 
		<br> 
		<?php echo $value; ?>:
		<br> 
		<input type="text" name="<?php echo $value ?>" value="<?php echo $_GET['' . $value . '']; ?>">
		<?php 
	}

?>

<br><br>
<input type="submit" name="" value="Gerar">


<?php 
$file = $arquivo;
foreach ($_GET as $key => $value) {
	$file = str_replace('' . $key . '', $value, $file); 
}
?>
<br>
<br><br><br>
<pre>
	<?php echo $file; ?>
</pre>