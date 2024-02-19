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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'rv_associates' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '12345678' );

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
define( 'AUTH_KEY',         'Kh;hqAJ#[e):T- T@|d+.?a0#vR`:,r(i_kn[?<<i/Fh&pweu]tc46D|P89GywTY' );
define( 'SECURE_AUTH_KEY',  'P~wf[MNVv}S?X{b/S+hl#JU:jng/,mXP9W8T15n`&Blu>xDQ|#fRM!J~Ctb}G8`+' );
define( 'LOGGED_IN_KEY',    'yz0P=g*%mPV$~(2^c3cjR-{F<y0nl&+6|PaEL#s{wGu7|(7IfgjEwrupAqKwywIx' );
define( 'NONCE_KEY',        '<e_@&smwZgsqXYnHJ@3%wW{:l5<0QIb:~~-L$9K[5^Niaw+*GY= B#g8{sVbTk@,' );
define( 'AUTH_SALT',        'h4ChHYiHZsl_$DV>TyT=ml6,cHm|ZuHVtR[01:c}FTu uFkUkpK@nYS$Zvk+I`1V' );
define( 'SECURE_AUTH_SALT', '|>53CDcFR+-{P45VrmFm&P4X0W2qPxRRjC/z(O.>$=n3^L@c>K[^?={`4(qXBNzh' );
define( 'LOGGED_IN_SALT',   'YSM<;[^Cbv#glE0S#Q}-17/OD6N@I*IMF=@l5^?c_%2NXnhk>IXk9t3Ui|FH20C?' );
define( 'NONCE_SALT',       '<GUrM~K&D`f:UkwK9vg$nygV(vWK=Qdh2d*f<%1Pl{6Pvv#&2RY<eWfA:aa5lhcV' );

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
