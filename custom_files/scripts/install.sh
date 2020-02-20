#!/bin/bash

mysql -h ^^mysql_host^^ -u ^^dbuser^^  --password=^^dbpasswd^^  ^^dbname^^ < /home/app/sql/create_tables.sql
