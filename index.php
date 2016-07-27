<?php
//includes
require 'header.php';
require 'api-cifra.php';
?>
	<div class="container body-container">	
		<form method="post" action="?nota=ok">
		    <div class="input-field col s6">
  				<select name="search" class="browser-default" required	>
   					<option value="" disabled selected>Selecione o acorde</option>
    				<option value="C">C</option>
    				<option value="Db">Db</option>
    				<option value="D">D</option>
    				<option value="Eb">Eb</option>
    				<option value="E">E</option>
    				<option value="F">F</option>
    				<option value="Gb">Gb</option>
    				<option value="G">G</option>
    				<option value="Ab">Ab</option>
    				<option value="A">A</option>
    				<option value="Bb">Bb</option>
    				<option value="B">B</option>
  				</select>
  			</div>
  			<div class="input-field col s6">
  				<button class="btn waves-effect waves-light" type="submit" name="action">Buscar
    				<i class="material-icons right">send</i>
  				</button>
  			</div>
	  	</form>
		<div class="row">
			<h2>
			<?php 
				if(empty($_POST['search'])){
					echo ' ';
				}else{
					echo 'Acorde: '.$_POST['search'];
				}
			?>
			</h2>
			<h5>
			<?php
				if ( isset( $_GET['nota'] ) && $_GET['nota'] == 'ok' && $_POST['search'] != '' ) {
					montPageHome($_POST['search']);
				}
			?>
			</h5>
		</div>
	</div>

<?php require 'footer.php'; ?>
