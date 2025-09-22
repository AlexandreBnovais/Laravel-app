# Guia para usar o Laravel-app

### Clone o projeto laravel-app

```
git clone 'https://github.com/AlexandreBnovais/Laravel-app.git'
```
### Entre na pasta larave-app
```
cd Larave-app
```
### Instale as dependencias 

```
composer install 
```

### Crie um arquivo .env e gere a API_KEY
```
cp .env.example .env
php artisan key:generate
```
### Rode as migrations 

```
php artisan migrate
```

### Crie um servidor laravel
```
php artisan serve
```
### Acesse o recurso task 
Por ultimo digite o nome do recurso na URL: '/tasks' 

### Dica: 
Se você estiver usando OneDrive, isso às vezes causa problemas com permissões de arquivos e sincronização. Se puder, evite projetos Laravel dentro da pasta "OneDrive". Coloque os projetos em algo como:
```
C:\dev\Laravel-app\
```
