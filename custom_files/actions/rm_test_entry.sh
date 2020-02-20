#!/bin/bash
/home/engines/functions/params_to_env.sh
parms_to_env
echo \"delete from action_tests where name = '$name';\"| mysql -h ^^mysql_host^^ -u ^^dbuser^^  --password=^^dbpasswd^^  ^^dbname^^ >/dev/null
