<?php
class Cliente
{
    //atributos (caracteristicas da classe)
    private string $nome;
    private int $idade;
    private string $email;
   // metodos setters: responsavel por receber/atribuir dados para propriedades /atributos*/

   //metodo construtor (sempre e executado automaticamente ao criar objeto)
   public function __construct(string $nome, int $idade,string $email)
   {
     $this->setNome($nome);
     $this->setIdade($idade);
     $this->setEmail($email);
   }

   public function verificarIdade():string{
     if ($this->idade < 18) return "menor de idade";
     if ($this->idade < 60) return "adulto";

     return "idoso";
   }

   public function setNome(string $nome): void
   {
         
        $this->nome =$nome;
    
   }
   
   public function setIdade(int $idade): void 
   {
        if($idade <0){
            throw new InvalidArgumentException("idade nao pode ser negativa");
        }
        $this->idade = $idade;
   }

   public function setEmail(string $email): void 
   {    
        if(!filter_var($email, FILTER_VALIDATE_EMAIL) ){
            throw new InvalidArgumentException("e-mail invalido!");
        }
        $this->email = $email;
   }

   //metodos getters: responsaveis por acessar/ler os dados*/

   public function getNome(): string
   {
        return $this->nome;
    
   }

   public function getIdade(): int
   {
        return $this->idade;

   }

   public function getEmail(): string
   {
        return $this->email;
   }

}