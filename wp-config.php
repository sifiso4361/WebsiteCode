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
define( 'DB_NAME', 'websitecodee_db' );

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
define( 'AUTH_KEY',         'PY5)2]z~u=PdsFTZa5O+U!^VUAf@RicU6G~fE~jN2Uc#(o9PtDY@/~_[<p|;I{Y]' );
define( 'SECURE_AUTH_KEY',  ' ByaYUTg@TODt=}f6Cs_%jbNXph_h F!b^qjCT$8UIc*M}&AJee=ob^io{}S1LD!' );
define( 'LOGGED_IN_KEY',    'xpY52APNrR{7~s9AIzBZp.<J7sTGUVq<x2mU8c{,t~x~1yj;`B|! o%H/k6Q*|Q(' );
define( 'NONCE_KEY',        'wI7$yb<LS}6{!$.B)Er|>dE`J(HM?.1K/}2ze=9A4*^rr@t5hslzOek;{D6H8n<3' );
define( 'AUTH_SALT',        'z8mp ndGUuVkyNnB:_E64C J5HJW[ v}0(r)F3jAUC>ya,FP_koYo8RIvRK2Zg(/' );
define( 'SECURE_AUTH_SALT', 'u^243KGV_ Xu!Y9&lMi8@%1*1P[?G4M5;DufM#Z@5/BI7Z?(5T2j=O^tWJN;yYCp' );
define( 'LOGGED_IN_SALT',   '$%C{]-.D^S|1JwAv#XaieB3,a-?E!`Lf:bp@5fV43IH~;vL,{-bTkx[7}X7/XKp_' );
define( 'NONCE_SALT',       '9WWC#uM%XQH,Vb,z{fge7=-auKJz(N{|PS7m8(zPR(5AxKR29zwP6wC4dEN|BiyV' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
