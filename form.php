<?php
?>
<html>
<head>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
		<br><br>
		<nav>
			<ul class="nav nav-pills">
				<li role="presentation" class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
						Dropdown <span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
					</ul>
				</li>
				<li role="presentation">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
						Template <span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<?php foreach($templates as $template ):?>
							<?php 
								if($template == '.' || $template == '..'){
									continue;
								}
								?>	
							<li>
								<a href="#template_<?php echo $template; ?>" onclick="changeTemplate(this)" data="<?php echo $template; ?>" ><?php echo $template; ?></a>
							</li>
						<?php endforeach;?>
					</ul>
				</li>
			</ul>
		</nav>
		<script type="text/javascript">
			function changeTemplate(element){
				$("#frmTemplate").load( "montaForm.php?form=" + $(element).attr('data'));
			}
			function refreshTemplate(element){
				// $('.template_item').keyup(function(){
				// 	$("#frmTemplate").load( "montaForm.php?form=" + $("input[name=form]").val());
				// });
			}
		</script>

		<form id="frmTemplate" class="form-inline">
			<?php include "montaForm.php";?>
		</form>
	</div>
</body>
</html>

