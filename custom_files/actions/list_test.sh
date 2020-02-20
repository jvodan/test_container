#!/bin/bash
echo \"select * from action_tests \" | mysql -h ^^mysql_host^^ -u ^^dbuser^^  --password=^^dbpasswd^^ ^^dbname^^
