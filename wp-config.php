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
define( 'DB_NAME', 'ac' );

/** Database username */
define( 'DB_USER', 'ac' );

/** Database password */
define( 'DB_PASSWORD', 'Trapking1' );

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
define( 'AUTH_KEY',         'GiO!Vq0o2RXwQ.sVj`@.fwD5U.aHBW_&S<t5&[<A0|,BUvILSX@>Y]vJ{dhUvOMb' );
define( 'SECURE_AUTH_KEY',  '.XGYjO*b$BzW{=(-uUk8l^2qof(s-m-hGf*Dom;3N<#bFb|88Jy{0DY6CInT5/a%' );
define( 'LOGGED_IN_KEY',    't,VUm:>Gzgwvm:%jA~vVbJwu8gLG1)`?6:[=fN0$<XNEk>]g+76<&W(z@oY/&h7x' );
define( 'NONCE_KEY',        'm4-~qk`gAzqXt;dsR53dF?]-X9-~%0EOH^gI;tI&^l(:RY+=4LPay9i(jE9B|-HS' );
define( 'AUTH_SALT',        'tw3s;N}Cd;xgTO5S4hARbt,PY5=BBBBK]*g/(MH<;w`KT42N/yvei=,IGnmeSb{_' );
define( 'SECURE_AUTH_SALT', 'rPuU:NlR=8c0D,X 7KmvMp69~[G CWRa+!#Tp *cPIwM7X$H~NqGG/[G.-S/vlQ]' );
define( 'LOGGED_IN_SALT',   'zu6Jc,$LZbZhr/&$s*2b-)W`FUwyq#*<p`9&Ks9=It46WWE.8zT#tzuJh#XzkI7N' );
define( 'NONCE_SALT',       '-:ye+VDEfu4^*);mo21h6snrZzX(8[>q3W!$xdW!JIGJ%]@tcsOtoWF=2bZyoR^/' );

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
