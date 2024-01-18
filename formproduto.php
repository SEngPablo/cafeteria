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

					<h1 class="h3 mb-3">Cadastro de Produtos</h1>

					<div class="row">
					<div class="mb-3 col-6">
  <label for="produto" class="form-label">
  Produto</label>
  <input type="text" class="form-control" id="produto" placeholder="Digite o nome do produto">
</div>
<div class="mb-3 col-6">
  <label for="descricao" class="form-label">Descrição do produto</label>
  <textarea class="form-control" id="descricao" rows="1"></textarea>
</div>
					</div>

					<div class="mb-3">
						<label for="categoria" class="form-label">Categoria dos produtos</label>
						<select
							class="form-select form-select-lg"
							name="categoria"
							id="categoria"
						>
							<option selected>Escolha uma categoria</option>
							<option value="bebidaquente">Bebida Quente</option>
							<option value="bebidagelada">Bebida Gelada</option>
							<option value="boloesobremesa">Bolo e Sobremesa</option>
							<option value="sanduicheesalgado">Sanduiche e Salgado</option>
						</select>
					</div>

					<div class="mb-3">
						<label for="estoque" class="form-label">Estoque</label>
						<input type="number" class="form-control" name="estoque" id="estoque" min="0" max="200" step="1">
					</div>
					
				</div>
<div style="text-align:center; justify-content:center; display: block; width:100%; margin-top: 10px;"><input type="submit" value="Enviar" class="btn btn-primary"></div>
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