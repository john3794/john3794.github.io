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
define('DB_NAME', 'joly_dk_db');

/** MySQL database username */
define('DB_USER', 'joly_dk');

/** MySQL database password */
define('DB_PASSWORD', 'ninja2139');

/** MySQL hostname */
define('DB_HOST', 'mysql77.unoeuro.com');

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
define('AUTH_KEY',         'uO1(&KLEzeVjeC2#uHLh*q^SwK(NeJ)rrEW6ENsOkmPCjKzURK11!cLQH0C^7Gpm');
define('SECURE_AUTH_KEY',  'STy#kEHbP^TWgLdZJ*^@nmthFEGg&^gIZhIi&gZttD)DDfOP9ooHl9fyPZug*z2X');
define('LOGGED_IN_KEY',    '^8%DI@HhhcCXFlXtk(lcNklflkuenG8nt(JAyFKPK%zywDpzPzE4GRPNhc5jTUK)');
define('NONCE_KEY',        'EQ*JwABADTe*gxdsHP(vDJdQYbsOGLp1lk2)HL#Os(wdtfEY2pQ*m3O6xipyTWlg');
define('AUTH_SALT',        'mOV75tsC4L2GVc8QTyBJKN%%8I96wXpDNFysGKksMe5PWw414SEoG16s2tub@oU6');
define('SECURE_AUTH_SALT', 'q7JnD7d#Ty1C3JxuM@j*a#7KY)1z#rsZpEU6lqm4EPsYGmwi*Mog#M@bmIe&FVh0');
define('LOGGED_IN_SALT',   '3suYb94F4aFrZBCKUY1&)ZB6IM5KErQZ28(BU^PB9s1gjFNNUHvMcH*xyR9OuXHT');
define('NONCE_SALT',       'PHodC5y#Ov((ZcyCsU1nt)#6Z^Pu6)ZC^Tm@fQMRe)XzUqihP*KO&J1ym9*gMVlU');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'clk_324cc2549c_wp_';

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

define( 'WP_ALLOW_MULTISITE', true );

define ('FS_METHOD', 'direct');
