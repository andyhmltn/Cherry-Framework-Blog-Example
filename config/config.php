<?php

/**
 * Configuration file for the cherry framework. 
 * Used to define framework wide constants.
 * 
 * @package Config file
 **/
 

/**
 * Development settings
 * Used when the site isn't live.
 **/

#Set this to false when the site goes into production to stop errors displaying /CMD management.
define('DEVELOPMENT_ENVIRONMENT', TRUE);
#Authentication key for the command line. To set open Plum and type 'generate key password' 
define('DEVELOPMENT_KEY', '334b870cb3050378a6cbdd48e253c21ba2263697fb6f230552e74390fe00194f');

/**
 * URL Defaults.
 * For when a use navigations to http://root/
 **/

define('DEFAULT_CONTROLLER', 'posts');
define('DEFAULT_ACTION', 'index');

/**
 * Application settings
 **/

#Can be used as a default title element.
define('APPLICATION_NAME', 'Basic blog');
#This is important. Set it **WITHOUT** a trailing slash.
define('BASE_PATH', 'http://localhost:8888/blog');

/**
 * MySQL Database Credentials
 * These are essential for database use
 **/

#The database to use
define('DB_NAME', 'blog');
#Your MySQL username
define('DB_USER', 'root');
#Your MySQL password
define('DB_PASSWORD', 'root');
#Your current MySQL host
define('DB_HOST', 'localhost');
