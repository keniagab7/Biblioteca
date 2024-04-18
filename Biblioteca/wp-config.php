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
define( 'DB_NAME', 'Biblioteca' );

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
define( 'AUTH_KEY',         '[;)NIMAOrH5l==;0AG2Xb25#%LXRgs?!_#SzgXzSzQ/VSNf+>kNuaK%12]Agx1#q' );
define( 'SECURE_AUTH_KEY',  'y|4gQ*I4!r>GDhdY,#X2Y%E1GatzQ%)g:4gB{H;BB*)XtB dJX}}&gxPzGrLfH2t' );
define( 'LOGGED_IN_KEY',    '7U;VPhnxDT`]3%uu,&7w#.&Oa*^+Tfmm9)>ByrTBjII#.Cb`J3#S60:-t;1:hk%!' );
define( 'NONCE_KEY',        '98L=RyT_mE`Lx$hNf9bNP!imz/o<-NAn6n/pvNIjiYZNCwk/+C rXYX}$fv_AF%n' );
define( 'AUTH_SALT',        'BaKTFX<Sn2UZ`aj|R7=<Yj;|Yt%dWpNUXc`-5*j[4nR>9gp$g-6lf}R3T|KBJ-H+' );
define( 'SECURE_AUTH_SALT', '.F3:$W(#x?Yw{{u<&}WVm}M1{K|`3(McxBxq$Tp|wu&@<FcNH[1K;(OvchQHx1e>' );
define( 'LOGGED_IN_SALT',   'l{o9c.%G%oHTw]d/evMwEwd`8?[1EETY/h;P~2:UryQ%4VcK!|xNyr=<*lAh./C8' );
define( 'NONCE_SALT',       '.ncH#Zna5Zea[<F#]zfOrg2muX{=$O,3?g.Kr^`I[%S0p.fAG&y,tSihL$UXuV_o' );

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
