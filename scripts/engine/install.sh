#!/bin/bash

mysql -h ^^db_2.host^^ -u ^^db_2.username^^  --password=^^db_2.password^^  db_2 < /home/app/sql/create_tables.sql
