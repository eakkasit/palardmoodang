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
define( 'DB_NAME', 'id13869665_wp_c65ff06fece57a153e4765d3286634df' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          ':Ed`>M.LK<%{=+Nh@HcHqkO$|uEj^ej{c9){[y]tj^)5m,zkU;-`r4t32sVYop.S' );
define( 'SECURE_AUTH_KEY',   '`j}v@n@A}WY1;!QQWhk7P`{gI52Z&r&Rj~fRRT*?}d-Hg6k)@#i8~h,+89)%[vuQ' );
define( 'LOGGED_IN_KEY',     '?q{(5a,!&.*Z}f@cUoo%^az)L+A)xbWYH0x=m(_s[ YWZXTT1Sv!TA?Vf9|jpwA}' );
define( 'NONCE_KEY',         '&vPl+<i(uPvb~?9U,{6S!@lUlp>;zBKanb&jyu|3: 25fUY2b:r1r>wC%agT){9Q' );
define( 'AUTH_SALT',         '1C=}TSrz//SiCp?olr949X4jgs>*SbG7ai+>3? [j0_-SepapCpw#|w4LQbekw3]' );
define( 'SECURE_AUTH_SALT',  '.G/f)8DDlBBJ9,8*-R7UsBLa6_xNJN?bD`%OX:8Pl9b`l;FqRGDQ*tDVA_13{?d=' );
define( 'LOGGED_IN_SALT',    '=;tfLjz(2Z1g@BM=SU%f)-#_pJGN& @a;0#7drzhzikl2x1:S}HMAn9s}sF,x=-B' );
define( 'NONCE_SALT',        'n6}@r!wE/-Dz{iv[Xk3NvhsiE{Ajm=/cEKI3K[{3WCUTPdvn%u._mT5g6OEOvMO+' );
define( 'WP_CACHE_KEY_SALT', '0A@(<;f5+Qw6FX;$UBAf&RN%<]+5R1|ZQr~q,=4]E_WP`uVkL{dh~;SO>4?:on3S' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
