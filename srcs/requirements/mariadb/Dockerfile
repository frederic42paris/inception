FROM debian:bullseye

RUN apt update && apt upgrade && apt install -y \
    mariadb-server

COPY conf/50-server.cnf /etc/mysql/mariadb.conf.d/.
COPY tools/init.sql /etc/mysql/init.sql

COPY tools/createdb.sh /createdb.sh
RUN chmod +x /createdb.sh 

RUN mkdir /run/mysqld

CMD ["./createdb.sh"]