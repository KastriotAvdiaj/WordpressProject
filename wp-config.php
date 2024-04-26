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
define( 'DB_NAME', 'wpdatabase' );

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
define( 'AUTH_KEY',         '=3&`^g[X&`@FjA(ge-r25y@5)FqP^>ou-?STx9c{JnM4f*|J-T`|@.{^V_U@>!)n' );
define( 'SECURE_AUTH_KEY',  '(pw}?/lR1w1SL:;IsNXG@&y9kb.R6Mr,=9AoG5X<VGW!SfY-m_]^RHIQoHVJ@G00' );
define( 'LOGGED_IN_KEY',    'OJNo -E[g;c,AgsVlql}?jHL;,4V!TPy{cRLbOw?@JC x:%5(37GjKRXzUXbpnl-' );
define( 'NONCE_KEY',        '#m.QJ8#:TDf(<OXX5r!s8Vy4Gu9+P@`90?$CVkuG6mrJH0=;fE%7VYpv)Vz$uI9f' );
define( 'AUTH_SALT',        'smET9J|ukPdK~)_CGBjaS,;At$EVcj.X6P_JxX<j;g]|O`A1 #Rj@|24eilb7+H,' );
define( 'SECURE_AUTH_SALT', 'bSj?IgkWgytV-c`r[R$D2ENHfl{ua#;c8qZda5_=!66]MY_IpUs[hT$b$c6mO>$n' );
define( 'LOGGED_IN_SALT',   'Fz$4xd-K<GlUDgd%,$GGUHbHY8%9o8}Okaz7QQifiP-n_QVOoOLmX W+bJ;:vZlD' );
define( 'NONCE_SALT',       '1}2<Tyefl//!P>WM*)Y&Ink(!cHWO^9hUF3H7=>N@z7KKYjEAW~Z4}+%})REac?9' );

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
