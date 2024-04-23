<?php
define( 'WP_CACHE', true );
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u162279250_kEbOE' );

/** Database username */
define( 'DB_USER', 'u162279250_Am06o' );

/** Database password */
define( 'DB_PASSWORD', 'nAc2qRdOKX' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '&qh/+[Z{Eix[`+K*:dF=TJZ>^c7{|O3y$).UcH[3=?Mg. 0@*`5W8~6(#pik:G/7' );
define( 'SECURE_AUTH_KEY',   'XmiWSnEAWEF;0s!~(FS@cTx?G$xgu f0UIZn2yIp0{/}YTVE g,w*fOSIa|@dS_D' );
define( 'LOGGED_IN_KEY',     'x81$_J^E3+k-CiO w^{05TU-;ydtke F;ToPhLXjin#J74JHs2X,RB91Jzu3e8`u' );
define( 'NONCE_KEY',         '(c!!! xU%DPCIsN!4AI{dJDoTF`R+1;QFI7]!z&WHCR/n,ghw?9AzJ7k^_sOt[}~' );
define( 'AUTH_SALT',         'yE5TC]&V~5e,+!@(QPD* 3%|6vU irirQ)fM:<F,aD7D91UQ0Rik:M:HI09w,RF{' );
define( 'SECURE_AUTH_SALT',  'fE^)Us%]uM1hl}SK=iL28dz ,W6t y>c9sz#oAGr}t+A ~P]8kO-W%NB9!]nsDX7' );
define( 'LOGGED_IN_SALT',    'Np@2:3b~Bc[]iXi*)q &gwQ<wreiKc]HV;FxITNFbG(dpRBC][M,a-Mp)K}6rgI{' );
define( 'NONCE_SALT',        'P`Wrk?S~Sj?b!HA?2O Cj$/@0_BZetsauhg{o:)t1}#:7#7Be1`GFPHx$JLdeSmF' );
define( 'WP_CACHE_KEY_SALT', '7gECb(mGCQo.bM+<.{84#0!ic^#:)BKQ$gkP)DkW2@Jq|H4p3PerdIJ}9/VWeCY-' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );


/* Add any custom values between this line and the "stop editing" line. */



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
