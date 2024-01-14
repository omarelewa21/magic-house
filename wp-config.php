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
define( 'DB_NAME', 'shadrmow_magic-house' );

/** Database username */
define( 'DB_USER', 'shadrmow_magic-house' );

/** Database password */
define( 'DB_PASSWORD', 'BlkP0=*e+?)N' );

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
define( 'AUTH_KEY',         '*Y;Oj-Ft8+cDpqR;4{/I7?M;rB-&R.@XT=lb@*O)K*=St4wS?Le4Ju9[injhOj;:' );
define( 'SECURE_AUTH_KEY',  'Yz1~*K)T ghv6o._h=`>f*DM?F,/nqtA@A);nc6xcE +`9R,+T,:^pEM)C9{L^mq' );
define( 'LOGGED_IN_KEY',    'j(Tb;dkg@wtX@d}jYUz.[fqsq/]Wcf2wt{nL0}Nu~ ({Y.==Zdf*wW4%{B;`DZ{s' );
define( 'NONCE_KEY',        '=YMd>zk)vD}MCh% SXj9D(z!>=>BC1s`.d|jivyh1NaJ0-z#:)Q}dFI;^*b~M9<S' );
define( 'AUTH_SALT',        'SXZTY:Q)ay%<mq9*B(#/81>Urp<!#5 nPUSyraelE%)q5>ecLgq)`Y{0_t*u$pBH' );
define( 'SECURE_AUTH_SALT', 'hCdp:9AKyqt2=th Gq}9H`4L/fH.t |6|l)tVqZCsNy,$2Eh4AT{YM.5XB8mpRKJ' );
define( 'LOGGED_IN_SALT',   'aYx/VlRN4y+wXcVu>Q9`D#nNwxR]nrEjCeY*>3a`Um#0_Y7g1vy c](Z8zL6C2p(' );
define( 'NONCE_SALT',       '~2v(I #l]5i[Xo*dmVcWr|yvkcOgv0vV&lq1?=J=W(QR@9jT/d(m{ FW4u~t.U-+' );

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
