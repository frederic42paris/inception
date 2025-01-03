#!/bin/bash
sed -i "s/\:DB_NAME/${DB_NAME}/g" /etc/mysql/init.sql
sed -i "s/\:DB_USER/${DB_USER}/g" /etc/mysql/init.sql
sed -i "s/\:DB_PASSWORD/${DB_PASSWORD}/g" /etc/mysql/init.sql
mysqld