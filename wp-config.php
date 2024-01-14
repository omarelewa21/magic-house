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
define( 'AUTH_KEY',         'wr2fX_si^+}L6|P5TIL[ywNHBW1sst}:TeRF`vaWHHp~96|NkYo4jH{_2;:eCj=X' );
define( 'SECURE_AUTH_KEY',  ']4TE)|3UWV%?,`7hI/{E.@Pnm;oG}8R3(hXD:<y120rvN>-gF*L+9d}@,z4V://J' );
define( 'LOGGED_IN_KEY',    'YR+YFU0Fyl*:-q4X,5@I/,N+)1B{]1nJpvnyr7[L)%(8m,pOO~wr/acE@hRV1XE-' );
define( 'NONCE_KEY',        'r9,~EH`D[Gw UpOv@2`HZX>*lb!j<Es*U@~jH,_^JT&V:_;!YI_Y=AoR%;zkj:?-' );
define( 'AUTH_SALT',        'pL:8#j( ,hbnI?9]N$2wl{@4,c7&NhQj?47Bw+]9RtC(wL,?B..6o@`-/Q<|[ohP' );
define( 'SECURE_AUTH_SALT', 'sQC)y(HeX]72p&`E=jS,EbgU,9K.2&Q}g<CCG5:Kd@(4%=X!uU=5.+iW% y6*Hl>' );
define( 'LOGGED_IN_SALT',   '4.dK78%vipzDe$$X`9=]}Z>C_cmAd|`)C7X7O]`tZfA/GRBq+KE$Q8G7w1@E<Y,G' );
define( 'NONCE_SALT',       'cuEY(3J2[{<t?}]x#9 #`C?`eA0n`_]nyu90]?m!${lrV:}MFy.]=DF>tzOP8.ML' );

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
