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
define( 'DB_NAME', 'uniquzila' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Fe$tu$245618' );

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
define( 'AUTH_KEY',         'k;c$du)*aBBxi5r!PCMN`Qj-c[N-$w/ -c`b}U0~epcaob_mH9&;%.lN|WUx?+6c' );
define( 'SECURE_AUTH_KEY',  ';!nv>~T<8PFYV`WV4S|4aN}MSECwo:LK/*^kikWbjL%FIWM)#LxCvWqWaswI}Q5%' );
define( 'LOGGED_IN_KEY',    '+azzbR6/s{FuW3naBP]VHVFN2C!x6%*_d^]3.GVrd{!M$zIn5aazE]H&.`If0 11' );
define( 'NONCE_KEY',        'GklB=hDtFz5PN]`S~r[*rLKti9;EnDu5krgn=Rj68]XIMc YY<2HR[+zCm*}(!#e' );
define( 'AUTH_SALT',        'hJB%{`.+ ~qP4okF,jfaR49tnp1h&)@m9?qCom`RA5@4+&n]RMP|<e^Y9VRU|-Y+' );
define( 'SECURE_AUTH_SALT', 'v!i2#w;SYE)d*P4eU|`hqPsK4SLAMt^f>IFw1UuT!x_}i=Xh@!a*Q2p>~kWK[(K.' );
define( 'LOGGED_IN_SALT',   'yR#iDu!Fz;l;r0oi9YAIi]@*0fEd!U!z$2KX@u~,giIgKLY2,mL$$ZzwjSU$+M6x' );
define( 'NONCE_SALT',       'vS5^lF&7=6O0#iUI4LuL $s+T; )Rt%8<`ft:$zXuz=m7.OJ0<Xp)MMSHSL&{WyM' );

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
