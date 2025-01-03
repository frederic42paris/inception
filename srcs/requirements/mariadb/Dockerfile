FROM debian:bullseye

RUN apt update && apt upgrade && apt install -y \
    mariadb-server

COPY 50-server.cnf /etc/mysql/mariadb.conf.d/.
COPY init.sql /etc/mysql/init.sql

COPY createdb.sh /createdb.sh
RUN chmod +x /createdb.sh 

RUN mkdir /run/mysqld

CMD ["./createdb.sh"]