# Geleria de Fotos

![img-galeria](./img/galeria.png)

<br>

Geleria de Fotos feita com [PHP 8.0](https://www.php.net/) e a biblioteca JavaScript [JQuery](https://jquery.com/). O banco de dados escolhido foi o [SQLite](https://www.sqlite.org/index.html), e os dados estão sendo persistidos pelo ORM [Doctrine](https://www.doctrine-project.org/).

Nesse projeto foi usado o gerenciador de pacotes [Composer](https://getcomposer.org/) para baixar e configurar as dependencias do projeto. A biblioteca [JQuery](https://jquery.com/) está sendo acessada via CDN através de links já explícitos no programa.

## Preparando o ambiente

- Baixe o [PHP](https://www.php.net/manual/pt_BR/install.php)
- Instale o [Composer](https://getcomposer.org/download/)
- Configure o [SQLite](https://www.php.net/manual/pt_BR/ref.pdo-sqlite.php)

## Atualizando as dependências

- Abra o terminal na pasta da aplicação,
- Digite: <i>composer install</i> para baixar as dependências,
- Digite: <i>php bin/doctrine.php orm:schema-tool:create</i> para criar o banco de dados.

## Iniciando a aplicação

- Abra o terminal na pasta da aplicação,
- Digite: <i>php -S localhost:8000 -t src/public</i> para inicializar o servidor,
- Abra o navegador de sua preferência,
- Digite: <http://localhost:8000/> para acessar o programa.
