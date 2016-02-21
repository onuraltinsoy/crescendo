<?php

ActiveRecord\Config::initialize(function($cfg)
{
    
    $development = array(
        'driver'    => 'mysql',
        'host'      =>  'localhost',
        'username'  =>  'root',
        'password'  =>  '230300',
        'dbname'    =>  'crescendo'
    );
    
    $test = array(
        'driver'    => 'mysql',
        'host'      =>  'localhost',
        'username'  =>  'root',
        'password'  =>  '230300',
        'dbname'    =>  'crescendo'
    );
    
    $production = array(
        'driver'    => 'mysql',
        'host'      =>  'localhost',
        'username'  =>  'root',
        'password'  =>  '230300',
        'dbname'    =>  'crescendo'
    );
    
   $cfg->set_model_directory(dirname(__FILE__) . '/../models');
   $cfg->set_connections(
     array(
       'development' => $development['driver'] . '://' . $development['username'] . ':' . $development['password'] . '@' . $development['host'] . '/' . $development['dbname'] . '?charset=utf8',
       'test' => $test['driver'] . '://' . $test['username'] . ':' . $test['password'] . '@' . $test['host'] . '/' . $test['dbname'] . '?charset=utf8',
       'production' => $production['driver'] . '://' . $production['username'] . ':' . $production['password'] . '@' . $production['host'] . '/' . $production['dbname'] . '?charset=utf8'
     )
   );
    $cfg->set_default_connection('production');
});