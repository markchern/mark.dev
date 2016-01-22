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
define('DB_NAME', 'markDBljug1');

/** MySQL database username */
define('DB_USER', 'markDBljug1');

/** MySQL database password */
define('DB_PASSWORD', 'yNbThvE6KY');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'r0rg7}^YN,vM7rY>yJhO_pD[d5|VCwd:kV[wK1kC[ZJ@oC:H2i6<aL#tH2iS#tO9p');
define('SECURE_AUTH_KEY',  'd!o*tLA;mb2<+aPD+qH6]iXL;_xPD+pe6]*eS]~tL9;la$rf7,bQF$rQE3qfU{^X');
define('LOGGED_IN_KEY',    '2zjB0,cQF@rQF7vjY0,zQF,$rI7{jYM,yrQE$qf7{^XModV:!wOC1ohV4[gVJ!wkC');
define('NONCE_KEY',        'uAuiA;.bPEkYN,zRF4sgV7}^YN,znF4}rfU}^YMB@rgE3>fU{^vMF3VK8wlC5[hWK');
define('AUTH_SALT',        'z7$rf7}jYM,znMB3rf7}^YMB8:ldR[~sK8:sgZ0|dRG~shF8}kZ0|zRG8@rg8}k!o');
define('SECURE_AUTH_SALT', '8dRG@sgF4sgV}!vNC!vkB4>gVJ!v1#+SH9xla2#aO#-pH5tha9:_ZOC-pG5:shV:_');
define('LOGGED_IN_SALT',   'Sta]aLF{fQ,vFqB{fQ,uM6mX<yI.qA{fM.u}@NCzoc4[ocR>@vNC0ocB0,cQF@rJ');
define('NONCE_SALT',       'W*tLA;qeT2]~WLD+pi9;tla1]~WLD+phG5:laS]~tKD1XMA$qf7,bUI<*uMA3qfX');

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
define('WP_DEBUG', false);define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
