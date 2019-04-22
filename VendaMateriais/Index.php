<?php 

require "Produto.php";
require "Venda.php"

$produto = new Produto("Arroz");

$produto->setProduto("Arroz"); //setProduto não existe na classe.
echo $produto1->getProduto; //getProduto não existe na classe.



/*$nome = 'arroz','carro','barco';
	$preco = 10,20000,5000;
	$quantidadeEstoque = 50,3,43;
	$marca = 'São Jorge','saveiro','iate' ;\*/

  ?>
