#!/bin/bash

mysql -h _Engines_System(mysql_host) -u _Engines_Environment(dbuser)  --password=_Engines_Environment(dbpasswd)  _Engines_Environment(dbname) < /home/app/sql/create_tables.sql
