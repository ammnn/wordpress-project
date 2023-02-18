<?php
define( 'WP_CACHE', true );

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
define( 'DB_NAME', 'u975182409_v1Cea' );

/** Database username */
define( 'DB_USER', 'u975182409_xzjy8' );

/** Database password */
define( 'DB_PASSWORD', '3qnpu8WWbf' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          'afl-P-%dI0,[1aPKNLQV<W 4&QEyx{ktvhCc15q$2Cku[;H9d.t)[`Y/<10cM Wg' );
define( 'SECURE_AUTH_KEY',   '9bwS[C3mZ6OgK)BgzAQ^IbJ24Bpsctqx24202nUwHx +~S!N9CB^Sub8bd)iDFE~' );
define( 'LOGGED_IN_KEY',     'Se}k+f.s<+0uaHyurB95lqGSBpBCL0Iq|)[6X333EC5D+:(eWdgIaU;Uyz5R(}^D' );
define( 'NONCE_KEY',         'tarSDCqfALZi?Kwf;*S||:%Pg]toq;9wd;Uw.k&k9?X(Zt::FM4#?^hfI[nE3?9}' );
define( 'AUTH_SALT',         'fuaMnYqYoTLLkXZ3hy5ir|SV:w5U!3O3?%~,v.GoILv:2o3iN:,Db=*RpecuV]|7' );
define( 'SECURE_AUTH_SALT',  'Nc{IsWKKwR|PI3+yf pLkGsxm(YG)D:Zg~@w>#EzTvL*09J1taYjLF,Zi-*A{Pyu' );
define( 'LOGGED_IN_SALT',    'quZRP|o8RhBe4Mszwq|5}X 0Ltl!!W<kb`g@4+jgMgAQ=}nO:%XzE-_-v=o}2@{L' );
define( 'NONCE_SALT',        ']W#xRyFr%K.H@G|M|eW`-Ctl[Y-mm@^(o%,I#km2Vv2pz$5{bl>6FNxKImvg4QX!' );
define( 'WP_CACHE_KEY_SALT', 'hW#}g`LBVAgemmva2,L;|#jmB$GJD3`}oDsd8ggNA4f?OPf%0~9h_fGz59a0j^pm' );


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



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
