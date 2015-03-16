<?php 


echo 'Connect<br />';

// DB configuration settings
$config = array();

    $config['host'] = 'localhost:3306';
    $config['user'] = 'root';
    $config['pass'] = '';
    $config['database'] = 'aww';

// connect to DB
$db = new DB($config);
$db->setFetchMode(2);
