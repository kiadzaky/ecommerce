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
define( 'DB_NAME', 'wp_ecommerce' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '123' );

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
define( 'AUTH_KEY',         'nq]pRni>*Ve/bS56}%(guf-=lu2jKS ssiojPC5dr0]CY#o!rwKh<gCG,YXuBlru' );
define( 'SECURE_AUTH_KEY',  '-dS]P2#jI G(%]#k^iu*BB Ii6:Ml~.!?-3nvHP}U&%Nc3R1{2@uo#H-[@tLcxJ,' );
define( 'LOGGED_IN_KEY',    'Z0<f|M(_|%l|@^$Ga?o,)(]<k[N}!.{8LAX~JrnYo@jW$A][p4Vr|@GSVJr p9Z*' );
define( 'NONCE_KEY',        '%i>qg!&8/t)Gg#U8Osv;*Ah:{*%>beF7-tDR:qMY}gw$-8OWQ$jgY4f+,%(:8Xlc' );
define( 'AUTH_SALT',        'fY>;^-e>?$V9OG2dXTo2$hT,sa@d![Te]OW@W##O-oXQmqnW3hxWdQK^RS@m.NVM' );
define( 'SECURE_AUTH_SALT', '%!%%ocssSyY/`p?#fu1b5Y*9x7Z(itW~I0y?v0{B `|XE-Vj+_+m3AgwPt+bD2f=' );
define( 'LOGGED_IN_SALT',   'W%<pVnl5p(,;0x`|iPdQAT;>e{H7c/4<4x|0S0Ceur;HMhok,b8l)4[pa4rCdFyo' );
define( 'NONCE_SALT',       '}sx.1#sOi,JJwjT{&7a?=Y& oxEjE%7{M9bO1JrB)AeWiw>Gf,WuH {K-R4b(*5}' );

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
