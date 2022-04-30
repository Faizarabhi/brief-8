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
define( 'DB_NAME', 'portfolio' );

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
define( 'AUTH_KEY',         ')vTGmc`?Y$h78&ZkJ)+$}ugeQw?d~R.FRRud}07_7pbF@7s2~6<)zJpc&Be!@n[U' );
define( 'SECURE_AUTH_KEY',  'g@<IH$He&XT~WEtzy`rGpG<%veM#QPCW}_cQ*f`Xay%E)/U$2j}>Tmfh+yoQYI`@' );
define( 'LOGGED_IN_KEY',    ');_F2d)Dc,yvAXCU-p@@nlg}sx8p([HQ=7<an,^}-V1h)`h[gJg&_f3cD8doi7`r' );
define( 'NONCE_KEY',        'C7D)d.QW7KH^!E3}@P>qe,p#lB>6$^?o=<_mmKp:YFZVLEV4U;4/A&0]DacL2=es' );
define( 'AUTH_SALT',        'T>.gW7d|9NmRZ9%Y^$!G:nm`mR%[?7%*+U9*+OhVo!|q +2^iz4|nmA+z8K#6Sn)' );
define( 'SECURE_AUTH_SALT', 't[%ik{/~r9N?|UM:TW!i^-PA>.hecQfz3b7&uLNX%Gk^<)cM0_phI6^VMu-@2 lf' );
define( 'LOGGED_IN_SALT',   'N8!`fn@YulCnWhSp2O9Tf<zx3~V}.ld<*gl+7JC/C[9TrPrP&O;m]7>#%>{q90FP' );
define( 'NONCE_SALT',       'A)b$zY7!A_8g=2i)y{ogA-&?!7w9Sq>qhQ*2%5j?tata0}{T3-rX*y+?35r536]T' );

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
