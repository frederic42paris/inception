#!/bin/bash
sed -i "s/\:MARIADB_DB_NAME/${MARIADB_DB_NAME}/g" /etc/mysql/init.sql
sed -i "s/\:MARIADB_USERNAME/${MARIADB_USERNAME}/g" /etc/mysql/init.sql
sed -i "s/\:MARIADB_PASSWORD/${MARIADB_PASSWORD}/g" /etc/mysql/init.sql

mysql_install_db
mysqld