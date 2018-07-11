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
define('DB_NAME', 'shift_admin_1-north-dearborn');

/** MySQL database username */
define('DB_USER', 'shift_admin');

/** MySQL database password */
define('DB_PASSWORD', 't,zA]4j?fF!d');

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
define('AUTH_KEY',         'J|W-V];y6NzLn*</Ve4-$fFTJ6OmJ*pyP99Tf-,9wON7]X:HLZD6X]YNZ>dmU5D ');
define('SECURE_AUTH_KEY',  '4edb.Q7xOm#(mJbSrshI3& 9gJ0Qf+1F)$vf0+a]v{#!.<Vz/cu8Cq3`fu}3*_4`');
define('LOGGED_IN_KEY',    '|Iab7M~@<x0H0OcA[ZX-F{~X7/2&awot*Z!}x49kc1D_JOz_cqw%5rf.&%2S;&zf');
define('NONCE_KEY',        '9oMhe4)D}?MtK|~!%o([mN5IK>%2@H9LXK1B`q/:$h0U%.M+Q(&YW8Za8-Zv_pRd');
define('AUTH_SALT',        ':iy%^=VQU]w{XvCK08v6$tQxs-ns?hSX@w?wats`is3P:EuLG<8K!.v;O1>b( xy');
define('SECURE_AUTH_SALT', 'O]&L9x:vb ,?=YfO]=<awe:{ Y$3$31>A1dcPe(^[aMP1~_]]X>hIJ6u1,Ifhl=-');
define('LOGGED_IN_SALT',   ']3q?;.Co&PlM;kM3F{ODndy4sNEoq]@YAmYFI6rTm;RAH4:+WO8:D&v`ul4p6`z@');
define('NONCE_SALT',       'g&{6J<Y`!%&5kTqH0;k=%zx|3CI%&|C-rGS2p<o[v=<Ye nnXgJya0p?TkJVwOXb');

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

#BEGIN FORCE SSL
define('FORCE_SSL_ADMIN', true);
#END FORCE SSL

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
