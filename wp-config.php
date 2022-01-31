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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'kiSJ QIM>;0/aFk;[}x.Vpd~Dxcx)TYjU9/JQsEr3Y90NZ{<.i5z%U,yWopY C(c' );
define( 'SECURE_AUTH_KEY',  '2b5JM*FVqT_+J5j~<_DB9|aTF5iL{g~]3!6TB}W@MTV#*XS0km.s]@m8*/~dqo^^' );
define( 'LOGGED_IN_KEY',    'C|zU/qzv1j(l9rHl^^wcF`W-kSg5/RG(fEcFk0(|9!l&.bzsX}k8o^b/M|-s{*`M' );
define( 'NONCE_KEY',        'h}(=1H(8G+zRqJ]eW9VK/;Z%.Y=pz`SZw6Js0~;ypD!jLWehGz[kP;4$w&l8&~<Z' );
define( 'AUTH_SALT',        '1Xdn[chTC)O58`(#lN$/yJ00no/`}>:T8_J?l&l{f5](t|MWJ1SMjxzv!D8i6Wq]' );
define( 'SECURE_AUTH_SALT', 'P}y8qs!,5)c:u/C%zi#2RPWYKk9#:*i&DDbNVw8cMcDaOQ2qO2CMw#W##X*F#5q,' );
define( 'LOGGED_IN_SALT',   'zs7>._Vn$?F;>I5DSi1Dtc1TFK?ZQw=<jiMl(HHBI%j8FXc.1q0hY&Uj8cP%nF/H' );
define( 'NONCE_SALT',       '53*(l[tK)/nNF>~]5r1SQ@*,J`_LkA2b`Dwx|!=z]wp}75:`v_305NR:}X+!lVZC' );

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
