# Sistema de Biblioteca

Este projeto é um sistema simples de gerenciamento de biblioteca desenvolvido em PHP com MySQL, utilizando Bootstrap para a interface.
O objetivo principal é aplicar os conceitos da disciplina de Programação Web e os fundamentos de algoritmos, incluindo pseudocódigo, fluxograma e lógica algorítmica.

---

## Sobre o Projeto

O sistema permite gerenciar:

- Usuários
- Livros
- Reservas

Cada módulo possui operações **CRUD**

- Cadastrar
- Listar
- Editar
- Excluir

O projeto foi desenvolvido com foco no aprendizado de:

- lógica de programação
- criação de fluxos e rotas
- manipulação de banco de dados
- divisão modular de código
- construção de interfaces simples

---

## Tela Inicial

![Tela inicial do sistema](https://github.com/ingridGuimas/Projeto_Final_Programcao_Web_Biblioteca/blob/main/tela_inicial_biblioteca.png)

---

## Tecnologias Utilizadas

- PHP
- MySQL
- HTML5
- CSS3
- Bootstrap

---

## Como Executar o Projeto

1. Coloque o projeto em uma pasta dentro do **XAMPP** ou **WAMP**  
   Exemplo: htdocs/biblioteca/
   
3. Importe o banco de dados que está na pasta **/database/biblioteca_2122n.sql**.

4. Inicie os serviços **Apache** e **MySQL**.

5. Acesse o sistema pelo navegador: http://localhost/Projeto_final_programcao_web/

---

## Lógica Algorítmica 

O sistema funciona por meio de um controlador simples baseado em URLs.
O arquivo index.php interpreta o parâmetro ?page= e carrega a página correspondente.

O fluxo geral funciona assim: 

1. O usuário acessa o sistema.

2. O menu principal permite escolher entre Usuários, Livros e Reservas.

3. Cada ação do CRUD é mapeada por uma rota, como:
   - ?page=usuario-cadastrar
   - ?page=livro-listar
   - ?page=reserva-editar
   
4. O arquivo correspondente é carregado dinamicamente.
   
5. Ao enviar um formulário, os dados são enviados via POST para um arquivo “salvar”, que:
   - recebe os dados
   - valida
   - insere/edita/remove no banco
   - retorna mensagem
   - redireciona para a listagem
   
Esse modelo permite um fluxo simples, modular e fácil de manter.

---

## Fluxograma Geral do Sistema



## Autora

**Ingrid Guimarães**  
Disciplina: *Programação Web*  
Professor: *Eliel Cruz*



