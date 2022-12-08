#!/usr/bin/env bash

# mysql --user=root --password="$MYSQL_ROOT_PASSWORD" <<-EOSQL
#     CREATE DATABASE IF NOT EXISTS '$MYSQL_DATABASE';
#     GRANT ALL PRIVILEGES ON \`$MYSQL_DATABASE%\`.* TO '$MYSQL_USER'@'%';
# EOSQL

mysql --user="$MYSQL_USER" --password="$MYSQL_ROOT_PASSWORD" database.sql
