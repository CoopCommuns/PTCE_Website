<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>

	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="../CSS/styl.css" rel="stylesheet" media="all">

</head>
<body>
<div class="wrapper " style="background-image: url('../images/background_form.jpg');">
  <div id="formContent">
		<div >
		<h2>Connexion</h2>
		</div>

		<!-- Login Form -->
		<form method="POST" action="Verifconnexion.php">
			<input type="text" id="login"  name="email" placeholder="email">
			<input type="password" id="password"  name="mot_de_pass" placeholder="mot de passe">
			<input type="submit"  value="Se connecter" name="connexion">
		</form>

		<!-- Remind Passowrd -->
		<div id="formFooter">
		<p>Pas de compte? <a class="underlineHover" href="inscription.php">S'inscrire</a></p>
		</div>

  </div>
</div>

</body>
</html>