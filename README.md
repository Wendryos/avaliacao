#  Projeto Posts 

### Sobre o Projeto

<p align="center"> 
   🔗 O projeto é uma aplicação web usando como linguagem principal o PHP, consiste em listagem e exibição de posts provindas de uma API.
</p>



### Tabela de conteúdos
=================
<p align="center">
    <a href="#recursos"> Recursos da aplicação </a> •
    <a href="#pre-requisitos"> Pré - requisitos </a> • 
    <a href="#iniciando"> Iniciando a aplicação </a> • 
    <a href="#tecnologias">Tecnologias</a> • 
    <a href="#perguntas"> Perguntas </a> 
</p>


### Recursos da aplicação

- [x] Listagem dos posts.
- [x] Paginação.
- [x] Exibição do post.


### Pré - requisitos

Antes de começar, você vai precisar ter instalado em sua máquina as seguintes ferramentas:
[Git](https://git-scm.com), [PHP](https://www.php.net/) ou um servidor como o [Xampp](https://www.apachefriends.org/pt_br/index.html), [Wamp](https://www.wampserver.com/en/).

A versão do PHP deve ser igual ou superior a 7.2, pois a versão da Framework ( Laravel ) utilizada no projeto é 8.x.
Além disto é bom ter um editor para trabalhar com o código ou apenas melhor visualiza - lo [VSCode](https://code.visualstudio.com/)



###  Iniciando a aplicação

#### Teste a aplicação online:
  Acesse: <http://avaliacao.zalliant.com.br>

#### Ou inicie a aplicação diratamente do seu ambiente:

#### Clone este repositório
$ git clone <https://github.com/Wendryos/avaliacao.git> ou $ gh repo clone Wendryos/avaliacao

#### Acesse a pasta do projeto no terminal/cmd
$ cd avaliacao

#### Execute a aplicação 
$ php artisan serve

### O servidor inciará na porta:8000 - acesse <http://localhost:8000> ou <http:127.0.0.1:8000>



### Tecnologias

As seguintes ferramentas foram usadas na construção do projeto:

#### - [Laravel](https://laravel.com/)



### ◊ Perguntas
1. Descreva possíveis otimizações de performance que você poderia fazer no seu
próprio código.
- Adaptar melhorias de envio dos registros para a view carregando a API uma única vez e assim usando para todo o projeto apartir de uma salva. 

2. O que você poderia ter melhorado?
- Melhorar a paginação, deixando - a assincrona.
- A estilização de acordo ao que for proposto, com talvez um load inicial para exibir os registros depois que a página estiver carregada.


The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
