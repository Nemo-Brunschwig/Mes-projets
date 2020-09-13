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
      <h1>Deuxième challenge</h1>
      <h3>P'tite injection SQL</h3>
      <form action="" method="POST">
          <div class="form-group">
              <label for="login">Login</label>
              <input type="text" class="form-control" id="login" name="login" placeholder="Entrez votre login">
          </div>
          <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" id="password" name="password" placeholder="Entrez votre mot de passe">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
      </form>
      <?php
      if (isset($_POST['login'])) {
        include_once '../../passerelles/Pdo_connexion.php';
        include_once '../../passerelles/Pdo_chal2.php';
        $check = Pdo_chal2::connexion($_POST['login'], $_POST['password']);
        if (isset($check[0])){
            echo "<div class=\"container mt-5\"><div class=\"alert alert-success\" role=\"alert\">Bien joué! voici le flag : 0s1r1s</div></div>";
        } else {
            echo "<div class='container mt-5'><div class=\"alert alert-danger\" role=\"alert\">raté 😋</div></div>";
        }
      }
      ?>
  </div>
</body>
</html>
