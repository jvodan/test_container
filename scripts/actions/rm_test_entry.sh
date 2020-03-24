#!/bin/bash
/home/engines/functions/params_to_env.sh
parms_to_env
echo \"delete from action_tests where name = '$name';\"| mysql -h ^^db_2.host^^ -u ^^db_2.username^^  --password=^^db_2.password^^  db_2 >/dev/null
