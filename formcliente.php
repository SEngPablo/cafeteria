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
						<div class="mb-3 col-6">
							<label for="nome" class="form-label">Nome</label>
							<input
								type="text"
								class="form-control"
								name="nome"
								id="nome"
								placeholder="Digite o nome do cliente"
							/>
						</div>
						<div class="mb-3 col-6">
							<label for="" class="form-label">Email</label>
							<input
								type="email"
								class="form-control"
								name="email"
								id="email"
								placeholder="Digite o e-mail no formato abc@mail.com"
							/>
						
						</div>
						
						
					</div>

					<div class="row">
						<div class="mb-3 col-4">
							<label for="" class="form-label">Telefone</label>
							<input
								type="text"
								class="form-control"
								name="telefone"
								id="telefone"
								placeholder="(99) 9 8800-8008"
							/>
						</div>
						<div class="mb-3 col-4">
							<label for="cpfcnpj" class="form-label">CPF/CNPJ</label>
							<input
								type="text"
								class="form-control"
								name="cpfcnpj"
								id="cpfcnpj"
								placeholder="Insira somente números"
							/>
						</div>
						<div class="mb-3 col-4">
							<label for="cep" class="form-label">CEP</label>
							<input
								type="text"
								class="form-control"
								name="cep"
								id="cep"
								maxlength="8"
								onkeyup="viacep()"
								placeholder="Insira somente números"
							/>
						</div>

					<div class="row">
						<div class="mb-3 col-4">
							<label for="rua" class="form-label">Logradouro</label>
							<input
								type="text"
								class="form-control"
								name="rua"
								id="rua"
								placeholder="Insira o logradouro"
							/>
						</div>
						<div class="mb-3 col-2">
							<label for="numero" class="form-label">Nº</label>
							<input
								type="text"
								class="form-control"
								name="numero"
								id="numero"
								placeholder="Insira o Nº"
							/>
						</div>
						<div class="mb-3 col-3">
							<label for="complemento" class="form-label">Complemento</label>
							<input
								type="text"
								class="form-control"
								name="complemento"
								id="complemento"
								placeholder="Insira o complemento"
							/>
						</div>
						<div class="mb-3 col-3">
							<label for="bairro" class="form-label">Bairro</label>
							<input
								type="text"
								class="form-control"
								name="bairro"
								id="bairro"
								placeholder="Insira o bairro"
							/>
						</div>
						</div>
					</div>

					<div class="row">
						<div class="mb-3 col-4">
							<label for="cidade" class="form-label">Cidade</label>
							<input
								type="text"
								class="form-control"
								name="cidade"
								id="cidade"
								placeholder="Insira o logradouro"
							/>
						</div>
						<div class="mb-3 col-4">
							<label for="uf" class="form-label">Estado</label>
							<input
								type="text"
								class="form-control"
								name="uf"
								id="uf"
								placeholder="Insira o Estado"
							/>
						</div>
						<div class="mb-3 col-4">
							<label for="imagem" class="form-label">Logo/Imagem pessoal</label>
							<input
								type="file"
								class="form-control"
								name="imagem"
								id="imagem"
								placeholder="Insira sua imagem"
							/>
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