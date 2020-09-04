## Projeto ITACode - Laravel

<p>Autor:  Airton França</p>

<p>O Projeto foi desenvolvido aproveitando os arquivos do Repositório ITACode (projeto criado com HTML5, CSS3 e JavaScript):

[Repositório ITACode](https://github.com/airtonfranca/itacode)

Neste projeto foi trabalhado com:

-   **_Frontend (Display)_**
-   **_Make Models & Migration (Arquivos)_**
-   **_Config. & Create DataBase_**
-   **_Create Dashboard_**
-   **_Backend (Template)_**
-   **_Controllers_**
-   **_Routers_**
-   **_View Blades_**
-   **_Operation (CRUD)_**

## Executando o Projeto

### Necessário possuir instalado:

-   **_PHP e Banco de Dados Configurados_**
-   **_Composer_**

1. Clone este repositório em sua máquina.

2. Crie um Banco de Dados chamado "itacode" em sua conexão msql.

3. Abre o terminal no diretório raiz do projeto e execute o comando "composer install", para instalar as dependências.

4. Renomei o arquivo ".env.example" para ".env". Abra o arquivo e verifique se o campo DB_DATABASE corresponde a "itacode", senão altere para o mesmo.

5. No terminal:

-   **_execute o comando "php artisan key:generate" para gerar uma nova chave._**
-   **_execute o comando "php artisan migrate" paraa configurar todas as tabelas no banco de dadoss_**
-   **_execute o comando "php artisan serve" para rodar o servidor_**

### Aplicação estará rodando no endereço: (http://127.0.0.1:8000) , mas inicialmente retornará erro por causa das tabelas do Banco de Dados estarem vazias.

### Para preencher as tabelas, acesse o endereço (http://127.0.0.1:8000/admin) e cadastre os item:

-   **_Categorias_**
-   **_Configurações do Site_**
-   **_Serviços_**
-   **_Portifolio_**

### Modelo de Cadastro (se preferir utilizar os dados)

### > Categorias:

### - É estritamente obrigatório existir uma categoria chamada "Serviços"

-   Titulo: Serviços
-   Status: On

---

-   Titulo: Portifolio
-   Status: On

---

-   Titulo: Contato
-   Status: On

---

### > Configurações do Site:

-   Titulo: Itacode
-   Cidade/Estado: Manaus/AM
-   Telefone: (92) 99254-4025
-   Email: airtonfrance@gmail.com

---

### > Serviços:

-   Titulo: Nossos
-   Descrição: Ajudamos você empreendedor a divulgar o seu negócio, criamos sua arte de acordo com suas preferências.
-   Categoria: Serviço
-   Status: On

### > Portifolio:

-   Titulo: Trabalhos Realizados
-   Descrição: Cliente que confiaram no nosso trabalho e hoje são referências nem suas respectivas áreas.
-   Status: On

---

### <> Formulário e Manipulação de Imagens serão atualizados em uma próxima atualização do projeto.
