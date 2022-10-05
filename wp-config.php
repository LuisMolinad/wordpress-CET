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
define( 'AUTH_KEY',         'g&O[kVEB.`GhII]u9B(Gs2o(G0Pojg0/Y<gK>&$m;qt6Zcugi$z/!S:!J@AZ+o#X' );
define( 'SECURE_AUTH_KEY',  'S,:ecz[#q8E>t3u<=JCJ.Nm!5p@$Vy<Z)GYQ~gXy5AN7sA]b!py+jf]Z9GK[/TEt' );
define( 'LOGGED_IN_KEY',    'k%@2jvaR8{1Fkg1tI?qH}lvy3rCEbR&D4MgY&Wo5oDjuB>V}(Ov8^o&IR/mNYE;%' );
define( 'NONCE_KEY',        'Fn*KJe[Zeb[mbvl}Lig5Y1owp`j6MM[(-^K6.{!l[v}hZ&nE)i0}AfM44+6%4n^l' );
define( 'AUTH_SALT',        '?z*co m/>$LqJ+m??;D9),izUhJ)-azaVFCa@ybw{xGD`1cu6yg~!1N2!WL0Rb%S' );
define( 'SECURE_AUTH_SALT', 'h^};eP_+W6]&&P^(J~|`-0pY%Frs$pc:$4]3:`1[&,+q>GboV&cwX1*X:; u&:E(' );
define( 'LOGGED_IN_SALT',   'qlgPS!Uy|s^d(#EJ!OB=_!`6`di$%rNK)gl9<gMmv!?yt(Kc0bsmkUT,$#a5fIyO' );
define( 'NONCE_SALT',       'KIz-nUxiusGy:.O}tKBRO_Ysy<<EtM,VPK`MeS-yO[O8IX~EABJ0`GOIYK=-&rI?' );

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
