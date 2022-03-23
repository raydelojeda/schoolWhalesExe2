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
define( 'DB_NAME', 'schoolWhales' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'Ray130865' );

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
define( 'AUTH_KEY',         'kYb|hBCs}ue[72YTyKK$@{/r&:v<wl3YC-eY~Y@ongE|}$Xa^<dQ8J2^`iMsI7,!' );
define( 'SECURE_AUTH_KEY',  'smxj<}qKBS(Z;/@4T7`?MY:w/o& ?;RgGF7ar^F?(_4Aa)T5e$B=}aX0<~X7;$7f' );
define( 'LOGGED_IN_KEY',    'qk6ux)sl<|ekihP@M{KsWL{1+Zx.dF%xZ2jHe;9&_nZ~sZ[,c@@sezm0J*R]M$]l' );
define( 'NONCE_KEY',        '8kw|7R4Q!BXE[d5/(0%_em[B `9A58{he#ZH(+h)W1tm!B5!/K9e,E;-C&j?7r3I' );
define( 'AUTH_SALT',        '[O]/zFJE`Mx^T%2hH!hpT1f@a8?9-R1n.R,H6)nE]]m8s{IMjP,hrHF.F/ClKiK1' );
define( 'SECURE_AUTH_SALT', 'qq|0dZn|B5Ue&avAMqpkC.?S_XsFL|~B&W(/aTM0<^PK&iFp?@Ln{{7Mkw}$ x |' );
define( 'LOGGED_IN_SALT',   'EJ $PFzSm|Y) na:!EDgtj1m.wUX&B!Z5+{y%&Y(}HckEi$_$egQMWa l^8{;d{G' );
define( 'NONCE_SALT',       ':7YZ(DTW>WG#Ljev*MLXg-x{bIEUMIXsd *ib3rhe}rY<E{.`sv;>0-mMZl^-w41' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'sw_';

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
