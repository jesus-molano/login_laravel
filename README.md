# Pasos a seguir para la instalación de la aplicación
## 1. Dirigirse a la carpeta del proyecto
Utilizar el comando `cd` para dirigirse a la carpeta del proyecto



## 2. Instalar dependencias
```
composer install
```
## 3. Verificar en el archivo .env la base de datos
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
## 5. Iniciar el servidor
```
php artisan serve
```
## 6. Ingresar a la aplicación
```
http://localhost:8000
```

