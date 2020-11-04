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
define( 'DB_NAME', 'jongkreatif' );

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
define( 'AUTH_KEY',         ')y_HmVr3kcdH1V]vY93Z)LE<nG/+y_-sl9|~~~MQ5aN>GUS.[Z.RunKKq;,aJej#' );
define( 'SECURE_AUTH_KEY',  'BP#=Ak%q Y789si|;X?;Y;XIBF1PZp0;L8yv4dq:7QeSvZ64nmx:Vk2k}YVGt0U*' );
define( 'LOGGED_IN_KEY',    'A=(pf}wdg8Ro5QIri~Eq65J,OWp9YZ}R9zD%WaJ@AWu^2hQSddzUk$/<A:r;4UWs' );
define( 'NONCE_KEY',        'js}%ChtHvVD#Fn~QvBGwJT2z.L8abn[hGCWw7{g_k_Kl$C^Agagr|-F(fo6dNMt9' );
define( 'AUTH_SALT',        'G`@@s$u;:8oANbRWl3KF!p-Vi!.?eZkmIqE_P?}XK~}^@/o-s,}&vTrfkq:9(1[0' );
define( 'SECURE_AUTH_SALT', 'ms_`#&_B$Ib( -(R;u;W9^fa1!ppF@e<^|@8iCZEJ0>k73[m#-[qU7LU/@tQT|)D' );
define( 'LOGGED_IN_SALT',   'V)3BZ q`J/y@2~ZP@1Jk~jFgdNb&>DPr3Q,x3~`MQ4JOCbH$y|SV 1v`w{A~^WSz' );
define( 'NONCE_SALT',       'moW ,>wu8giLn5d6sPeC7u,>Hw:YQ%H{DG,sf$VwUlG+DWxr<zpbu*:`/t[{zO@`' );

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
