<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache


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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
XXXXX

/** MySQL database username */
XXXXX

/** MySQL database password */
XXXXX

/** MySQL hostname */
XXXXX

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
define( 'AUTH_KEY',         '%W|_h>+.1KBy]]8L/]s.D30ORm@`(+0,j2!2Eny8uwUr:L58cRZn^(lq?iPf;<]S' );
define( 'SECURE_AUTH_KEY',  '^!3QnQWP,-5Pa6}{:K&VwIX!3Y:+UJ|)-:(:y]D7N}Q+QCj wvK}&P/jnG.5f*D!' );
define( 'LOGGED_IN_KEY',    'Q!4zyBhH%[6FJ1UvBd4r$8NMRLP-`^H4Ccd,<NJ?,pv%m0e_44S]?y_aL^/0@<uw' );
define( 'NONCE_KEY',        'Vy1E}S8xOX^<bbL0rl[V4uf~A1-}~2+j$f)}@PA@|(V?tn%2rlP#D`YHn4;V4>IL' );
define( 'AUTH_SALT',        'HT9KuOB~R/tJY@9GsA2ot(s9M#[L8k:qu=iDuNUlnU2}l;u/5MD?5_/6gmv0hr.9' );
define( 'SECURE_AUTH_SALT', 'za]Hs6*_4->ortcK<FxF;TCEF^>uaES_e58*1pvw)L8H^8 v(m#^_bMHK~lNw!q4' );
define( 'LOGGED_IN_SALT',   'bCULsHKA|I9W-b[xupT,>Ro%~HF0kH0B@ub?3?1})V<+)ZxzTfRJ0mv)Rd+|@r(_' );
define( 'NONCE_SALT',       'gC a$fj$Raup~g0>XF8_G<N~HDsOYp),y76zXeJuo^P2fk:6,f`[P0+v(a1T?vBA' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
@include_once('/var/lib/sec/wp-settings.php'); // Added by SiteGround WordPress management system
