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
define( 'DB_NAME', 'adfil_db' );

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
define( 'AUTH_KEY',         'B)ONI_JvZf3nc,jKGK)`D+R.uIS^rI8Jss#7fl)^Xjk))F JdS/jTmQpK;mwyZhV' );
define( 'SECURE_AUTH_KEY',  '|b pjv9C~5H@(,+0p]0rymBBP)oCcN1V^*0PF{_;-b`2;3!zXaB,>#7Ja@dlwQm ' );
define( 'LOGGED_IN_KEY',    'B6yA8)Ub8)Rkxb*IkOHBMD?~9f+>k_@#`etUG2@,KbqCN_d3L!Qim8`){]h?r$Q!' );
define( 'NONCE_KEY',        ',h! Zmwro)NdY=+%CShZqsbO}7Q;q}(v}nh+X2HRX.Vr#IeP_e;.-R1>%vK?QR)^' );
define( 'AUTH_SALT',        'et<Q.?nb@e9CId#>y?&4H?cNf_x b2v5vV2guzW9{ )&+s-5TLt9?IxEyT##PPB&' );
define( 'SECURE_AUTH_SALT', 'Z1y49f3erW/% a Oe(8}8mDG/5F.%*aDdI6L,GiDe/lR4l1<#{iEQKRCvt=kh05I' );
define( 'LOGGED_IN_SALT',   'LYtZ]KbGN~niX+m/wz*h=4KysvBCr ^3eVlLk N2_m0=Yqg&bY#3p?4PRW~X[)@o' );
define( 'NONCE_SALT',       'E%KaOaB/U|V{q!S d-;G=+6[pb8l4WYGjYYl+q5z3e= x>3 cXsRR^Q~@sI01O|5' );

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
