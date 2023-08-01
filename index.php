<!DOCTYPE html>
<html>
	<head>
	<title>Pagina di login</title>
	<meta name="description" content="Pagina di login">
	<meta name="keywords" content="login">
	<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
	
		<?php
				//pre_r($_POST);
				$giusto = 0;
				if (isset($_POST['submit'])){
					if (strtolower($_POST['risposta']) == 'troia') {$giusto=1;} else {$giusto=2;}
				}
				
				if (isset($_POST['reset'])){
					header('Location: index.php');
				}
		?>
		
		<div class="login-box <?php if ($giusto === 1) {echo "verde";} else if ($giusto === 2) {echo "rosso";} else {echo "grigio";} ?>">	
			<div class="login-title"><strong>La mamma di sac<br>secondo fanta e':</strong></div>
			
			<form class="login-text <?php if ($giusto != 0) {echo 'invisible';} ?>" action="" method="POST" autocomplete="off">
				<input type="text" name="risposta" value=""> <input type="submit" name="submit" value="Invia">
			</form>
			
			<?php if ($giusto != 0) {ricomincia();} ?>
			
			<div class="login-title"><strong><?php if ($giusto === 1) {echo "Corretto!";} else if ($giusto === 2) {echo "Sbagliato.";} ?><strong></div>
			
		</div>

	</body>
</html>

<?php

function pre_r($array){
	echo '<pre>';
	print_r($array);
	echo '</pre>';
}

function ricomincia() {
	echo '<form method="POST" class="login-text"><input class="invisible" type="text" name="reset1" value=""><input type="submit" name="reset" value="Ricomincia"></form>';
}
