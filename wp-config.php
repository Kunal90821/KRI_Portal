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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '$iBh.Eu-Uhj2|) 8+fKqr!,=oNP7E94`u`4oE>=%az%6hM&v-g%tP9%/#8h(ul3Q' );
define( 'SECURE_AUTH_KEY',  '&`N8e> 1eVh$2uA~4:~+ j:k]*viIm33/to^ntst9LS^jRM99{&jRwK,uc#h&Zj#' );
define( 'LOGGED_IN_KEY',    '*+qX0`iHreT>XMNJ-oC<7M1h8G#2@&M^bn]cLIg3*Xp@t7EWS!77V 9},*Yx@*P}' );
define( 'NONCE_KEY',        'F473x9j(JMwjP4>T$q^)iOO$xX2y~9[8V3Crif}/ u**p?*;5MFhN9v<r,fFv.=e' );
define( 'AUTH_SALT',        '])K]@@y_a&>UFvV]*]Yx&WNInjk,W&mzNc$(D@zkyE;TFlV~:j*ZQ94a>RH6fK^I' );
define( 'SECURE_AUTH_SALT', '`;A]h`}dFGWdK&p{dx:v1${Igs*{0N-.@*^|+my%Y0^}l{7=XUSW?S<KfPXM;+q4' );
define( 'LOGGED_IN_SALT',   'PNaX&@?yilZSbsIST1BESaeQqTS[WTE*oDbD?/ !}O5gper(BS$4F,DEqF|$LYCs' );
define( 'NONCE_SALT',       'w=iz=vhg%{/lw-aj5<)1[}u8W(.FhwpX@RF:5W,N=oEpN^XqwSA6BAD;nql1{=``' );

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
