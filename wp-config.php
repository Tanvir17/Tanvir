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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'tanvir_db' );

/** MySQL database username */
define( 'DB_USER', 'tanvir_dbuser' );

/** MySQL database password */
define( 'DB_PASSWORD', '1234@' );

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
define( 'AUTH_KEY',         '7vONR9d^>WV3gCu#I>?/7D$*Ln:]dM:[qLa;Mn p}fl$VIi$mWa2sq&NM^-[!qc-' );
define( 'SECURE_AUTH_KEY',  '1.7a;@B`yZ&w]{n_XzJiKhlK)|WNJ4COfL:W0A}|,q%b%U`|oDg1WF~nM}1/GLZ=' );
define( 'LOGGED_IN_KEY',    '$cvySn+83 m,LwAVWovHo`Mk-m^& gW9u[x|D@#na#8-e`8&@>x~4,)q;=9f<<vO' );
define( 'NONCE_KEY',        ']<#j_RO56Ut+ODv{65FMUnx>4mj0V1$=?AQe1^UxO0eD~yWwpE+U{ME^R]^zFy}%' );
define( 'AUTH_SALT',        'N6F<U@T/sc>.UtO_i33X~We_COI%zTa/X_bKcZf`/&2#5&~FbJw?53k1a=gmt|#s' );
define( 'SECURE_AUTH_SALT', '5va>*~[m<]bin9q9}7Em_E|e.Cb>v~za?iPld?0DM0J-A1M|M,|~dB(G#P23>H5a' );
define( 'LOGGED_IN_SALT',   '[,d5k 8c<ba`MQE,h&yU5i8w,qUM-ZB6gBRyEi[wFPQWya7hlMe?dfo2Vy`<=$fz' );
define( 'NONCE_SALT',       '4OKBCAv$RG[j49iM0jgN4Kluac6_z(=~]fm>&!gP,Bg1IOFvp^4]r{u~oc>+TV/6' );

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
