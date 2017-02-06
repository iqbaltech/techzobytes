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
define('DB_NAME', 'the-ken');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'gn0QyCZX7uG5E=GX7=4*-Urf9/m,eU]|L&Lm+SH T~L(Qqg*q>&_(%.Kiw[T$^_o');
define('SECURE_AUTH_KEY',  'Go;|.S^yN8yB-#ZFFVlFGBl%]JRmql@k.L_sG)h;6 BlK=v6NqIvY&h[/0-@S9t(');
define('LOGGED_IN_KEY',    'Y,r((5)F>ud?vMd8~^1SdqAbOwSng{P6T$L/gM|GN:ii&v+xVb,~7Z{RG!)TXc5n');
define('NONCE_KEY',        'Gi?t=|mF+s+_n SU*:Y[kTT-J/j.tf5Ethf=Qxi/.?%Bh*wQGXnNt.9bZmLR,Q3J');
define('AUTH_SALT',        'x,821)2}m/KrgO6aJn:z-`M2-:EB#dB8_i3a2}!UZ!viCgE:,FvyiJtRl/ie)CA*');
define('SECURE_AUTH_SALT', '%KT/0nvB/C{sMV-dVfOr/C4(k0IT`u-qSF Y{LU`.ouhgw*}]L)lQxts<sg$Nc9=');
define('LOGGED_IN_SALT',   'A>0{#>!*Rh(7; ?n=+cC niYsgd89T=KXnI@HS]4@b(*PBK#eE^$O&Rm0B9Li/M@');
define('NONCE_SALT',       ':q &R&yeqeoB_J,tK2oX{;*llX8n6yov/)O*rAp9I+-#{>&{s#[.72#lb:[[1*sT');

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
