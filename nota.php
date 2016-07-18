<?php
//includes
require 'header.php';
require 'api-cifra.php';
?>

<div class="container body-container-chord">
	<div class="row">

	<h1>Acorde: <u><?php echo $_GET['nota'].$_GET['type'] ?></u></h1>
		<?php montImageChord($_GET['nota'], $_GET['type']); ?>
		<?php montPageChord($_GET['nota'], $_GET['type']); ?>
	</div>	
</div>

<?php 
require 'footer.php'; 
?>