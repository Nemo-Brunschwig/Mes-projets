<?php
setcookie("admin", "false");
?>
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
</head>
<body>
  <div class="container">
      <h1>Quatrième challenge</h1>
      <h3>Cookies</h3>
      <p>Description : j'aime beaucoup les cookies, et vous ? 🍪</p>

      <?php
      if ($_COOKIE['admin'] === "true"){
          ?>
          <div class="alert alert-success" role="alert">
              Bonjour administrateur 😁<br>flag : c00k13
          </div>
          <?php
      } else {
          ?>
          <div class="alert alert-danger" role="alert">
              Vous êtes pas admin 🤔
          </div>
          <?php
      }
      ?>
  </div>
</body>
</html>
