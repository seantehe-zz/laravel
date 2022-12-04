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
define( 'DB_NAME', 'woocomerce_test' );

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
define( 'AUTH_KEY',         'cU!v)VR_+5YY;3OUV-T@c!/L_m?dk/2Vy.!GkT/SSC.zyk;B?IcgMP&aXciXI uu' );
define( 'SECURE_AUTH_KEY',  '?MFbFP3_~k.|%_K)(F>O4K!{c9L[lgvwFu%I9n{LBt@+@TF:K:M!pDzt0u>6Uk_u' );
define( 'LOGGED_IN_KEY',    '*U5I]+>Se`}S%enxE}}jlg|vC6.DF*@MfT2}.cc7O5N{?rhq7Jfa/E5;EO@x2S<Z' );
define( 'NONCE_KEY',        'XPK=RC(u|<p)JwMU312~OuEEUQ#}bz#rS8)L:pO~+gPzx/FW~-GW7%K(Z=xs8Jwo' );
define( 'AUTH_SALT',        'A.#M^Pm=bC3od)#&VB_OY(}/bnu?1zGdSF}!]r:6CNHUXj[~qGUE@.1MS5+H+|T{' );
define( 'SECURE_AUTH_SALT', 'm^0$KV25b81 kiaV`A,orxxQjNd?P=X1v{)eQKkPn)>1[CpQshW<>k! *qBAk5#1' );
define( 'LOGGED_IN_SALT',   'u;vS~=|+USsZ@WX?N9wt-NZLY~p9Rw8PNS_`nKMeY)CwPWB%.^&-aL|v.g}Dp<C1' );
define( 'NONCE_SALT',       '`MCBHM^9g#Uc;s_5RgMLs)|tXVDu&f,x#Da/aP$9TuR<.XaM<FF$eVk/]e:^sb|E' );

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
