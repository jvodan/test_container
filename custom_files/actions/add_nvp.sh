#!/bin/bash
/home/engines/functions/params_to_env.sh
parms_to_env
echo \"INSERT INTO action_tests (name, value) VALUES ('$name', '$value'); \"| mysql -h ^^mysql_host^^ -u ^^dbuser^^  --password=^^dbpasswd^^  ^^dbname^^
