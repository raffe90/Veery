<?php
	include_once('includes/header.php');
?>
		<div class="row">
			<div id="right-sidebar" class="col col_2">
				<?php
					include_once('includes/left_sidebar.php');
				?>
			</div>

			<div id="content-handler" class="col col_7">
				<h1>Esto es contenido cambiante</h1>
				<p>En cada página este marco cambiara.</p>
			</div>
			
			<div id="left-sidebar" class="col col_3">
				<?php
					include_once('includes/right_sidebar.php');
				?>
			</div>
		</div>
	
<?php
	include_once('includes/footer.php');
?>
