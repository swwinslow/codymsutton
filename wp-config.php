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
define('DB_NAME', 'codymsutton_db');

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
 define('AUTH_KEY',         '4i,f.da;@3x]4dB^^6{>K@X-{#,wdC6|OX@%:!%M!Dk{fyDe(j|ZR][njX4n8j0T');
 define('SECURE_AUTH_KEY',  '+xZD~|1R;=QI[5-Qpc|I^p[hq=VX}75!77b[GL!Y:DY;2dSZ!GF^v,h_ici{7A]F');
 define('LOGGED_IN_KEY',    't#gdOC)SCn6K4::Sx^%Xwcu{UZ=xQjgl+yG~+!wPJF%|TKBg%/<sW@,kA*Bl|_h+');
 define('NONCE_KEY',        'eOS1(eh2{Eh,OTzR}:f%L5TD3VWx<VRo&n k3+2?`L{-(D0:1W(</NLezHlSJDDf');
 define('AUTH_SALT',        'nZP||r#9go<YyFX?k`-C|AF[!RG~t(Jd%2Tgy~M|<DpVfZh~8&qz@y[(jW9%u5V5');
 define('SECURE_AUTH_SALT', ' G;}IvGJhi7`@-hPwhb-#l^zOPog.=PxMgh,(/>LB +L%DZ-Perk)L6eLUN~,-+A');
 define('LOGGED_IN_SALT',   '-)!Vt84^||L`=:#$Wpf0G+CdgI1E4JaQQIATx?OG+`rKC8;,)f@!R.$2DUU`|||c');
 define('NONCE_SALT',       '3|>Ial}HyPu+k7pV0Rx%JLmH.^_l+#Sg0_hWEcN3ElvU,i@z-Yz`Z>{zD%KU/$Q*');

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
