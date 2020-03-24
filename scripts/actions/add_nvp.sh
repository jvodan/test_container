#!/bin/bash
/home/engines/functions/params_to_env.sh
parms_to_env
echo \"INSERT INTO action_tests (name, value) VALUES ('$name', '$value'); \"| mysql -h ^^db_2.host^^ -u ^^db_2.username^^  --password=^^db_2.password^^  db_2
