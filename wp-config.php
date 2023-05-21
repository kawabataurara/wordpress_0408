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
define( 'DB_NAME', 'Wordpress0408' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'kl{PUP3i#/o@d+H`|b-aqx#y,,e)dvMr]S(d_A</Q&RD5|nmNgSxcn}Jo2x9UelT' );
define( 'SECURE_AUTH_KEY',  'sC?bkcjEb+}uo|8K2v`m}^$qHva&DmUMR]g9b_@.()h0{zW`wEdy5@g?8yXnjT[d' );
define( 'LOGGED_IN_KEY',    'B8mOs0VwRYCLxX(vn#J>;Okh OF$6MvD41ik7M/cXL$}p9F;wUNesqm,g_fr/q;Y' );
define( 'NONCE_KEY',        'EA|>h8A.dZ)=CKR$27}db^I<2&_KC<-T8[!ZpTiXuE!bws*frPlx)aC#RT4d4Op2' );
define( 'AUTH_SALT',        's:/qKr-=n!qD(ejr}6H)U5^x2J)</[^6+h]J|2O5jn#M|wE=p:M!Zdhd gf gfR ' );
define( 'SECURE_AUTH_SALT', 'H?ij{H&#Ob0q#g7-]A~=fh[gy0]d=Wq<4oPH_FAPFPfa%8(u5n^vu$P( SeGn?r$' );
define( 'LOGGED_IN_SALT',   '7:Cz_qb100Jol?ZD-}31RO.$-p*(l;#z^vt5+C5]IY+[qc_`>Dt#`GvyC*=fm^wf' );
define( 'NONCE_SALT',       '=8jbf83#X Gso7iBV[b5 dE[XnnF$>@TjXrdfwEJX)}(Po/[cN5@0&TC.6|nfP}2' );

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

define('FS_METHOD','direct');
