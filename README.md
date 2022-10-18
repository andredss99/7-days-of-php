<p align="center">
    <img src="https://7daysofcode.io/assets/img/background-7days.1662756777.svg" alt="Logotipo do projeto 7 Days of Code da Alura" height="150px">
</p>

[🇧🇷](#sumário) | [🇺🇸](#summary)

<h1 align="center">Desafio Alura - 7 Days of Code [PHP]</h1>

## Sumário
1. [Proposta](#proposta)
2. [Dia 1](#dia-1)
3. [Dia 2](#dia-2)

## Proposta
O objetivo deste desafio é construir uma aplicação que simule uma demanda do mundo real utilizando apenas PHP. Essa aplicação trabalha com operações como CRUD, login, recuperação de senha, entre outras, e é construída em cima de um framework fictício, o ScubaPHP.

Refatorar o framework também faz parte do objetivo, visto que, na grande maioria das vezes, a manutenção do código é feita em um time composto por várias pessoas desenvolvedoras. Por isso, seguir boas práticas de programação e documentação são ações que reduzem o retrabalho, custo de manutenção e complexidade de um sistema.

---

## Dia 1
A tarefa do primeiro dia envolveu apenas melhorias no modo como as rotas são tratadas e, consequentemente, como os templates das telas são mostrados. Para as rotas, utilizei um <code>switch</code> que, com base na página passada via <code>GET</code>, chama o respectivo método do arquivo <code>controller.php</code>, para exibir o template da página em questão.

## Dia 2
O segundo dia consistiu na implementação de uma funcionalidade para salvar novos usuários no "banco de dados", um arquivo <code>JSON</code>. Para isso, criei um novo arquivo, <code>crud.php</code>, onde declarei a função que salva um novo usuário no arquivo somente se o usuário passado por parâmetro for válido, isto é, se o payload da requisição <code>POST</code> não for vazio. Essa função, <code>crud_create($user)</code>, é chamada pelo <code>controller</code> que, por sua vez, retorna à tela de login logo após a operação ser finalizada.