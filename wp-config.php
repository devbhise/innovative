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
define( 'DB_NAME', 'innovative' );

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
define( 'AUTH_KEY',         '_~qw3[+/}.(g67gWYQnb+]+G4 u[WpaW*g *sfutf:6$c*SW!$IK#2%M{SdFa6EV' );
define( 'SECURE_AUTH_KEY',  'kIyPI|-M*oP=Aw<@$?(BIfw.cM*2i4/gMvp}=y32arj8 ~dre[n<IZ.C|I6aMLGB' );
define( 'LOGGED_IN_KEY',    '8DK/cLa=|Q>cyOpGnHaGsHUc%!29>hTwnIpBvLp6Dtt%)B81U9CO6+{: Z-^8#1 ' );
define( 'NONCE_KEY',        'XS9%pB**aWMU14mB>9%=!Mr.vPcw!>%<VeV,bm81m&Q67aBxxsUF{k@!G`omrcx1' );
define( 'AUTH_SALT',        'BOmb/QCF2W>M0E<T;=Qhlu NWd$7V8KdXzBqv-IU-#+ye11W.in8^X-0h+#Y)B*+' );
define( 'SECURE_AUTH_SALT', 'l`x+zT@9#GWZ!&KD`VSOJ#-iWa%Ko^yK@-=!k< _D;YcCBozJ>DJ)Ih/(/83Cz(3' );
define( 'LOGGED_IN_SALT',   '!VRLTY4J-TZElRo~@z~4vxrh>e:{J,4iDbn{i%Fg7:t)V6{RRSuC6H,Epns@l`xR' );
define( 'NONCE_SALT',       '5rN>p5!IryPx#GW(-,53$n;1P<TA7SKCd`=gmBHP!:g=pX]YbOBBjZyaAVdKWh=t' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ias_';

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
