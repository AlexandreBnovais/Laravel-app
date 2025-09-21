# Guia para usar o Laravel-app

### Clone o projeto laravel-app

```
git clone 'https://github.com/AlexandreBnovais/Laravel-app.git'
```
### Entre na pasta larave-app
```
cd larave-app
```
### Instale as dependencias 

```
composer install 
npm install 
```

### Crie um arquivo .env
- Localize a arquivo '.env.example'
- crie um arquivo '.env' na pasta raiz do projeto
- Copie todas as informações do arquivo de exemplo
- Cole-as no arquivo .env

### Rode as migrations 

```
php artisan migrate
php artisan migrate:status
```

### Crie um servidor laravel
```
php artisan serve
```
### Acesse o recurso tesk 
Por ultimo digite o nome do recurso na URL: '/tasks' 
