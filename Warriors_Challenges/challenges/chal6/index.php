<!DOCTYPE html>
<html>
<head>
	<title>Warriors' Challenges</title>
	<meta charset="utf-8">
	<meta name="description" content="Site de challenges de la Warriors' Army ⚔️">
	<link rel="icon" type="image/png" href="../../images/logo.png" />

	<!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
		<script src="index.js"></script>
</head>
<body>
  <div class="container">
    <h1>Sixième challenge</h1>
    <h3>Programmation</h3>
    <p>Description : écrivez une fonction php qui permet de diviser le carré d'un nombre "a" par la racine carré d'un nombre "b", puis le résultat sera multiplié par un nombre "c" élevé au cube ((a² / √b) * c³)<br>Utilisez les variables "$a" pour le nombre "a", "$b" pour le nombre "b" et "$c" pour le nombre "c".</p>

		<form method="POST">
			<div class="form-group">
		    <label for="code">Votre code :</label>
				<br>
				<p>function test($a, $b, $c){</p>
		    <textarea class="form-control" id="code" name="code" rows="3"></textarea>
				<p>}</p>
		  </div>
			<button type="submit" class="btn btn-primary">Envoyer</button>
		</form>

		<?php
		if (isset($_POST['code'])) {
			$code = $_POST['code']
			function test($a, $b, $c, $code)
			{
				$result = eval($code);
				return $result;
			}

			echo test(12, 15, 20);
		}
		?>

  </div>
</body>
</html>
