<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
  * phpMyAdmin sample configuration, you can use it as base for
  * manual configuration. For easier setup you can use setup
  *
  * All directives are explained in documentation in the doc/ folder
  * or at <http://docs.phpmyadmin.net/>.
  * @package PhpMyAdmin
  */

  $cfg['PmaAbsoluteUri'] = 'https://^^domain.fqdn^^/';

/**
  * This is needed for cookie based authentication to encrypt password in
  * cookie
  */

  $cfg['blowfish_secret'] = '^^random(32)^^';

/** YOU MUST FILL IN THIS FOR COOKIE AUTH!
  *
  *
  * Servers configuration
  */

  $i = 0;\r\n\r\n/*\r\n * First server\r\n */\r\n$i++;\r\n/* Authentication type */\r\n$cfg['Servers'][$i]['auth_type'] = 'cookie';\r\n/* Server parameters */\r\n$cfg['Servers'][$i]['host'] = '^^db_2.host^^';\r\n$cfg['Servers'][$i]['connect_type'] = 'tcp';\r\n$cfg['Servers'][$i]['compress'] = false;\r\n$cfg['Servers'][$i]['AllowNoPassword'] = false;\r\n\r\n/*\r\n * phpMyAdmin configuration storage settings.\r\n */\r\n\r\n/* User used to manipulate with storage */\r\n $cfg['Servers'][$i]['controlhost'] = '^^db_2.host^^';\r\n// $cfg['Servers'][$i]['controlport'] = '';\r\n $cfg['Servers'][$i]['controluser'] = '^^db_2.username^^';\r\n $cfg['Servers'][$i]['controlpass'] = '^^db_2.password^^';\r\n\r\n/* Storage database and tables */\r\n $cfg['Servers'][$i]['pmadb'] ='db_2';\r\n $cfg['Servers'][$i]['bookmarktable'] = 'pma__bookmark';\r\n $cfg['Servers'][$i]['relation'] = 'pma__relation';\r\n $cfg['Servers'][$i]['table_info'] = 'pma__table_info';\r\n $cfg['Servers'][$i]['table_coords'] = 'pma__table_coords';\r\n $cfg['Servers'][$i]['pdf_pages'] = 'pma__pdf_pages';\r\n $cfg['Servers'][$i]['column_info'] = 'pma__column_info';\r\n $cfg['Servers'][$i]['history'] = 'pma__history';\r\n\r\n $cfg['Servers'][$i]['table_uiprefs'] = 'pma__table_uiprefs';\r\n $cfg['Servers'][$i]['tracking'] = 'pma__tracking';\r\n $cfg['Servers'][$i]['userconfig'] = 'pma__userconfig';\r\n$cfg['Servers'][$i]['recent'] = 'pma__recent';\r\n $cfg['Servers'][$i]['favorite'] = 'pma__favorite';\r\n $cfg['Servers'][$i]['users'] = 'pma__users';\r\n $cfg['Servers'][$i]['usergroups'] = 'pma__usergroups';\r\n $cfg['Servers'][$i]['navigationhiding'] = 'pma__navigationhiding';\r\n $cfg['Servers'][$i]['savedsearches'] = 'pma__savedsearches';\r\n $cfg['Servers'][$i]['central_columns'] = 'pma__central_columns';\r\n/* Contrib / Swekey authentication */\r\n// $cfg['Servers'][$i]['auth_swekey_config'] = '/etc/swekey-pma.conf';\r\n\r\n/*\r\n * End of servers configuration\r\n */\r\n\r\n/*\r\n * Directories for saving/loading files from server\r\n */\r\n$cfg['UploadDir'] = '';\r\n$cfg['SaveDir'] = '';\r\n\r\n/**\r\n * Whether to display icons or text or both icons and text in table row\r\n * action segment. Value can be either of 'icons', 'text' or 'both'.\r\n */\r\n//$cfg['RowActionType'] = 'both';\r\n\r\n/**\r\n * Defines whether a user should be displayed a \"show all (records)\"\r\n * button in browse mode or not.\r\n * default = false\r\n */\r\n//$cfg['ShowAll'] = true;\r\n\r\n/**\r\n * Number of rows displayed when browsing a result set. If the result\r\n * set contains more rows, \"Previous\" and \"Next\".\r\n * default = 30\r\n */\r\n//$cfg['MaxRows'] = 50;\r\n\r\n/**\r\n * disallow editing of binary fields\r\n * valid values are:\r\n *   false    allow editing\r\n *   'blob'   allow editing except for BLOB fields\r\n *   'noblob' disallow editing except for BLOB fields\r\n *   'all'    disallow editing\r\n * default = blob\r\n */\r\n//$cfg['ProtectBinary'] = 'false';\r\n\r\n/**\r\n * Default language to use, if not browser-defined or user-defined\r\n * (you find all languages in the locale folder)\r\n * uncomment the desired line:\r\n * default = 'en'\r\n */\r\n//$cfg['DefaultLang'] = 'en';\r\n//$cfg['DefaultLang'] = 'de';\r\n\r\n/**\r\n * default display direction (horizontal|vertical|horizontalflipped)\r\n */\r\n//$cfg['DefaultDisplay'] = 'vertical';\r\n\r\n\r\n/**\r\n * How many columns should be used for table display of a database?\r\n * (a value larger than 1 results in some information being hidden)\r\n * default = 1\r\n */\r\n//$cfg['PropertiesNumColumns'] = 2;\r\n\r\n/**\r\n * Set to true if you want DB-based query history.If false, this utilizes\r\n * JS-routines to display query history (lost by window close)\r\n *\r\n * This requires configuration storage enabled, see above.\r\n * default = false\r\n */\r\n//$cfg['QueryHistoryDB'] = true;\r\n\r\n/**\r\n * When using DB-based query history, how many entries should be kept?\r\n *\r\n * default = 25\r\n */\r\n//$cfg['QueryHistoryMax'] = 100;\r\n\r\n/**\r\n * Should error reporting be enabled for JavaScript errors\r\n *\r\n * default = 'ask'\r\n */\r\n//$cfg['SendErrorReports'] = 'ask';\r\n\r\n/*\r\n * You can find more configuration options in the documentation\r\n * in the doc/ folder or at <http://docs.phpmyadmin.net/>.\r\n */\r\n

?>
