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
define( 'DB_NAME', 'wp_db' );

/** MySQL database username */
/** define( 'DB_USER', 'root' );*/

define( 'DB_USER', 'Gosia' );

/** MySQL database password */
define( 'DB_PASSWORD', 'gosia123!' );
/** define( 'DB_PASSWORD', 'gosia123!' ); */


/** MySQL hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define( 'AUTH_KEY',         'q&9i|EU5@dn}69(/q%NbbGb$K)N3J2,[^dHn%68Wj~OwwR`KRLWco;y`7wlR(h7%' );
define( 'SECURE_AUTH_KEY',  '1%E6Tcrz]!tC?HXF>Bn+p{<GG{22n}de/+E1+/:@S}81>8xJ 7:W7d+)9z~PW;<*' );
define( 'LOGGED_IN_KEY',    '[&zo3FKOnwFv`s[Uo- @h#Q4,s7 b#F0v|h<gnibO}-AP~aL-4-o|4=3J,vl{Z*s' );
define( 'NONCE_KEY',        'jmST=`P(^PA}(2Z,>t.M`b(SLKecbf,5>P/s/?vE)_q3=|$DKze]UD;$%o<x@KBM' );
define( 'AUTH_SALT',        'j)8-96}+6VmD&eW=9TXMO /mb.=MiOueF)Y@eVdkCFw);|j`H^0R=yJ{]UIicd;[' );
define( 'SECURE_AUTH_SALT', '_734xC{-Itti?yxC_Z{,ea|Ja`xtzReeZAK_-!kFms*GlL=# s.!@!sPJvjk[W_T' );
define( 'LOGGED_IN_SALT',   'sof5-YB1jVY*[^D/=/*8dJ`e;nga[#duw70.I+PBb!{QDefCsGukV <(!l?@N}?n' );
define( 'NONCE_SALT',       ';fs2N0#i2LPR,TLeQpI3:jFGPTmP7f[tREMU_gBWemodVhfY#>jl4 F)N^,G32Ml' );

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
