<?php
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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db_biro_papuabarat' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '2t:W:csazZLvLepuu5U_e~tr:h4X9V%H~byFT9R24:-OO[v7X3/-Fn9L|9oQ)|fG' );
define( 'SECURE_AUTH_KEY',  '-f1*P:)u}(?PF<w$%?=4?y>`_+J~6>Z%r{0#ue,-pe.{tv04` *%{58PKe!<7ay$' );
define( 'LOGGED_IN_KEY',    'ohXj<]pk8^l?.Gs!_+6D@]u|1ht8R|-i~8&VuOZf9?&p!Z1#}S =n[nW}~,(Ws5V' );
define( 'NONCE_KEY',        'zr(W%Zx Z(g7}fJ!# ht@T}-b)Z0R5@BZ$-d6~l@y!~L8,cn1UYmq[;ey-.2Ig&U' );
define( 'AUTH_SALT',        'I|HRPRSzoacf$@WB7P>QA.|[g<#(8 AV%rgeSuXyLa&WDN$zv,4ZLL;;1vGgTB~J' );
define( 'SECURE_AUTH_SALT', '/b4[+JTeoac)%SE=IkJJ`ut(HhCh$?MR7mAj~kes|95jH2g`M2EX2IQ/Djx50!F$' );
define( 'LOGGED_IN_SALT',   'y!/g_dI=$qMxws-{{>^^IT<`[K|CJ;m=]+/~7yK-G!(!*s](,9a2 NpvYBiUB0n5' );
define( 'NONCE_SALT',       '~n7=8#X<YEwh/F g+,iO8!9?:&6L!7!=OVGh 48_?5@f2VbY4D)}5FowOYY,.mct' );

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
