<?php
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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'esecamalich2017');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '%!gA:!/+9b:,LBWM94)=ZmGS&;|CZ/X$_`j$teoH(hFNtaXx~%eNi9@:FgeVE:T8');
define('SECURE_AUTH_KEY',  ')`?Cl$[zeI10e365l.Z5e^puumMubppJm.]bd4>@n6L:2F<Gl9QAs4~xiLgm0;cd');
define('LOGGED_IN_KEY',    'QkCE-xd[Cli*:Yb#l<$$bm0|:Wf/ouT!0QmteT6z`G4R5-P~bh0x5R3<<*Ya?[f:');
define('NONCE_KEY',        'Q%C&L5h7eZA)N6+d?O*+LTZAfx!(aDJB1*LBHtjG1VgGOq8rpep-5(`VZ|}?},kg');
define('AUTH_SALT',        'Km*%+=4`4-4B}DAAT2/O3cST}z $t+[JdPjVkgdhWR,>yYmq|iExb0,=`zw*{L)j');
define('SECURE_AUTH_SALT', 'd;r,7uZ{~U9-Bcpm3ne_]G^VasS||J{]E7ixv&z|ac&3gVsz|__5|EJ-J{bu?Uct');
define('LOGGED_IN_SALT',   'NtN@/+IWtt?17;v]RQQdGOTZ?CTiFf8203Q}B@.~|Zvey2WuF[F0vz;4A{Vgx5cN');
define('NONCE_SALT',       'VhvC* ~l$;jhn.sHLH!wFQvSb8Wg@h|u/1jo&yT>IaIY[D^N s%[j|$*y[nxbLc=');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
