<?php
//includes
require 'header.php';
require 'api-cifra.php';
?>

<div class="container body-container-chord">
	<div class="row">

	<h1>Acorde: <u><?php echo $_GET['nota'].$_GET['value'] ?></u></h1>
		<br>
		<h5>Dificuldade:</h5>
		<div class="progress ">
      		<div class="determinate tooltipped" data-delay="50" data-tooltip='<?php montDiffChord($_GET['nota'], $_GET['value']); ?>' style="width: <?php montDiffChord($_GET['nota'], $_GET['value']); ?>"></div>
  		</div>
  		<br>
		<?php montImageChord($_GET['nota'], $_GET['value']); ?>
		<br>
		<?php montPageChord($_GET['nota'], $_GET['value']); ?>
	</div>	
</div>

<?php 
require 'footer.php'; 
?>