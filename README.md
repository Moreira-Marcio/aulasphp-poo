# Exemplos de programação orientada a objetos usando PHP

## 01_abstracao-usando-classes-atributos-metodos

- Pasta `src` para organização das classes
- Criação da classe `Cliente.php` *(sempre iniciando com letra maiúscula)*
    - Definição de atributos contendo:
        - tipo de visibilidade (nos exemplos, usamos `public`)
        - tipo de dados
        - nome do atributo
    - Definição de métodos contendo:
        - tipo de visibilidade (nos exemplos, usamos `public`)
        - nome do método
        - detalhes adicionais (parâmetros, tipo de retorno etc)
        - Uso do `$this` para acessar os recursos da classe
- Na `index.php`:
    - Uso do `require` para referenciar a classe `Cliente`
    - Criação dos objetos `$clienteA` e `$clienteB` a partir da classe usando `new Cliente()`
    - Atribuição de dados de forma direta aos atributos usando `$nomeObjeto->atributo = valor`
    - Chamada de métodos através do objeto usando `$nomeObjeto->metodo()`

 ## 02_encapsulamento-para-visibilidadse

 - Utilização de diferentes visibilidades (private e public)
 - Controle da forma como os dados são acessados (getters) e modificados (setters)
 - Com esa abordagem , podemos esconder detallhes de implementação de classes
 - Podemos atribuir diferentes logicas de negocio (validaçoes, sanitizações etc)   

 ## 03_encapsulamento-e-metodo-construtor

 - Implementação do metodo construtor obrigando a inicialização do objeto com dados provenientes de parametros
 - chamada dos setters a partir do construtor
 - Mudança de visibilidade dos setters privados

 ## 04_heranca-e-enumeracoes

 - Superclasse e Subclasse
 - Readequaçao de propriedades
 - Ajustes nas chamadas de construtor, usando `parent` para acessar construtor da superclasse
 - Uso de enumeração para criar um tipo de dados com valores customizados
 - Alteração de visibilidade para protected em um metodo da superclasse, permitindo assim o acesso a partir da subclasse
 - Organização das pastas e arquivos em `src`

 ## 5_polimorfismo
 - Método de mesma assinatura (nome,parâmetros,retorno) mas com comportamentos diferentes
 - [herança] indicação de classes abstratas e final