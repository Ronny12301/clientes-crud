FROM php:8.1.20RC1-zts-alpine3.16

# Instalar las extensiones necesarias para Laravel
RUN docker-php-ext-install pdo_mysql

# Crear carpeta
RUN mkdir -p /home/app

# Copiar el código de la aplicación
COPY . /home/app

# Exponer el puerto 8000 (puerto por defecto de php artisan serve)
EXPOSE 8000

# Ejecutar el comando "php artisan serve" al iniciar el contenedor
CMD ["php", "/home/app/artisan", "serve", "--host=0.0.0.0", "--port=8000"]

