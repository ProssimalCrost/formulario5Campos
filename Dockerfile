# Usa uma imagem oficial do PHP com Apache
FROM php:8.2-apache

# Instala extensões necessárias (opcional)
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copia os arquivos do projeto para o diretório do Apache
COPY . /var/www/html/

# Ajusta permissões
RUN chown -R www-data:www-data /var/www/html

# Exponha a porta padrão do Apache
EXPOSE 80
