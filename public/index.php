<?php
/*
 | @author Gurvir Singh <baraichgurvir@gmail.com>
 | @license MIT
 */

use Pigen\Modules\Http\Request;

/*
 | ----------------------------------------------------------------------
 | Register The Auto Loader
 | ----------------------------------------------------------------------
 |
 | Composer provides a convenient, automatically generated class loader
 | for our application. We'll simply require it into the script here so
 | that we don't have to worry about manually loading any of our classes.
 |
*/

require __DIR__ . '/../vendor/autoload.php';

/*
 | ----------------------------------------------------------------------
 | Define Global Constants
 | ----------------------------------------------------------------------
 | 
 | These constants are used throughout the application. They are defined
 | here so that we don't have to repeat them throughout the application
 |
*/

define("ABSPATH", dirname(__DIR__));

/*
 | ----------------------------------------------------------------------
 | Running the Application
 | ----------------------------------------------------------------------
 |
 | Once application is loaded, it will serve as the entry point for all
 | HTTP requests. Finally, the application will send the response back
 | to the client's browser.
 |
*/

$app = require_once ABSPATH . '/bootstrap/application.php';

$app
  ->workers['http']
  ->handle(Request::capture());
