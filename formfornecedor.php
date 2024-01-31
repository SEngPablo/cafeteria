<!DOCTYPE html>
<html lang="pt-br">

<head>

	<?php include 'header.php'?>

<body>
	<div class="wrapper">
        <?php include 'menu.php' ?>
		

		<div class="main">
        <?php include 'topo.php' ?>

		<main class="content">
			<form action="" method="post">
				<div class="container-fluid p-0">

					<h1 class="h3 mb-3">Cadastro do Fornecedor</h1>

					<div class="row">
								<div class="col-6">
									<label for="cadastrofornecedor" class="form-label"></label>
									<div class="input-group mb-3">
										<span class="input-group-text" id="nomeempresa">Empresa</span>
										<input type="text" class="form-control" placeholder="Digite o nome da empresa">
									</div>
								<div class="col-6">
									<label for="cadastrofornecedor" class="form-label"></label>
									<div class="input-group mb-3">
										<span class="input-group-text" id="nomeempresa">Razão social</span>
										<input type="text" class="form-control" placeholder="Digite o nome da empresa">
									</div>
								</div>
							</div>
									<div class="row">
									<div class="input-group mb-3 col-12">
											<span class="input-group-text">Telefones para contato</span>
											<input type="text" aria-label="First name" class="form-control">
											<input type="text" aria-label="Last name" class="form-control">
										</div>
									</div>
							<div class="col-md-6">
								<label for="inputEmail4" class="form-label">E-mail</label>
								<input type="email" class="form-control" id="inputEmail4">
							</div>
							<div class="col-md-6">
								<label for="senha" class="form-label">Senha</label>
								<input type="password" class="form-control" id="senha">
							</div>
							<div class="col-12">
								<label for="endereco" class="form-label">Endereço</label>
								<input type="text" class="form-control" id="endereco" placeholder="Avenida da universidade">
							</div>
							
							<div class="col-md-6">
								<label for="cidade" class="form-label">Cidade</label>
								<input type="text" class="form-control" id="cidade">
							</div>
							<div class="col-md-4">
								<label for="estado" class="form-label">Estado</label>
								<select id="estado" class="form-select">
									<option selected>Escolha...</option>
									<option>...</option>
								</select>
							</div>
							<div class="col-md-2">
								<label for="cep" class="form-label">CEP</label>
								<input type="text" class="form-control" id="inputZip">
							</div>
							
							<div class="col-12">
								<button type="submit" class="btn btn-primary">Cadastrar</button>
							</div>
							
						</div>
						
						
						
					</div>
				</form>
			</main>

<footer class="footer">
    <?php include 'footer.php' ?>
				
</footer>
		</div>
	</div>

	<script src="js/app.js"></script>

</body>

</html>