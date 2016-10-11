<?php

define("ENV", "DEV");
define("PROFESSION", serialize (array(
   'Web Developer',
   'Project Manager'
)));

//define("ENV", "STAGING");
//define("ENV", "PROD");

if (ENV == "PROD") {

    define("DBHOST", "205.186.138.226");
    define("DBNAME", "freewaters_live");
    define("DBUSER", "fw_live_db");
    define("DBPWD", "fwL1v3Db123");
    define("DBPORT", "3306");

} else if (ENV == "STAGING") {
    ini_set('display_errors', 1);
    // DB Params
    define("DBHOST", "205.186.138.226");
    define("DBNAME", "freewaters_staging");
    define("DBUSER", "fw_staging_db");
    define("DBPWD", "fwst@g1ngDb123");
    define("DBPORT", "3306");

} else {
    ini_set('display_errors', 1);
    // DB Params
    define("DBHOST", "205.186.138.226");
    define("DBNAME", "fb_messenger_test");
    define("DBUSER", "fbmessenger");
    define("DBPWD", "123fbmessenger@@");
    define("DBPORT", "3306");

}