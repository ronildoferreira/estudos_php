<?php

class Pessoa
{
    private $nome;
    private $idade;
    private $altura;

    public function __construct($nome, $idade, $altura)
    {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->altura = $altura;
    }
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setIdade($idade)
    {
        $this->idade = $idade;
    }

    public function getIdade()
    {
        return $this->idade;
    }

    public function setAltura($altura)
    {
        $this->altura = $altura;
    }

    public function getAltura()
    {
        return $this->altura;
    }



}
    $pessoa = new Pessoa("Ronildo Ferreira da Silva",32, 1.60);
    echo "Meu nome :".$pessoa->getNome();
    echo "<br>";
    echo "Idade :".$pessoa->getIdade();
    echo "<br>";
    echo "Peso: ".$pessoa->getAltura();
    echo "<br>";
    echo "<br>";

    var_dump($pessoa);
    echo "<br>";

?>