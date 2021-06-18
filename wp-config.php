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
define( 'DB_NAME', 'apptakdemo1_db' );

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
define( 'AUTH_KEY',         'q}O9tr iy|_:vHtT{hL|p)Ml*i&KL/$2nLIbaOS-.idVf>I]w>f}>>KA-]>WGk%z' );
define( 'SECURE_AUTH_KEY',  'yZ~gUh3,#T+m:kPq)nf9%{<MoIgi*-dCtE8.T&x_c[4&7&QRmTB_29dY+D?5!y@H' );
define( 'LOGGED_IN_KEY',    '@RHv.u%cGjK=?S,GGT7e{`dajKH# / =g+!qT)]WW@WqW{3M;h3*P_p^1Na?LYoJ' );
define( 'NONCE_KEY',        'HVP$,3a/M;,>7$+D8.`.CTCL+Fwaa.z,.;XD6LUD>a@)V(D3+f.~X.GiW1NXFsS;' );
define( 'AUTH_SALT',        'i-C{GM}E)F*EV!l#>5Vzz)d>ptl<wPLcAky_2r<)uT 0kO.Nd1`Y5v>8@_ye(E=:' );
define( 'SECURE_AUTH_SALT', 'uD:CB`db[k9o,{Eqb{} 9WE4rIrZQ1%9^^xUd(gxo#S#=b4ObLPp=5V1Y*-%?p!^' );
define( 'LOGGED_IN_SALT',   'w5C$V}$$I}Q$0JC,r$sXssh{9|1avg{4q%z4Co]UwBMNcR)0SErsYJ0PP;-II5R4' );
define( 'NONCE_SALT',       '5(^T,A?~9Q@7w&C4`ny@3CS{!6gUrRE{q$VdKkGK`{MIIc}Gkr]qXzir2{,(h~2(' );

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
