<?php  // Moodle configuration file
unset($CFG);
global $CFG;
$CFG = new stdClass();
$CFG->dbhost    = 'host.docker.internal';  // This points to the host machine's database

$CFG->dbtype    = getenv('MOODLE_DBTYPE');  // 'pgsql'
$CFG->dblibrary = 'native';
$CFG->dbhost    = getenv('MOODLE_DBHOST');  // 'localhost'
$CFG->dbname    = getenv('MOODLE_DBNAME');  // 'moodle'
$CFG->dbuser    = getenv('MOODLE_DBUSER');  // 'postgres'
$CFG->dbpass    = getenv('MOODLE_DBPASS');  // '1307x2Npk'
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport'    => 5432,  // You can also add a MOODLE_DBPORT if needed
  'dbsocket'  => '',
);

error_log($CFG->dbname, 3, '/var/www/html/moodle_error.log');

$CFG->wwwroot   = 'http://localhost:80';
$CFG->dataroot  = '/var/www/moodledata';
$CFG->admin     = 'admin';

$CFG->directorypermissions = 0777;

require_once(__DIR__ . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
 ini_set ('display_errors', 'on');
 ini_set ('log_errors', 'on');
 ini_set ('display_startup_errors', 'on');
 ini_set ('error_reporting', E_ALL);
 ini_set ('error_log', '/opt/homebrew/var/log/php_errors.log');
 $CFG->debug = 30719;