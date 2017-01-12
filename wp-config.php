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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'Y_C&=fMjB2Pl}l@8{>PX^Jij3SnUCYt1=M#gL1|~YMH!)Igwi,U)c9]U.}.Ch=}7');
define('SECURE_AUTH_KEY',  '7Eo]==|z:+]9-T2KXvaY4ze|xV094 $mpQS4T};`2RswjI[[q(kGO&]D1 E3%3=?');
define('LOGGED_IN_KEY',    '5+,/}#@WE&@{F7okBZ`JL 47+.`)dh3gkjh)hN vc[*<V.j.w@KYabt6TpzX3+3j');
define('NONCE_KEY',        'Xl?<eh;IXbil *uC~,SQh96fV53#wwW{]2s.$!Br$K]eoXHY^Y#z*o;oOF hE@Y^');
define('AUTH_SALT',        'bX_}z8z7!Qwo]2NFZh2=I%f,(R8qB?>/ymi}+e,ZOPLs{C##W5%tCer`USA?H1mP');
define('SECURE_AUTH_SALT', 'PJ1F6@eY>M!.P^Oj(uY_LU4guKl~XT;%Q)F|T3%|=:YC[ML|N}jPpp<Ike5,`2Z8');
define('LOGGED_IN_SALT',   '+{7f}5(,dGQ~t%Pt0DpJ5cSp4da4eYEpuvL]CF1X+k5P4S@IDsj;+SVdwg}m-0l-');
define('NONCE_SALT',       ' XXZOk_MjZMW*1t^Yx/v*(tQcu:NUK<rz,&pi]Z[v:U`?V}Zt28?ZH7l96?^*6&i');

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
