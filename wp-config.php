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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
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
define( 'AUTH_KEY',         'Wa}-lwUkvU7wGx8%pA_CrO>U1:^i6ShAfH1m/j:%oCdN@yhSB~i2~K Cz+}HE=J&' );
define( 'SECURE_AUTH_KEY',  '&~@F:#LwY%(4-7;bbG]20u.L*TP4/8WiMK5f?:pT3oGxW@B-K/#~BT!@#8W811e4' );
define( 'LOGGED_IN_KEY',    'CO{S+PJ^2*WD-fUtCI4GUq_ar3?=j3!s#{{>U06V#Va|Pw[/w>qRBoD[sUwI!t_@' );
define( 'NONCE_KEY',        'qyMQdxylH6d8sfUJIOESdX(}N}Jwzfkr+VY(}LFpfLM%KDHST.@M.c6 QpuIsB|s' );
define( 'AUTH_SALT',        '(y86I l$&A:S::-c4G$ikm$z*n~?p}7huU9V^6VJ`*RaQd>xQ%=zSF]Q~^Al_l9t' );
define( 'SECURE_AUTH_SALT', 'O4@;O{}H3.k<E_]&PGrbBks$7RVY+;usV~h+8%O(y*a_l.9!iA9R,|rV[=Z}J}Pp' );
define( 'LOGGED_IN_SALT',   'Ru]6PrDzhx`Vz:4ezF5_hVG;[PVBEs4</9<DfS~*EapeLE[}kxkQE<=FEffrr(2A' );
define( 'NONCE_SALT',       'YW:i9$Xoo2<-@8AIml|Pr,E@$Gzf,OPR,R;!QN%-0&C_s$IIm78eG~xsn]!r`m:;' );

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
