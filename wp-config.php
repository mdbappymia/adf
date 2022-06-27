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
define( 'DB_NAME', 'ecommers' );

/** Database username */
define( 'DB_USER', 'bappy' );

/** Database password */
define( 'DB_PASSWORD', 'TqlXyAdHpl6rB.1*' );

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
define( 'AUTH_KEY',         'G4W: UZaAPTu):c%(u[&Na[ b&$Wq#6a?$:B%`T~|:w8fB wnQH0=x.!&=dYv_#A' );
define( 'SECURE_AUTH_KEY',  'r70,R)?jZ&,Sw_Q>?s(;@@8<vRmgbQZ/fnlce9|5/*Qv#D^yBb<~^U77im$e>D;Z' );
define( 'LOGGED_IN_KEY',    '.|@%o*3{l?EWI++YJ]j~M*Z6QcHY,P;M83M|P!v]p3n>6$<RJUO.e/UKg_9n _,A' );
define( 'NONCE_KEY',        '-!7a-{7 (#:;mmgp(oyL1OPX`wHxXn<4[nz<vR*`BkX420`-?]hMM61K/qR+QLFT' );
define( 'AUTH_SALT',        'xkNbtbH#h5:>x0}!3uO_C;bSoQnCqB_1fLImN1VEqb|`}$AfC#xJ%dsiut&3`m=~' );
define( 'SECURE_AUTH_SALT', 'zL?I*Z=-.^/EqD}d7+gTY(#xXW.i Og(~.vqI?=Os2Kn+[yL0J)=QaJHm_/12}BX' );
define( 'LOGGED_IN_SALT',   '=O_3s!#)cnjA@-zM.0:~5i.pd)wbYp4&],.`<7u),iPw#g6V^LlG]~9Z 1gP[RZi' );
define( 'NONCE_SALT',       ';UmUx9R=S!PA$ltOk^gM){b_?r>Ag,`zN&o!6^{Y6iNt{C71i>=ZHdG2Z<JH2(ai' );

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
