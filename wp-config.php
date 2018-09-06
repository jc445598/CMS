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
define('DB_NAME', 'Tanubrightsmile');

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
define('AUTH_KEY',         'K#Wh-~uGdlK,NFXQTzBlRzGd2$R3O 6n_]g[r/I V+xow{}5hjc kb,)>>(`Rna{');
define('SECURE_AUTH_KEY',  '{!{8I^;xqjI4#` T<5`/*Q14yWXF:^ms!!=Or_j WdQJvvD{OMjXL$.)o>rzax_]');
define('LOGGED_IN_KEY',    'Oz-Q4kRb)ga::@4 <,7<N1QtzDaFQ&/pH^sYJhKCCW.GBr,I1!I!W(0zkEhmcU;G');
define('NONCE_KEY',        'rFvORDb8p4Z=$QNNhEI}Ml{+|IB;0?<2GkO)h@jG=$?:c;NKA0}-g?#|l hJ~F^M');
define('AUTH_SALT',        '*?HM8P&MT%Kynp6pU5Em?rw7_3a!Sp>MoSpD :~PuX^Z$<v295&bsF>o?L un0ce');
define('SECURE_AUTH_SALT', 'ncirD-vNuBZpHT)R8Cn7Sci7I[u~~J|&+w59XBMf3()|JRA)%q4-pw(X!3:9?%a3');
define('LOGGED_IN_SALT',   's1%r0+XV5^ONr0:3RyG=;h!z=3[WZGp-mHgEzx&q{u^apyk.,-fF%%yckr:odud`');
define('NONCE_SALT',       ':W,!JQC32]4hKYo>%NXVP-OT*4h6[1N`ewjg{CuO),o06Enm|`b;Q2V5@i8h4X$I');

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
