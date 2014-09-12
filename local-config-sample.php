<?php
/*
This is a sample local-config.php file
In it, you *must* include the four main database defines

You may include other settings here that you only want enabled on your local development checkouts
*/

define( 'DB_NAME', 'local_db_name' );
define( 'DB_USER', 'local_db_user' );
define( 'DB_PASSWORD', 'local_db_password' );
define( 'DB_HOST', 'localhost' ); // Probably 'localhost'


/* Debug settings */
define( 'WP_DEBUG', false );

if ( WP_DEBUG ) {
	@ini_set( 'log_errors', 'Off' );
	@ini_set( 'display_errors', 'On' );
	@ini_set( 'error_reporting', E_ALL );
	define( 'WP_DEBUG_LOG', false );
	define( 'WP_DEBUG_DISPLAY', true );
}

define( 'FS_METHOD', 'direct');

define( 'FS_CHMOD_DIR', ( 02775 ) );
define( 'FS_CHMOD_FILE', ( 0664 ) );
