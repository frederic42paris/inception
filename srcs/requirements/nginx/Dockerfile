FROM debian:bullseye

RUN apt update && apt upgrade && apt install -y \
    nginx

COPY default /etc/nginx/sites-available/.

RUN mkdir -p /var/www/

RUN chmod 755 /var/www/html
RUN chown -R www-data:www-data /var/www/html 


CMD ["nginx", "-g", "daemon off;"]