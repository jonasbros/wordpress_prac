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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '%3gkLB$~4=n1A(VNi~*xZS@Bp|:=iaFX] E*jP4x9L37vvT~ixWC2$Zpz @q*5.|' );
define( 'SECURE_AUTH_KEY',  '0}}B>00IW?EshrFEZ>usJf_Opk`Hj&LH-!aJhmviMOJ8=#zkD8~N}l<R%y^noMbp' );
define( 'LOGGED_IN_KEY',    '1ar?U3w~p1 kf5@r,&v+4=G39Sn/>]7%J]L3K?d!kIQR5CB.MK<k*qRuv Tz(cP@' );
define( 'NONCE_KEY',        'RCRC{9fU${)n(%AgcoG#T&&eAu0{JGX[`rrNY),g=|[TmGe3 Q.FA:d46zNh1L+%' );
define( 'AUTH_SALT',        'v1;%au0Q9c0aYh(x;XBv{f$~%z`aE| -_mrV~92$Bv(QZ b!V7n`Dm`fqlyJpUG*' );
define( 'SECURE_AUTH_SALT', ':Z.Gh9ThO@!%g~V5R5K4hOkgv]dWBE@#S.q*khZ/9XXy30ZmpS%JRY43I*Oxc@ie' );
define( 'LOGGED_IN_SALT',   '-C`y:;]>;HKWD^Hr8dHn:$BSrG8sX&SZRy8)IXpl3{B!KA&Uk{Mva3igY@zXLPkM' );
define( 'NONCE_SALT',       'YzTfGsLA)dL.bl8?3nN c!@gOvABBA.bkxY4:C/Ux<|@#Xl$0%]17i(4.S}<MyH6' );

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
