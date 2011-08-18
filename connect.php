<?php
/**
* MySQL connection check
*
* Checks the connection to the local install of MySQL
*
* @author David Xalfa <s3281328@student.rmit.edu.au>
* @version 1.0
* @package Connect
*/

/**
 * Hostname and port mysql is running on (can't use localhost)
 */
define('DB_HOST',   'yallara.cs.rmit.edu.au:57157');
/**
 * Name of database to connect to
 */
define('DB_NAME',   'winestore');
/**
 * Username to connect with
 */
define('DB_USER',   'winestore');
/**
 * Password to connect with
 */
define('DB_PW',     'winestore');


if (!$dbconn = mysql_connect(DB_HOST, DB_USER, DB_PW)) {
  echo 'Could not connect to mysql on ' . DB_HOST . "\n";
  exit;
}

echo 'Connected to mysql on ' . DB_HOST . "<br/>\n";

if (!mysql_select_db(DB_NAME, $dbconn)) {
  echo 'Could not use database ' . DB_NAME . "\n";
  echo mysql_error() . "\n";
  exit;
}

echo 'Connected to database ' . DB_NAME . "<br/>\n";

?>

