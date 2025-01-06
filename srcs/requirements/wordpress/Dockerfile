FROM debian:bullseye

RUN apt update && apt upgrade && apt install -y \
    php-fpm \
    php-mysqli \
    curl

RUN mkdir /run/php/
COPY conf/www.conf /etc/php/7.4/fpm/pool.d/.

COPY tools/script.sh .
RUN chmod +x script.sh

CMD ["./script.sh"]