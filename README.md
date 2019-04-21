# vue-laravel-todo

Vue 2.5 + Laravel 5.5 + Axios TODOs example app

### Installation

1. Clone repo

2. Change to directory

````
cd todos_laravel_vuejs
````   

3. Install dependencies

````
composer install
````

4. Copy .env file

```
cp .env.example .env
```

5. Modify `DB_*` value in `.env` with your database config.

6. Generate application key:

````
php artisan key:generate
````

7. Migrate
````
php artisan migrate
````

8. Install Node modules
````
npm install
````

9. Build

````
npm run prod
````

10. Run your laravel with php builtin server
````
php artisan serve
````

11. access the app
```
http://localhost:8000
```
