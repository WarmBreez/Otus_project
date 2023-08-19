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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'udacha_1989Aa' );

/** Database hostname */
define( 'DB_HOST', '192.168.100.54' );

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
define( 'AUTH_KEY',         'tbY:knAN!R_^@rJ 3d%$Ihc=agX+4vRO$+(3sB~ODD_FpjDnh_:%`6OrR&ll[OAH' );
define( 'SECURE_AUTH_KEY',  '9!kwul8c8lV{}h6q,>$C:<v-46Xv/V+mn}Y@?I+|Xw|^sSyZCwtVW-rg9qxC@Q]n' );
define( 'LOGGED_IN_KEY',    ']/kAT@|iw/s`tKmPoR$%ct6|Uhd6-YRvCgnOVtWZ^*}0Yb!`Qa?`I`WsIAptlWd,' );
define( 'NONCE_KEY',        'f{EuDm8 DDPw/5jDVB7X_GY^]&z<TVzSrQ8Z5!+{wi^sblE:#hai=[l#}b+(=^jl' );
define( 'AUTH_SALT',        'Q!E5@[K;=2:JRZV=lc0yd)Ed5MZvF `v;)*Y>pUHY)5ju?F# MGY`4)gJ=QZ}3eN' );
define( 'SECURE_AUTH_SALT', 'h4+K00I8<d75XXE}P|<$:0J/<mJ5wc`Lvx>WIFOmIpC&+X)@pAx~V,v}h<|dUd&l' );
define( 'LOGGED_IN_SALT',   '3]LFK^!McSCU$@=+(|QbhY~x3.trn)0@+k[ =#woo-FMd~+F18O.Ttjs1sC8=js7' );
define( 'NONCE_SALT',       'z>^6qI-fa:_Ig;u.-u^?@CB4m3i~rA8<v(u?V0DE!KDi;B!Mf2 WO7vy7?(HG,_9' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
