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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',          'xlpc(sx@];g_**3{,bf5!^5df,$6 -0w<]uu2WkzjN&]!)L6blx|S~h8#tTO|UZ~' );
define( 'SECURE_AUTH_KEY',   '9h4tExmjn%&S_F%RWE.m(`/At{[X1|!] ^R1F?f$%%k2;(1%487BG`We_tG)fh)`' );
define( 'LOGGED_IN_KEY',     '_>K#aAR9iiS^9iuMLpS?St&^/~q(:b<^L*~X3h l3Jn&A|QQ}CU*mePz&1n}UN~}' );
define( 'NONCE_KEY',         '6+fb{~K)s..Lp e%WG2u&BV!$v4TT!K07=wlJSNIknAn_1ddO#:H%/QPeu$sz`?$' );
define( 'AUTH_SALT',         '03bS}YXuL*o( 5X*3cJ]<Bya7`pRf,R>[0*R0~35gvStA~[2|WVu-JDnX=$,0EL9' );
define( 'SECURE_AUTH_SALT',  '*@)4?!N-lq6hb:6TmI<$Cl~R!X4jCVGS BeHLvTj8q#kG`j71pqrTdaEULWSi=PP' );
define( 'LOGGED_IN_SALT',    'FBzbD,!(A-vl{lf9~VsC)NqvtNVu`G6jm1F3G#YgLLFmd{ACmZWLQIQq4pVbZ<xr' );
define( 'NONCE_SALT',        ';0&)BE#j?#[f[qv$V12;rEGx]5zc1$S1Jjnh81O$MQt@7rW1MWQ4nA^5-k]l4xcv' );
define( 'WP_CACHE_KEY_SALT', '+h4v*Ql}Ycn;REda@(*I&^A0 ?lh,L@COSx(yGi),7vl9gDg.|qqw(3]wa?o9jL@' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
