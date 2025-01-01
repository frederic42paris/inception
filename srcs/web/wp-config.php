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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'thedatabase' );

/** Database username */
define( 'DB_USER', 'theuser' );

/** Database password */
define( 'DB_PASSWORD', 'abc' );

/** Database hostname */
define( 'DB_HOST', 'mariadb' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'f/Lu_a/F$YEhE:D.]5|I8C|{viE&IU$.lj=PhjqQ^H72+X+49M>SMCRZG(M[?z*n' );
define( 'SECURE_AUTH_KEY',   'j0x{(oJ?qhx9F_Cy7ijBF[Y}62us:2,=0C~xdcIG)<%mi?DC8N?d?[%fMkpt#YMH' );
define( 'LOGGED_IN_KEY',     'sw0{S^0#YjjR4C,Iw,{0s;!u 0s4h(HaSY!do@% +z.48^5f3zp6wJ`(J$y^#B#u' );
define( 'NONCE_KEY',         'B9^,Ti!- {&+k<0;J6/)ZjdmHHIb};-0=}T/0[#*6Kfo<6V;@U=E)t.=ps$ uC*o' );
define( 'AUTH_SALT',         '~x@grv?7|c-Is{1,$/ is8xF}gxVx*[HnYwHfpD6!l|T3v)m/=s.1 ?JClsXKvs>' );
define( 'SECURE_AUTH_SALT',  'gn_p)&o[0+ot=%;fX*?+|rWcm%M!D3R4;j*`YoOZZbauIo*Otq;EZLP6[&@RQ;:Y' );
define( 'LOGGED_IN_SALT',    '`uJV$82fQEDdiP_?Y!yKlD-{Ef- Q^(vm5(6]Fc2:kincBs&4w}N$tv=ALYgu.E&' );
define( 'NONCE_SALT',        ';&whs|xkg<z1Z^_W+k.qa$cbbU6wsU:17n[5?i<b1,bOJPeD,6OcD8*^4 cisgZy' );
define( 'WP_CACHE_KEY_SALT', '(1w*[D#[~@H<~yaaRYLD?^Sw:N~^*vco*OB79|H^ +V$R&8h(_b%2nT&H[y1kgZ0' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
