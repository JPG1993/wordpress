<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '(&p*8>dyqFZ*6IMm**UbL;c9]&.!nKhgbO8Y4fP[g9$-B)[~OU2}fX?5{__O]$,U' );
define( 'SECURE_AUTH_KEY',  'g88qr6py wik_edjwaN_B p_L/_X&gc>vM~O>sL`_VR:at;&NcYf5wt~Yl#RYlQr' );
define( 'LOGGED_IN_KEY',    '<a]x15y!p@h.D6VJ^;uLJ!7{`MCQS<M-aqEi~mdf7=BHNAg0nA#K5X*V^j,=9I<2' );
define( 'NONCE_KEY',        'Y(p>eHw)^yg+AY+|+y%|{^FGg`$@?-hG35^l=WFJ6{#&ptqEn^4bsaKW6|;OGg*%' );
define( 'AUTH_SALT',        't6X,|/X(eLpj5UA~%jU:x5VZ2Z:v:W#eslUMmFs]&ImrYGkh_&-3JS>& 6!`F9h&' );
define( 'SECURE_AUTH_SALT', 'pg9GM~43:p[o+1a(jg%e7$G,@<(hk,d8@V,A?pfwa6| D?/l~hzT&K>`QU}w7*^R' );
define( 'LOGGED_IN_SALT',   'QXA(F3@s~*+lF$O86Pyg=F&43m82598:pcHq4)68#rZ9]@+8H=;6VQ6s/cT<|,W4' );
define( 'NONCE_SALT',       'OBe5>(=/INo3R85@Q/}rLeLK,x)5w?!aA0ih((Zx$>Fgowf*J^<XB]3.VA.}k7EC' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
