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
define( 'DB_NAME', 'my_wp_project' );

/** Database username */
define( 'DB_USER', 'my_wp_project' );

/** Database password */
define( 'DB_PASSWORD', '123' );

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
define( 'AUTH_KEY',          'gUB&FTinyEylU45Alce1kQ~[4#gBQ(xdnR@l.}u}6~XGUjJB;RXqVI#3!a5Avj<d' );
define( 'SECURE_AUTH_KEY',   '}hWN+@=_yT%~;%:Vywd3 SZe9C@a>V(u.R3e?UCCY.)Lr47$$;PS;yH10 ^XikG}' );
define( 'LOGGED_IN_KEY',     'ofr:W+I$497y3bIGHRB<HKyu_LUlo Om-K+1R=V&QL$ gaH4{ yShrGf1K]U~5:]' );
define( 'NONCE_KEY',         'VI&HpYpWwRefKhFWNl+?m.*Gr_8 :s~|E0Vq8?<3gN(M6x%y%#?^4k@$(wpay7J,' );
define( 'AUTH_SALT',         '+o~;-5H*&rI|YN0n5`%qT|4]U*uc@*0F.zrKSB2_3-O.+r-.)t~mu]Yd**:JoTu,' );
define( 'SECURE_AUTH_SALT',  '429=_^y?ttG<9cbH9RoicIz}o=`]:K7ym*5 yWa*-wx[A>Or_<+PolsbK5BQSXi?' );
define( 'LOGGED_IN_SALT',    'TAr-?N@j LC[f@~#ym7IVEkk*w[D28}N_23}$#?ck3Q>`8=o;0oM+>a]!FvQ+>UJ' );
define( 'NONCE_SALT',        'fwYn)U?K$oSefbYVtHF{)}LBMY {t9DVXnIwzvR[a}7UIn e*/tv<8ky2<OFs[Q9' );
define( 'WP_CACHE_KEY_SALT', 'oXYFj_@OSu*[_RJ9eIgY 2Yx2VT0%jAZPR@C)G9YAP6MKUPN@ 15|%_Ssl!c)U!#' );


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
