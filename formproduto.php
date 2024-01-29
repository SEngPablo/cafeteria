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
			<form action="cadastroproduto.php" method="post">
				<div class="container-fluid p-0">

					<h1 class="h3 mb-3">Cadastro de Produtos</h1>

					<div class="row">
						<div class="mb-3 col-6">
						<label for="produto" class="form-label">Produto</label>
						<input type="text" class="form-control" id="produto" name="produto" placeholder="Digite o nome do produto">
						</div>

							<div class="mb-3 col-6">
							<label for="descricao" class="form-label">Descrição do produto</label>
							<textarea class="form-control" id="descricao" name="descricao" rows="1"></textarea>
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

					<div class="row">
						<div class="mb-3 col-6">
							<label for="preco" class="form-label">Preço</label>
							<input type="number" class="form-control" name="preco" id="estoque" min="0" max="9999" step="0.01">
						</div>
						
						<div class="mb-3 col-6">
							<label for="estoque" class="form-label">Estoque</label>
							<input type="number" class="form-control" name="estoque" id="estoque" min="0" max="200" step="1">
						</div>
					</div>
										
				</div>
						<div><input type="submit" value="Enviar" class="btn btn-primary"></div>
				</form>
			</main>



			<div class="main">
				<div
					class="table-responsive"
				>
					<table
						class="table table-secondary table-hover"
					>
						<thead>
							<tr class="text-center">
								<th scope="col">ID do Produto</th>
								<th scope="col">Produto</th>
								<th scope="col">Preço</th>
								<th scope="col">Categoria</th>
								<th scope="col">Ações</th>
							</tr>
						</thead>
						<tbody>
							<?php include 'conexao.php';

							$sql = "SELECT * FROM produtos";
							$busca = mysqli_query($conexao, $sql);

							while ($dados = mysqli_fetch_array($busca)){
								$idprodutos = $dados['idprodutos'];
								$produto = $dados['produto'];
								$preco = $dados['preco'];
								$categoria = $dados['categoria'];
							
							?>

								<tr class="text-center">
									<td><?php echo $idprodutos ?></td>
									<td><?php echo $produto ?></td>
									<td><?php echo $preco ?></td>
									<td><?php echo $categoria ?></td>
									<td>
												<!-- Modal trigger button -->
												<button
													type="button"
													class="btn btn-warning btn-lg"
													data-bs-toggle="modal"
													data-bs-target="#modaleditar"
												>
												<i class="fa-solid fa-file-pen"></i>												</button>
												
												<!-- Modal Body -->
												<!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
												<div
													class="modal fade"
													id="modaleditar"
													tabindex="-1"
													data-bs-backdrop="static"
													data-bs-keyboard="false"
													
													role="dialog"
													aria-labelledby="modalTitleId"
													aria-hidden="true"
												>
													<div
														class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm"
														role="document"
													>
														<div class="modal-content">
															<div class="modal-header">
																<h5 class="modal-title" id="modalTitleId">
																	 Editar produto <?php echo $idprodutos ?>
																</h5>
																<button
																	type="button"
																	class="btn-close"
																	data-bs-dismiss="modal"
																	aria-label="Close"
																></button>
															</div>
															<div class="modal-body">Body</div>
															<div class="modal-footer">
																<button
																	type="button"
																	class="btn btn-secondary"
																	data-bs-dismiss="modal"
																>
																	Voltar
																</button>
																<button type="button" class="btn btn-primary">Salvar</button>
															</div>
														</div>
													</div>
												</div>
												
												<!-- Modal trigger button -->
												<button
													type="button"
													class="btn btn-danger btn-lg"
													data-bs-toggle="modal"
													data-bs-target="#modalexcluir"
												>
												<i class="fa-solid fa-trash-can"></i>													</button>
												
												<!-- Modal Body -->
												<!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
												<div
													class="modal fade"
													id="modalexcluir"
													tabindex="-1"
													data-bs-backdrop="static"
													data-bs-keyboard="false"
													
													role="dialog"
													aria-labelledby="modalTitleId"
													aria-hidden="true"
												>
													<div
														class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm"
														role="document">
														<div class="modal-content">
															<div class="modal-header">
																<h5 class="modal-title" id="modalTitleId">
																	Excluir produto <?php echo $idprodutos ?>
																</h5>
																<button
																	type="button"
																	class="btn-close"
																	data-bs-dismiss="modal"
																	aria-label="Close"
																></button>
															</div>
															<div class="modal-body">Deseja excluir o produto?</div>
															<div class="modal-footer">
																<button
																	type="button"
																	class="btn btn-secondary"
																	data-bs-dismiss="modal"
																>
																	Voltar
																</button>
																<button type="button" class="btn btn-danger">Excluir</button>
															</div>
														</div>
													</div>
												</div>
												
												<!-- Optional: Place to the bottom of scripts -->
												<script>
													const myModal = new bootstrap.Modal(
														document.getElementById("modalId"),
														options,
													);
												</script>
												
												</td>
								</tr>

							<?php } ?>

						</tbody>
					</table>
				</div>
				
			</div>






<footer class="footer">
    <?php include 'footer.php' ?>
				
</footer>
		</div>
	</div>

	<script src="js/app.js"></script>

</body>

</html>