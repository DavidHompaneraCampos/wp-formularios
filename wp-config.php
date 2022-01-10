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
define( 'DB_NAME', 'wordpress_formularios' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'v%:c:YL~P%T5l34k;k(g=f1Op_DD:v@KrlY%Ih*cd[J/A5RTw(DfK3409+nW{`Sq' );
define( 'SECURE_AUTH_KEY',  '%-Tdi=C.Xs::Y wwcx[aMTTsBQ(EIkWO|jDbG E^N:H@N5.$gtk!To+eq~T.E~=r' );
define( 'LOGGED_IN_KEY',    'EuIVDw]>;vsceNRg,%!)^~V.y)sYFC, RoJn<kLww8xyPNWBl5x&%-DLAOgh[%Tp' );
define( 'NONCE_KEY',        'r2Q9Em;kh|XM.xNR!,e+)_8yt W:kpj=E?Oy~GF(y:2V60l~6ML@jmjh]_D[,+y2' );
define( 'AUTH_SALT',        'g[1*P6Qa`!P13+3o( jhW!{,K[1Pho/#Y5ydEDcxD>`4Zu8I1nin| 7J9F&lA*#t' );
define( 'SECURE_AUTH_SALT', 'R+2K9c!br4002U8sfXfAV]mimm Lc(!y:Yc1jWxj861ovkB7jno3cb#NVgeqvLc_' );
define( 'LOGGED_IN_SALT',   'LF(#YoTqDmz9-Rv8BTvkIxF?CqT$(&|mi3NF`Rc$D-kH4$kAH L~B*EocXs`;VcS' );
define( 'NONCE_SALT',       'mIBmAR7Ga<~<.^*o6a?^=YR:=.4?h&E>rvLM9U0K+UV-X%1y-{l7gK3lBzgbmt;W' );

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
