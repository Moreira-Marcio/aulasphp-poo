<?php 
class PessoaJuridica extends Cliente 
{
     private string $cnpj;
     private int $anoFundacao;
     private string $nomeFantasia;

     public function __construct(
        string $nome, string $email, string $cnpj, int $anoFundacao, string $nomeFantasia
     )
     {
        parent:: __construct($nome, $email);

        
        $this->setCnpj($cnpj);
        $this->setAnoFundacao($anoFundacao);
        $this->setNomeFantasia($nomeFantasia);
        //como  metodo foi definido uma superclasse como protect, agora é possivel usa-lo para mudar a situação pj
        $this->setSituacao(Situacao::PENDENTE);
    }
    
    //metodo polimorfico,ou seja, ele subscreve o metodo originalmente criado na superclasse. Atenção os metodos devem ter a mesma assinatura (nome parametros e retorno)
    //o parent:: pode ser usadi se quiser os dados a  masi da superclasse
    public function relatorio(): string

    {
        return "<div>"  
                 . parent::relatorio(). //opcional
                "<p><b>Nome Fantasia?:</b> {$this->getNomeFantasia()}</p>
                <p><b>CNPJ</b> {$this->getCnpj()}</p>
                
                </div>"
    }

    private function setCnpj(string $cnpj): void {
        $this->cnpj = $cnpj;
    }

    private function setAnoFundacao(int $ano): void {
        $this->anoFundacao = $ano;
    }

    private function setNomeFantasia(string $nome): void {
        $this->nomeFantasia = $nome;
    }

    public function getCnpj(): string {  return $this->cnpj; }
    public function getAnoFundacao(): int {  return $this->anoFundacao; }
    public function getNomeFantasia(): string {  return $this->nomeFantasia; }
}
    