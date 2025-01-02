<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'dev-illearquitetura' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define('AUTH_KEY',         'F 5*68S{hjt=OBO|,x(^FtTGpu-NP`;ifES6m]u>Jg^ PLkGo_??I>CVg/%Kk:ev');
define('SECURE_AUTH_KEY',  'zY>bWi,FW5vEV:P%} {<A4rzr>$fA+>K#>Sp8x$0Vct%.F3>#T}7lz%E]avM|Yua');
define('LOGGED_IN_KEY',    '4RdC#]/UT[>bIr$#a4Aa&[ToKOy~dZ40$<b$~+16!oe6$C>i[M~RY 4HrH})QHZ_');
define('NONCE_KEY',        '/W|e1M(C`6.o]&2NMuj}<5vHaz4aZ3$T8qJ3eY0e,z(v#Lf,NGEFaA9lT5WSavW(');
define('AUTH_SALT',        'qR[Q/{5h|B:#o5STu>R(3P!f1?iQzt9Z-<B!( R)v,#~vhjFlzNQoA&V]&[K,3&V');
define('SECURE_AUTH_SALT', ':Ej@j`bg$|.PyVWo1Q>9ahsPUSw%%8;6bo%%d{W;RjZUk7[PmxZ%<p<fN/eq6n3s');
define('LOGGED_IN_SALT',   '$zO%$LHuQH*w]^h}C&}LHSqg/+}pb_kXUKsa7NoC56eX16T>5GJ#l%nHnn]oq6t7');
define('NONCE_SALT',       ';hR-*FZe 1m=0Vr;3NbY?bn!8;h+<[#$OsR+@qqI/[FJ!BCmicB#Tn)u.`I(#UG>');

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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

/*Desativa a edição de temas e plugins diretamente pelo painel de administração*/
define('DISALLOW_FILE_EDIT', true);


