# laravel 5.2

## Sobre o projeto
O projeto controle de items é um projeto desenvolvido em Laravel 5.2. O projeto tem como objetivo ser uma aplicação para a criação, visualização, atualização e deleção de items.

Além disso, o objetivo desse projeto é servir como base de estudos sobre o framework laravel e suas respectivas mudanças ao longo das versões. Logo, esse é o primeiro dentro de nove projetos com o mesmo intuito.

## Build setup
```bash
# instalar as dependências do composer
$ composer install

# criar arquivo de environment
$ cp .env.example .env

# gerar a chave única da aplicação
$ php artisan key:generate

# criar as tabelas e popular com dados falsos
$ php artisan migrate:refresh --seed

# inicializar a aplicação
$ php artisan serve
```

## Sqlite
Este projeto utiliza o SQLite para armazenamento, logo, as variáveis de ambiente foram alteradas com esse intuito. Se você quiser usar o mesmo banco relacional, digitar o seguinte comando:
```bash
# criar o arquivo de database
$ touch database/database.sqlite

# substituir variávesi de conexão com o banco
$ DB_CONNECTION=sqlite
```

## PHP versão
Eu utilizei a versão 8.1 do PHP