# CRUD-laravel8-Productos
Instalación de Laravel 8 y Configuración de la Base de Datos MySQL
Esta guía proporciona instrucciones paso a paso para instalar Laravel 8 y configurar una base de datos MySQL en tu entorno local. Antes de comenzar, asegúrate de tener instalados PHP, Composer y MySQL en tu sistema.

Paso 1: Instalar Dependencias
 -1 Navega hasta el directorio del proyecto:
 cmd:cd ruta/del/proyecto

 -2 Instala las dependencias del proyecto utilizando Composer:
 cmd:composer install
 
Paso 2: Configurar el Archivo de Entorno
 -1 Abre el archivo .env y configura los valores de la base de datos:
  DB_CONNECTION=mysql
  DB_HOST=127.0.0.1
  DB_PORT=3306
  DB_DATABASE=nombre_de_tu_base_de_datos
  DB_USERNAME=usuario_de_tu_base_de_datos
  DB_PASSWORD=contraseña_de_tu_base_de_datos

Paso 3: Crear una Nueva Clave de Aplicación
 -1 Genera una nueva clave de aplicación para tu proyecto:
  cmd:php artisan key:generate

Paso 4: migrar datos a la Base de Datos MySQL
 -1 Crea una nueva base de datos MySQL en tu servidor.
 
 -2 Ejecuta las migraciones para crear las tablas necesarias en la base de datos:
 cmd:php artisan migrate

Paso 5: Ejecutar el Servidor de Desarrollo
 -1 Inicia el servidor de desarrollo de Laravel:
 cmd:php artisan serve

 -2 Abre tu navegador web y navega hasta http://localhost:8000 para ver tu aplicación Laravel en funcionamiento.










 

