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
			<form action="cadastrocliente.php" method="post" enctype="multipart/form-data">
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
								onkeyup="viaCEP()"
								placeholder="Insira somente números"
							/>
						</div>

					<div class="row">
						<div class="mb-3 col-4">
							<label for="logradouro" class="form-label">Logradouro</label>
							<input
								type="text"
								class="form-control"
								name="logradouro"
								id="logradouro"
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
						<button
					type="submit"
					class="btn btn-primary"				>
					Submit
				</button>
							
				</div>

			</main>

<footer class="footer">
    <?php include 'footer.php' ?>
				
</footer>
		</div>
	</div>

	<script src="js/app.js"></script>

</body>

</html>

<script>
    function viaCEP() {

        var numCep = $("#cep").val();

        var url = "https://viacep.com.br/ws/" + numCep + "/json";

        $.ajax({
            url: url,
            type: "get",
            dataType: "json",

            success: function (dados) {
                console.log(dados);
                $("#uf").val(dados.uf);
                $("#cidade").val(dados.localidade);
                $("#logradouro").val(dados.logradouro);
                $("#bairro").val(dados.bairro);
            }
        })


    }
</script>
<!-- Importação do Jquery Mask -->
<!-- include da importação da mascara dos inputs -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.12/jquery.mask.min.js"></script>
<script type="text/javascript">
    $("#telefone, #celular").mask("(00) 00000-0000"); //000 000 0000 eua
    $('.date').mask('00/00/0000');
    $('.time').mask('00:00:00');
    $('.date_time').mask('00/00/0000 00:00:00');
    $('.cep').mask('00000-000');
    $('.phone').mask('0000-0000');
    $('.phone_with_ddd').mask('(00) 0000-0000');
    $('.phone_us').mask('(000) 000-0000');
    $('.mixed').mask('AAA 000-S0S');
    $('.cpf').mask('000.000.000-00', { reverse: true });
    $('.cnpj').mask('00.000.000/0000-00', { reverse: true });
    $('.money').mask('000.000.000.000.000,00', { reverse: true });
    $('.money2').mask("#.##0,00", { reverse: true });
    $('.ip_address').mask('0ZZ.0ZZ.0ZZ.0ZZ', {
        translation: {
            'Z': {
                pattern: /[0-9]/, optional: true
            }
        }
    });
    $('.ip_address').mask('099.099.099.099');
    $('.percent').mask('##0,00%', { reverse: true });
    $('.clear-if-not-match').mask("00/00/0000", { clearIfNotMatch: true });
    $('.placeholder').mask("00/00/0000", { placeholder: "__/__/____" });
    $('.fallback').mask("00r00r0000", {
        translation: {
            'r': {
                pattern: /[\/]/,
                fallback: '/'
            },
            placeholder: "__/__/____"
        }
    });
    $('.selectonfocus').mask("00/00/0000", { selectOnFocus: true });
</script>


<script type="text/javascript">
    $("#cpfcnpj").keydown(function () {
        try {
            $("#cpfcnpj").unmask();
        } catch (e) { }

        var tamanho = $("#cpfcnpj").val().length;

        if (tamanho < 11) {
            $("#cpfcnpj").mask("999.999.999-99");
        } else {
            $("#cpfcnpj").mask("99.999.999/9999-99");
        }

        // ajustando foco
        var elem = this;
        setTimeout(function () {
            // mudo a posição do seletor
            elem.selectionStart = elem.selectionEnd = 10000;
        }, 0);
        // reaplico o valor para mudar o foco
        var currentValue = $(this).val();
        $(this).val('');
        $(this).val(currentValue);
    });
</script>
