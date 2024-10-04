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
define( 'DB_NAME', 'hydraulic_db' );

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
define( 'AUTH_KEY',         '~a~RU7)wJzdhUiM(Ub&K>6)YpggRZ?o|kaa~LY}N|ksICR;mrOGQg;cTUr6di8X#' );
define( 'SECURE_AUTH_KEY',  'm&M1d<CoU<QbQ/nDh&<Ag@vK.L_[p^SE(uKcp_`+a~8f8H,h0Q-:nP<],N![SdRT' );
define( 'LOGGED_IN_KEY',    'tv7qxAkEZE/h)z/R9hL-Bi_EvcO%CN(~En.dqi@BJudt{1/UJ./Mh 5cpn+2@0,y' );
define( 'NONCE_KEY',        '@003oib3M&Wt;s/d&2dhIN#kN4&/@u|tDXOu)qB0II|M?NX,;_oz4~_H=6`-FY6c' );
define( 'AUTH_SALT',        'aw)7UDC)&-(F%SnZOK}q8Mac`FoA<T &>J#?{BMbEj!*[Ng*QW?CI*EaK*Fux<_!' );
define( 'SECURE_AUTH_SALT', '){/~:%z_7t+WO&%wjYkWI+K7:de@Tz4VR>C:qETd~-csY#YAXxwK/-I5|BR)(_@u' );
define( 'LOGGED_IN_SALT',   'B=u0U(*dyJ-!Oo.t!(Ugv&EI]q3m<M}2T[7N2><qN~u6ceD~1~2S](=dP4uUAVP%' );
define( 'NONCE_SALT',       'wT|lt9^0{`_8*gFmRG3GQV~CYpDHQx#O6@Jae}B$a^r00=IeV|j]#`E5)|SDGRhl' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
