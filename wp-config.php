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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpressuser');

/** MySQL database password */
define('DB_PASSWORD', 'password');

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
define('AUTH_KEY',         '}*}x+J9*iDjG!RZ`mae-!n74b66&,iK,kptv=a2|O&Zs:vcS;+y@~Z[-NDB#/G-*');
define('SECURE_AUTH_KEY',  'Ntq[?[WI13;NcD.[N5NX+DJg~%kx.,D?gOZ.|)}k,pe/E6P3Wu@fH=+0BJev-giQ');
define('LOGGED_IN_KEY',    'DXRAreg8azIbHze+,,#J3:v&+0xwD<Jc^?q-[/Faq?Fwh,; G3oZQKmK,K/+ oAo');
define('NONCE_KEY',        'JIQ9@=!4]SSNH?Tj8J!cRq+>yrEyi(:.@|BQ8/9w2{ytbq|.t qMI6Jl!.6/F7:t');
define('AUTH_SALT',        'zVj&O2~I*gD+>huJW pBHiUUz|=;mwB m)MVL`QY]e|nn~NdU`N1Oi@9#w4i^C$[');
define('SECURE_AUTH_SALT', 'zIRUmWJp)QwRsg|&0i%7NCLwQF!aE@j.0|>.uTwwboukH%ju$p%qz0B-OA0W`ixl');
define('LOGGED_IN_SALT',   'yi>8%9HLbXMrT<zRUy+rZ1X.xOGyJ#F4QakZ=cd8:!>5G|CKq=Of].#iiNDJ9ZG*');
define('NONCE_SALT',       '+<Oa|:we<q3 L$|mr0jpUAm.6|NkJA[s;x;8n0Oys*-8U?44B_U)ifH}70/N$|.b');
# Direct install plugin in locally server
define('FS_METHOD', 'direct');
# Show error messages to debug
define( 'WP_DEBUG', true);
# Run in development mode 
define('WP_ENV', 'development');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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

