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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'circulardigital');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'H?rOF[<W*gH[f{BuVAp3Sqv3V1,S>*YfV>#wY]Q0%8pJdHBBx&/ZEPpP2Df3{(6Q');
define('SECURE_AUTH_KEY',  '2A{XhuyhYXr!?FyrMy6>5:Cb~KGDkN(Y2ehPSU%_A&EC:3}R{*n-/(!5g!#H57O3');
define('LOGGED_IN_KEY',    'mSfyKI8RrQ?<<q!4Klr5mZ:cqF[%,d2nChDy=8%s9QmpVtW=W7g<kes0/kZx@!/}');
define('NONCE_KEY',        ',@[4KA]cY)2Wq)0^)SnDhp=%2@#@.5Cy1D)y1^tH=LViSP/Sdm~PDw|5L9m[B.F,');
define('AUTH_SALT',        'z&n*hxC<Ya8@_N}aAzdRVkwmNM(h%ZXJlo~Y#FQyA!m9SCxgacw4;j){LEek4f[q');
define('SECURE_AUTH_SALT', '=gE+kKm4>Go!Gdr=<[gn$-]Q,7l_RIJ4axQ(}upC|dI~f[A)sil*C&Bpo[o+M(sl');
define('LOGGED_IN_SALT',   'ntil5vu*)E=|WEK47*tO5Buhy]fFF}p}@+4]^$n.;9^Ug6Eg25xsf&zSLn3_g^IM');
define('NONCE_SALT',       '&i[@=~N?8]%!9$G:3LHjn5?2xo1;x#p{2X(~s_0-/}3;Vtp|xZS*j_QmJ;XP%@=~');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
