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
define('DB_NAME', 'svetislav');

/** MySQL database username */
define('DB_USER', 'svetislav');

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
define('AUTH_KEY',         '2P:s*A-A,},cd[d$V*_6v&{=96/QJfi8 OEB:-ccsGWSSbmC-oCDh`VL55IH.l22');
define('SECURE_AUTH_KEY',  'V{?w9)Yq^wzxgx-IP>W}vegNw0ceoClh&M;~5yG0e<xZGb(VcHxkV-&C@1sLPc9H');
define('LOGGED_IN_KEY',    '}T~xk;fQV.`/UD:N:7dX=D+^|WG!zhvm@e<Xa$U[))6VK9mlfhW;1hh+{shpR+f/');
define('NONCE_KEY',        'Sx5dXaxuc8ix`*P%r]#}cf+l|)x>ZVkjJP|4--bEQ+NMs/[(v7JBD$X$a$G5U1fN');
define('AUTH_SALT',        'vZ1Cb$B[gd+<<Tt{SuV[jh#?,OfU9d5x^c4eYKOe9|I|n>7CgAm9wTRGt</BRQ+$');
define('SECURE_AUTH_SALT', 'h^2#-is;B!U*6_^+QlQi(?H(t,)5z.B$hHLl&3+#bl:GyRGP/wurhChMCF;s+dU0');
define('LOGGED_IN_SALT',   'yi-;he98POI|H#_$,G&eK#$yD@My.1D6{lVj;puIHwIrRp^*ZR+DW~a.jo>Yh}i3');
define('NONCE_SALT',       '=Tak+ZrO+4a/h]]/OCsnK-]A~=I;r-EkTf-eIdH6++KgwU5[YLmxi~ihH6| 5[Qr');

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

/** Sets up 'direct' method for WordPress, auto update without FTP **/
define('FS_METHOD', 'direct');
