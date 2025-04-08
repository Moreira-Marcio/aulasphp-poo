<?php
class Cliente
{
    //atributos (caracteristicas da classe)
    public string $nome;
    public int $idade;
    public string $email;

    //metodos (comportament6os da classe)
    public function exibirDados(): void {}
    public function verificarIdade(int $idade): bool
    {
        return true;
    }
}
