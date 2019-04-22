<?php 

class Produto{
	$nome;
	$preco;
	$quantidadeEstoque;
	$marca;

 	

 	public function __contruct($tmpNome) 
 	{
	$this->nome = $tmpNome; //Implementa mais teu construtor pra fazer ele pegar todos os atributo dos produto e não apenas o nome.
	}

	public function setNome($novoNome){

		$this->nome = $novoNome;
	}
	public function getNome(){

		return $this->nome;
	}
/*
    public function __contruct(dataVenda) 
    {
	
	}
    public function __contruct(produtos) 
    {
	
	}
	public function __contruct(valorPago) 
	{
	
	}
	*/
}

 ?>
