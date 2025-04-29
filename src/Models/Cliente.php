<?php

 /* Classe abstrata: não pode ser instanciada.
 Com isso, será possível criar objetos apenas a partir das subclasses. */
 namespace MeuProjeto\Models;
 
 // Usamos o 'use' para indicar a utilização de outras classes/enums que temos
 use MeuProjeto\Enums\Situacao;
 
 // Usamos o 'use' também para indicar a utilização de classes internas do PHP
 use InvalidArgumentException;

//classe abstrata: não pode ser instanciada.
//com isso sera possivel criar objetos apenas a partir da subclasse

abstract class Cliente
{
     //atributos (caracteristicas da classe)
     private string $nome;  
     private string $email;
     private Situacao $situacao;
     // metodos setters: responsavel por receber/atribuir dados para propriedades /atributos*/

     //metodo construtor (sempre e executado automaticamente ao criar objeto)
     public function __construct(
          //definindo situacao inativo como valor padrao para o parametro situacao no construct
          string $nome, string $email, Situacao $situacao = Situacao::INATIVO
          )
     {
          $this->setNome($nome);        
          $this->setEmail($email);
          $this->setSituacao($situacao);
     }

     public function relatorio():string{
          return "<div>
          <h4>{$this->getNome()}</h4>
          <p><b> Contato: </b>{$this->getEmail()}</p>
          </div>";
     }

     // visibilidade protegida :desta forma este metodo ´pode ser usado aqui em cliente(superclasse) e tambem as subclasses 
     // o acesso externo (nonosso caso o index)continua sendo bloqueado
     protected function setSituacao(Situacao $situacao):void {
          $this->situacao =  $situacao;
     }

     public function getSituacao():Situacao{
          return $this->situacao;
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
