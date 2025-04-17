<?php
class Cliente
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
