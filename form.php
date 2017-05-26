<?php 
?>
<html>
<head>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
</head>
<select id="template">
<?php foreach($templates as $template ):?>
	<option value="<?php echo $template; ?>"><?php echo $template; ?></option>
<?php endforeach;?>
</select>
<script type="text/javascript">
	$("#template").change(function(){
		$("#frmTemplate").load( "montaForm.php?form=" + $(this).find(':selected').val());
	});
</script>

<form id="frmTemplate">
	<?php include "montaForm.php";?>
</form>