# Pasos a seguir para la instalación de la aplicación
## 1. Dirigirse a la carpeta del proyecto
Utilizar el comando `cd` para dirigirse a la carpeta del proyecto



## 2. Instalar dependencias
```
composer install
```
## 3. Verificar que la base de datos está creada y comprobar en el archivo .env
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=login_laravel
DB_USERNAME=root
DB_PASSWORD=
```
## 4. Hacer las migraciones
```
php artisan migrate:fresh --seed
```
## 5. Generar la llave
```
php artisan key:generate
```
## 6. Iniciar el servidor
```
php artisan serve
```
## 7. Ingresar a la aplicación
```
http://localhost:8000
```

