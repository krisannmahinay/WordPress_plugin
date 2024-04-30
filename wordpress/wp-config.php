<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'plugIn' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '^nI_GB).2}p!)Xu8u~r_rljjbLqwN2Dhh8w/T//>*,)4S`QJW.plDo3t>{uW<_#]' );
define( 'SECURE_AUTH_KEY',  ')^ 4LbDlM<70kM~%eFvR?Q?.dp I&f]|B5|JyF=i7MGE*[<5OyU/fZpYvHjVP{^Q' );
define( 'LOGGED_IN_KEY',    '@<<X%ME%qiNfhUIJs+yWlCk&7*YKy0TOC|hh/ya<t!7Fc_^TxG(O#C(7R9Cm=X:U' );
define( 'NONCE_KEY',        'I=RgC0dR?Y/:3)]hO4}KK_i{K4V)N}f7+6&d2d44+F>XX.#ZQyx</qdGm1Jd7KDe' );
define( 'AUTH_SALT',        '<GnJZ-Qo~Tor@|Pvb8SbZWeHo30]IBhJj0 Z3t~B5|7jJz/t8Xu??q9?}#b8<,_/' );
define( 'SECURE_AUTH_SALT', '{>#(f?/vEBf-)J?_~#]Ih%T[I-6WV#&7OyQ|BMar*/T#|dah,KxDzyNy?89MxkG-' );
define( 'LOGGED_IN_SALT',   'jsz=t^,}=jPI7)^<g=uV.iI]<.Izgt{)nQB!S&JLcF4vG;D`19v0dF N1+=a(/j;' );
define( 'NONCE_SALT',       '_JR6+>~2@Q%c.XteU9iI/xE`n}8$)$47t%0K:FB@l)K+R,v)J!Zby%<pv?kJ#I_[' );

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
