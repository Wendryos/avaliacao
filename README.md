# <h1 align="center"> Projeto Posts </h1>

<p align="center"> 
   🔗 Este projeto é uma aplicação web que usa como linguagem principal o PHP, consiste em listagem e exibição de posts provindas de uma API.
</p>



## Pré-requisitos
* [Git](https://git-scm.com) para clonar o repositório.
* [PHP](https://www.php.net/) ou um servidor como o [Xampp](https://www.apachefriends.org/pt_br/index.html), [Wamp](https://www.wampserver.com/en/) e outros.
* [Composer](https://getcomposer.org/) para gerar os arquivos PHP.

A versão da Framework Laravel utilizada no projeto é a 8.5, portanto para que a aplicação funcione corretamente é necessário que a versão do PHP seja igual ou superior à 7.2.

## Iniciando a aplicação

Você pode acessar e testar esta aplicação online [Acessando este Site](http://avaliacao.zalliant.com.br).  

Iniciando diretamente do seu ambiente:

* ** Clone o repositório **
$ git clone https://github.com/Wendryos/avaliacao.git ou $ gh repo clone Wendryos/avaliacao
* ** Acesse a pasta do projeto no terminal/cmd **
$ cd avaliacao
* ** Execute a aplicação **
$ php artisan serve
<h3 align="center"> 
**O servidor inciará na porta:8000 - acesse http://localhost:8000 ou http:127.0.0.1:8000** </h3>





### Perguntas
* ** 1. Descreva possíveis otimizações de performance que você poderia fazer no seu
próprio código. **
- Adaptar melhorias de envio dos registros para a view carregando a API uma única vez e assim usando para todo o projeto apartir de uma salva. 

* ** 2. O que você poderia ter melhorado? **
- Melhorar a paginação, deixando - a assincrona.
- A estilização de acordo ao que for proposto, com talvez um load inicial para exibir os registros depois que a página estiver carregada.
