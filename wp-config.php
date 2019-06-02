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
define( 'DB_NAME', 'wordpress1' );

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
define( 'AUTH_KEY',         'n(<#t4r9,bz}Mb5EDbEnUuQ>cC&V=Ye1PdT4EAfHG(]>f?upeR!4Y/vlN}%lmE#@' );
define( 'SECURE_AUTH_KEY',  '<R5j;`#-OvfEeu~E+hF&vv1YIakS.<Z^+e}|``O)Q[a+QU(8Hg|n -Q|$H)$Q)rc' );
define( 'LOGGED_IN_KEY',    '$;mRLC9/DYt6CTBf{d:<ZI,2aJu$l={68#UjBdhoK,rjA|=4.dK&f%6_hDU5-o+o' );
define( 'NONCE_KEY',        '9P#s{a}>6N#L.g)[e&gUYS{4,N3}#78DzXv%;cH}W8e3fwr4QDcE:)u6:<y{@V`y' );
define( 'AUTH_SALT',        'UtT4%WD-S~QgUE9;]Y=fi4:a%?_D>z[}Xz;a~:lf(N5H$!#LljR#kI?sD~U27C57' );
define( 'SECURE_AUTH_SALT', '^aHp]hIZo{nQG$dnL;~@2??]#WGyRC@[+r0^AW<j .uG[gT^SHBYU9lMX<e}Z94[' );
define( 'LOGGED_IN_SALT',   '.nvQ}aAj8i?Z6`pq`n3qQSo|}sznvh74KF:TVXWvG^nvBK-M5J52( I|;|t_SZUz' );
define( 'NONCE_SALT',       '5hYi&ApUV}6Xp`ZJt.SBhXklgh-:jSE>XIUK>Pg#P8m4n0{yxOpz>bUr+&>F1^-_' );

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
