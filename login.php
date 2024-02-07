<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<?php include 'header.php'?>
</head>

<body class="d-flex align-items-center py-4 bg-body-tertiary">

<div class="container">
   
	<div class="row">
		<div class="col-6">
			<main class="form-signin w-100 m-auto">
				<form action="login.php" method="POST">
					<h1 class="h3 mb-3 fw-normal">Iniciar sessão na Cafeteria</h1>
					
					<div class="form-floating py-2">
						<input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
						<label for="floatingInput">Email</label>
					</div>
					<div class="form-floating py-2">
						<input type="password" class="form-control" id="floatingPassword" placeholder="Password">
						<label for="floatingPassword">Senha</label>
					</div>
					
					<button class="btn btn-custom w-100 py-2" type="submit">Entrar</button>
				</form>
			</main>
		</div>


		<div class="col-6 line-separator">
			<main class="form-signin w-100 m-auto">
				<form action="login.php" method="POST">
					<h1 class="h3 mb-3 fw-normal">Registrar-se</h1>
					
					<div class="form-floating py-2">
						<input type="text" class="form-control" id="nome" name="nome" placeholder="Nome">
						<label for="floatingInput">Nome *</label>
					</div>
					<div class="form-floating py-2">
						<input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
						<label for="floatingInput">Email *</label>
					</div>
					<div class="form-floating py-2">
						<input type="password" class="form-control" id="senha" name="senha" placeholder="Password">
						<label for="floatingPassword">Senha *</label>
					</div>
					<div class="form-floating py-2">
						<input type="password" class="form-control" id="confirmasenha" name="confirmasenha" placeholder="Password">
						<label for="floatingPassword">Confirme a senha *</label>
					</div>
					
					<button class="btn btn-custom w-100 py-2" type="submit">Entrar</button>
				</form>
			</main>
		</div>
	</div>
</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
	<script src="js/app.js"></script>
</body>
</html>