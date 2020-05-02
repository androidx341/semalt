## Установка

Создать каталог проекта, склонировать проект в текущий каталог 

```git clone git@github.com:androidx341/semalt.git .```

Скопировать .env.example в .env 

Запустить ```docker-compose up --build```

Войти в контейнер ```docker exec -it -u1000 "имя контейнера web" bash```

Выполнить в терминале
 
```composer install```

```php artisan key:generate```

```php artisan migrate```

```php artisan db:seed```
