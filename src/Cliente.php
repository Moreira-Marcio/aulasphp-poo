<?php
class Cliente
{
     //atributos (caracteristicas da classe)
     private string $nome;
     private int $idade;
     private string $email;
     // metodos setters: responsavel por receber/atribuir dados para propriedades /atributos*/

     //metodo construtor (sempre e executado automaticamente ao criar objeto)
     public function __construct(string $nome, string $email)
     {
          $this->setNome($nome);        
          $this->setEmail($email);
     }


     public function setNome(string $nome): void
     {

          $this->nome = $nome;
     }



     public function setEmail(string $email): void
     {
          if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
               throw new InvalidArgumentException("e-mail invalido!");
          }
          $this->email = $email;
     }

     //metodos getters: responsaveis por acessar/ler os dados*/

     public function getNome(): string
     {
          return $this->nome;
     }



     public function getEmail(): string
     {
          return $this->email;
     }
}
