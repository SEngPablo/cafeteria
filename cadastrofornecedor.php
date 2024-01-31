<?php 

include 'conexao.php';

$produto = $_POST['produto'];
$descricao = $_POST['descricao'];
$preco = $_POST['preco'];
$categoria = $_POST['categoria'];
$estoque = $_POST['estoque'];


    $sql = "INSERT INTO `estoque`(`produto`, `descricao`, `preco`, `categoria`, `estoque`) VALUES ('$produto','$descricao','$preco','$categoria','$estoque')";

    $inserir = mysqli_query($conexao,$sql);


header('Location: formproduto.php');

?>