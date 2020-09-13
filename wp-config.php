<?php

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'WPCACHEHOME', '/opt/lampp/htdocs/portail_covid19/wp-content/plugins/wp-super-cache/' );
define('WP_CACHE', true);
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
// END iThemes Security - Do not modify or remove this line

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'bd_portail_covid19' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'bLG&KODoyBT0ZTXSBX]dW*MCV9_]7TOmb>9&8aa=_Ra3e:Nme}a5ytV1/Kc%mmmt' );
define( 'SECURE_AUTH_KEY',  '>xj40|Ay>}lNeeO/I<I5;Ii>O]O;e4~2@pF0DT*el3r&ujfiJE)!P@?%?Z6]@,0f' );
define( 'LOGGED_IN_KEY',    'p89_2UWSz7UciRLd o_aC?V2`5>X(A][ln[x2qC},ej{_3>T;Eg>?Yr/VUa(+kYg' );
define( 'NONCE_KEY',        'WByQx1v;F1tkVJ5RVVDB%,N`c.CYR|=MS^rU^9`iYTVf3`4q9&mJUcGuos!bT*G}' );
define( 'AUTH_SALT',        '9CV,(!NHc!oz-V/)=E<8kZU=Jhc7cM~?Qoqtg^,|;r`po7bWdZ+K5pwg1d N,@>?' );
define( 'SECURE_AUTH_SALT', 'N8m,kVSLu}~: ?|Z@mT~/o~;,OPeCv{Y:nTk{ay_$g$FHs8k>5W;s.Epm/~IY/(m' );
define( 'LOGGED_IN_SALT',   '7@kH*re.T8(v_1sJm{D6E vFD<YU`T3Fgdx94Lzl>Fe2!=p-]trTc/0Q^.GW P+j' );
define( 'NONCE_SALT',       '6%{8hydS60z:GxaE~(pNuK7OHX*F>-(X=Ql$>Y~7eQS oglOvWDugG)_]E;=pL%T' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

define('FS_METHOD', 'direct');

