<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Sign up / Login Form</title>
  <link rel="stylesheet" href="css/style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<!DOCTYPE html>
<html>
<head>
	<title>Slide Navbar</title>
	<link rel="stylesheet" type="text/css" href="slide navbar style.css">
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/style.css">




</head>
<body>
	<div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">

			<div class="signup">
				<form action="cadastrar.php" method="POST">
					<label for="chk" aria-hidden="true">Cadastrar-se</label>
					<input type="text" name="username" placeholder="Usuario" required="">
					<input type="email" name="email" placeholder="Email" required="">
					<input type="password" name="password" placeholder="Senha" required="">
					<button>Cadastrar</button>
				</form>
			
			</div>
			<div class="login">
				<form action="logar.php" method="POST">
					<label for="chk" aria-hidden="true">Logar</label>
					<input type="text" name="login-usuario" placeholder="Usuario" required="">
					<input type="password" name="login-senha" placeholder="Senha" required="">
					<button name="login">Entrar</button>
				</form>
			</div>
	</div>
</body>
</html>
<!-- partial -->
  
</body>
</html>
