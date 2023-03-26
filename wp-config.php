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
define( 'DB_NAME', 'newproject' );

/** Database username */
define( 'DB_USER', 'dbuser' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'Q^-4Cf7gWuw4.7b93W`9)weP]e6l!Q$:}$Fm[jp|kodHvhNVw&dU8PoD`ctc9W51' );
define( 'SECURE_AUTH_KEY',  'Uf|o/!sk0f22Sp5,|C,+JW{:Ro6B}+SN3;k]|UOXX`/QsslN5uXS(xEq>`(OUYzl' );
define( 'LOGGED_IN_KEY',    '!Oph[(Ap6YqG{xX-)P*P]msji]dV43%.NRO]q[7a3;a_ jdSlexW;adfMZ{v{^|x' );
define( 'NONCE_KEY',        ';4IL]{%9M,MYJV5z#)po;~O>|2ackTU|:I!Ohxzg)&6v&4ZpH8(LiRhEUN7#SiO`' );
define( 'AUTH_SALT',        '~C6sm}JlJQiTo5c1myb:;g?rU5GC;pc*#n>In^6|4g^A^z[Sc2})3N2MC*OILwd}' );
define( 'SECURE_AUTH_SALT', 'U(.00@z~4<bmRNGv.e:,SbiFa;AQ- eh9E#rP;i|VgMSfj>-*8NYC%Q}6a.JO%`#' );
define( 'LOGGED_IN_SALT',   '/0@F_z)7ReL&=w8_EAr-;bw6-Z-):n>vvnQXeXj~Q~:8KTyUi(QBHl6Ah7D_!$V2' );
define( 'NONCE_SALT',       'n}RD]r5dSZRZTb!5i$kpn4!jpU%Eg~^ADw`?X&q7,jj<Q@QR$=}95b__Zs7VnJN~' );

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
