#!/bin/bash
/home/engines/functions/params_to_env.sh
parms_to_env
echo \"delete from action_tests where name = '$name';\"| mysql -h _Engines_System(mysql_host) -u _Engines_Environment(dbuser)  --password=_Engines_Environment(dbpasswd)  _Engines_Environment(dbname) >/dev/null
