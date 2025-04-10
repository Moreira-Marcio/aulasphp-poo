<?php
class Cliente
{
    //atributos (caracteristicas da classe)
    private string $nome;
    private int $idade;
    private string $email;
   // metodos setters: responsavel por receber/atribuir dados para propriedades /atributos*/

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