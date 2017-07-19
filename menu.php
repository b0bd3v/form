<nav>
			<ul class="nav nav-pills">
				<li role="presentation" class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
						Dropdown <span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li>
							<a href="#phpinfo" onclick="loadPhpInfo(this)" data="" >PHP INFO</a>
						</li>
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
			function loadPhpInfo(element){
				$('.template_item').keyup(function(){
					$("#pageContainer").load("phpinfo.php");
				});
			}
			function changeTemplate(element){
				$("#frmTemplate").load( "montaForm.php?form=" + $(element).attr('data'));
			}
		</script>