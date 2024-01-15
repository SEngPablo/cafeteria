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

					<h1 class="h3 mb-3">Cadastro do cliente</h1>

					<div class="row">
						<div class="col-4">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">Nome</h5>
								</div>
								<div class="card-body">
									<input type="text" name="nome" id="nome" placeholder="Digite o nome do cliente" required>
								</div>
							</div>
						</div>
						<div class="col-4">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">Endereço</h5>
								</div>
								<div class="card-body">
									<input type="text" name="endereco" id="endereco" placeholder="Digite o endereço do cliente" required>
								</div>
							</div>
						</div>
						<div class="col-4">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">Telefone</h5>
								</div>
								<div class="card-body">
									<input type="text" name="telefone" id="telefone" placeholder="(85) 99999-9999" required>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-6">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">Data</h5>
								</div>
								<div class="card-body">
									<input type="datetime-local" name="datacadastro" id="datacadastro" placeholder="Digite o nome do cliente" required>
								</div>
							</div>
						</div>
						<div class="col-6">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">E-mail</h5>
								</div>
								<div class="card-body">
									<input type="text" name="email" id="email" placeholder="Digite o endereço do cliente" required>
								</div>
							</div>
						</div>
						
					</div>
				</div>
				<div style="text-align:center; justify-content:center; display: block; width:100%;"><input type="submit" value="Enviar" class="btn btn-primary"></div>
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