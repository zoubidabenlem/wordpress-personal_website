<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp' );

/** Database username */
define( 'DB_USER', 'zubizu' );

/** Database password */
define( 'DB_PASSWORD', 'Ss88047062*101' );

/** Database hostname */
define( 'DB_HOST', 'localhost'); 

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
define( 'AUTH_KEY',         'Zppdo2)UPUvD`)T.>.#``+O yUR;h=~n*sT+A}$uIe_mc#/p=y&]rfUpHuRYTaRg' );
define( 'SECURE_AUTH_KEY',  'Nf!75r2QC@;v5xEz%rb$.6%SII{go{nI)=vx_.YLnOWpZ&2;A{48@@4HevM$qc#(' );
define( 'LOGGED_IN_KEY',    '00frF#EDnCaTvbDhmUBE P^ g&-RLB1/FaQ_9bD~TvJQ99H2ce^z4;+h@IB1n*0~' );
define( 'NONCE_KEY',        'l9S2Z(E-ro7.uT_ZyC{{03p [D%2,9[VVZWa;Uw3I**M!6|&a)O(T*C&l9,o0Y&x' );
define( 'AUTH_SALT',        'D@#DMx3?{&Z0*f*UQGn,jn`|$jwRxQ [zJfuyFRDN{-tB%^F]V+]n)k(>Wi:Ed>[' );
define( 'SECURE_AUTH_SALT', '0,.SS6[F7CC41pQTcTuJ6,mQR?TtH;BY^A|/w(vI~yD@=NN5*;Fgl0T(,Kg*8k=D' );
define( 'LOGGED_IN_SALT',   'H)G%iYyj|v$S`cnc)S6^Em3&6>%t+6JD2JP!IVxX~d5dXVg5-`N$hy6yx(X5ziv6' );
define( 'NONCE_SALT',       '5T4=`$j1x7t<55NNxLisC,ha(`:E,(:q3VgxmVw<,A}v5fnb7@p4M)bdUn7{e*V@' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
