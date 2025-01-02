FROM debian:bullseye

RUN apt update && apt upgrade && apt install -y \
    nginx \
    openssl -y

RUN mkdir -p /etc/nginx/ssl
RUN openssl req -x509 -nodes -out /etc/nginx/ssl/inception.crt -keyout /etc/nginx/ssl/inception.key -subj "/C=FR/ST=IDF/L=Paris/O=42/OU=42/CN=localhost.42.fr/UID=localhost"
RUN mkdir -p /var/run/nginx
COPY nginx.conf /etc/nginx/nginx.conf

# COPY default /etc/nginx/sites-available/.
CMD ["nginx", "-g", "daemon off;"]