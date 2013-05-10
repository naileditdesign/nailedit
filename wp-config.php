<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'naileditdesign');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '4k%qLQ,~QsFrmQ%rdFh9pz0?GlVesdKPwV*ngi~z+X]zc|>?8Y0UA*urDACDX/FU');
define('SECURE_AUTH_KEY',  'fwjA-=1I($p,9odci<xBNXq .~2G6a*{wjx/qg:G#j_#-|J(L|k:|&=psk*a+=0G');
define('LOGGED_IN_KEY',    'Io5PH2Y>J >M/rB;lDq}4-NA|H[.WFCM-i$GR-B|,@KwCc(+J9RGg{QKi-?!PqG ');
define('NONCE_KEY',        'TX-c0.d^e->/B<==:A=*-7Ml@tRJ8N+YS2Ofwox)2<6L;yuw:#~+OhQg=~w*,&iF');
define('AUTH_SALT',        '|s-L~TvZJudBKA{PS9<d[8!1(Da|]p]-b7IR?t,339, g+[$K4KnLY5h8txtahyN');
define('SECURE_AUTH_SALT', '%-P|%^Hgr#6YdKN#Q(-0Z1-Pu1,J7$HG%VWv:_#1^:%mZ<a,*E1VsM/~<+8L{I)G');
define('LOGGED_IN_SALT',   'Jp8eE ;<M3fp`w8e>lcVVM,EImOk[F[u DSm]e?dcsMdfRzlSnNFkF775qdabZCd');
define('NONCE_SALT',       '4FR+gP$b@>E,~e5g|-;K!KWp:-eq?&, W^UUJVBGQHUvsOwDr2ikx-mW)6AMgW [');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'clotbreath_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
