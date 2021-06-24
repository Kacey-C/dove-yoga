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
define( 'DB_NAME', 'dove-yoga' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'v Jn%tL(Sn@?mDL[{t=9@@b2L?|~Z{oE+7DnpR$F7->nzskl7x  t&1d-Wj{QaA{' );
define( 'SECURE_AUTH_KEY',  'o.112o9Jn-!4TunMzGazRiOvrySH!lgj^Q6$HNl#}.a7*+s:C>B([`-aznSM*9`w' );
define( 'LOGGED_IN_KEY',    'FTPz/;q^MZ.I9]B8.f[!K7MqrA9[7>V[ta[`vEkfAjeS;TGlwH}dra?5N8@vrWf0' );
define( 'NONCE_KEY',        ']Zm]7XcU9=$7!%AuPr6r$yjRruNB#K*yn}wR1O_)W#gXMm2`FXub6Z=5NNue?O#r' );
define( 'AUTH_SALT',        '&*#{6rFd#SlF$*A/6=`-^^+_vxmqT{5s; ?DCM|tC`kOv=8A&AK co4e=zs|/3!*' );
define( 'SECURE_AUTH_SALT', '9`g5%Ysn)yZsU{<v7CHA`Jv*xZ`umL08H3hM-.st14:&GO`XXW#sRubJ)zFZSId&' );
define( 'LOGGED_IN_SALT',   'K3_r2q7~;mAonqs/f:e9%qQG)q=Is_B,_|w!{fm_@A=+DMrgv,2gh8sAm/Z95V97' );
define( 'NONCE_SALT',       'vHGPW{vK>6y$U_uxA]YSEK2&D+Y&JN&eDP~&dcE>DzCtK8)IJ9E(`l8z.vhu}wRY' );

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
