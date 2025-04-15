<?php

class PessoaFisica extends Cliente
{
    private int $idade;
    private string $cpf;

    public function __construct(string $nome, string $email, int $idade, string $cpf)
    {
      //chamamos o construtor da superclasse cliente e passamos para a subclasse os dados nome e email
      parent ::__construct($nome,$email);

      $this->setIdade($idade);
      $this->setCpf($cpf);
    }

    private function setCpf(string $cpf): void
    {
        $this-> cpf= $cpf;
        
    }

    private function getCepf():string 
    {
        return $this-> cpf;
    }

    public function verificarIdade():string{
        if ($this->idade < 18) return "menor de idade";
        if ($this->idade < 60) return "adulto";
   
        return "idoso";
      }
   
    
   
    public function setIdade(int $idade): void 
      {
           if($idade <0){
               throw new InvalidArgumentException("idade nao pode ser negativa");
           }
           $this->idade = $idade;
      }
   
     public function getIdade(): int
      {
           return $this->idade;
      }
   
   
}