FROM ubuntu:20.04

RUN apt-get update && apt-get install -y nginx php-fpm

COPY default /etc/nginx/sites-available/default

COPY index.html /var/www/html/

WORKDIR /var/www/html/api/

COPY index.php /var/www/html/api/

CMD service php7.4-fpm start && nginx -g "daemon off;"