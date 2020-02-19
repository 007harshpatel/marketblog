<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '$Auis&M7E%u,n=*U|6f]NQCz4e6r.au0(jQ9};24BFqp6|}cq*n] sXd RvpY%D4' );
define( 'SECURE_AUTH_KEY',  'Sa7}{_?D8n)L/vyr*~6bh<7nNw=iKV_LfH)NpW*z1c5+ OAVYTXN-g,e|ov3@hSM' );
define( 'LOGGED_IN_KEY',    't> 7<QwQ*B6Nis$Qal$V9B%Xi;RS(o4-D~{~0yHU,ZT.bR{ B/;R~KlwI$>G?5FP' );
define( 'NONCE_KEY',        '_4r[3?S+VO-?Q04J^G,z51JJ;c9q82 r&hKkr$+&%~VBD<~]8:N*nZ<$? ~SdZnn' );
define( 'AUTH_SALT',        '7Rur*%jLTOR8}>LIE(a.V-2hmmHb}o5,c{2B~&+34]-o(DqDueavC!s}=}9J&*`1' );
define( 'SECURE_AUTH_SALT', '>Mh]={3LqoP^/peeVTNw>UVKrQ=J|)VKU~?I6aXRcu@U<yAG>l;2RhAzB3^=7;wG' );
define( 'LOGGED_IN_SALT',   'y~@+/3nRCmBWF~X?j+fP~5#`YjzI Ig+2jS=^{:Em6iSJdB#|/a2A=wG0Qz9G/w;' );
define( 'NONCE_SALT',       '#$#tmv61uD6oG&O/R<y2L&>x=f&knE027uD>B<^)g<8mp/lA.D 8Upu9ZUXNYi3@' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
