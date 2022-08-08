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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '/9.+di#%|KP}Q?B&r%{Gm#D}T>KqG3)p8$uPPg~Tc6}B]VI1c_FM7C1l{<V_iSHV' );
define( 'SECURE_AUTH_KEY',  'H=<Foqe57ZB>Y]eD4hb?4u$Ti}.jz&_9]7If}2WN1Ul*F)+so<Uh5l}D<*`_1JP`' );
define( 'LOGGED_IN_KEY',    'A,|^9e49H[Un9$Xxk]z.`Jm=y@pxSFJw]SH)i}k`<mURJQk8waHlom^:L])!# =N' );
define( 'NONCE_KEY',        'GCQkis5qN|KCsj[%KtkL(tYn?hTfq$R[ah][fS1gs7=lQ]S}^1E_`+]UipW c%Tm' );
define( 'AUTH_SALT',        '$*I2)qrjGx4,lk}y)#n@)uqqrR}#_@OXB&{PFx~;9e0AiC8C%wUArCVry$E4R&Y)' );
define( 'SECURE_AUTH_SALT', '_[KZPR:-nCZrEn^9k<tRg%ao5gR.h1Ig/FqL__qxFzb>u(f?MLvs$SMWW?([Y*SQ' );
define( 'LOGGED_IN_SALT',   'Y0(>0gX-~x}MHys89*d,Q.+X=].4pq00w@qTI?ps}j%xab?-9`hkEBhT.>,0xP5E' );
define( 'NONCE_SALT',       'lrVVo*k*X_&N8Pd5y*6+4iM3<78BbAH#Dmzh>N#?@tX6OBZbj%jOYl@#(1ifPs S' );

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
