#!/bin/bash
echo \"select * from action_tests \" | mysql -h ^^db_2.host^^ -u ^^db_2.username^^  --password=^^db_2.password^^ db_2
