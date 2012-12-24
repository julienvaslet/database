<?php

define( "RootPath", dirname( __FILE__ ) );

require_once( RootPath. "/classes/database/Database.class.php" );
require_once( RootPath. "/classes/database/Object.class.php" );

use database\Database;
use database\Object;

new Database( "127.0.0.1", 3306, "database", "database", "database" );

?>
