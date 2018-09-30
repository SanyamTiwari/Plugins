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
define('DB_NAME', 'pluginsdb');

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
define('AUTH_KEY',         'mY)$TMg.4HXcgj6H/T5}6A%tQp<55#;PYcZN02Y}CuP%|Ar?uL`U5E)([*iWzrm6');
define('SECURE_AUTH_KEY',  'Jw*WQ`/1lL7Nv2&EW>hDNv)bH_,aD5DzIUM&{6qTJLVSXD6shIGb%~s`lRLMA^Tq');
define('LOGGED_IN_KEY',    '_l#R}<EA-TTJ/Z~U$bhh27B4(EE]omQg2`zYl!4@D&Y=23Sn/Hf=2{G-#`3bc`r+');
define('NONCE_KEY',        'ao#L!)A5]%jQTewt<(D{LKQr]X,Aum^P.K?tzwsr|<UzGCnn3}+Jm=`#^~md}dv2');
define('AUTH_SALT',        'KY_U#1vhPf?ofs:;=l`qlrQk.?A0/}N4mG(3Kc|WXn?A:oo!%EfH#H6+Dz?7E];n');
define('SECURE_AUTH_SALT', '^QJ&X&rNm>~w[_U4G+rpP1)AV0<6jWnPy2|(lEsBw]!O`2-Tv%lM{%>$#knzj1qw');
define('LOGGED_IN_SALT',   'feGFKa}G>/S8&b(,G6=Ide%(]fw*R,iarDg^np,3g>~re}Tbpli?!{$$bRR?TqE/');
define('NONCE_SALT',       '=?}:NKW=4I1)cuV7;#=y!W/4-e!5s%q1-ezT[cDw4[|$mv(eX75FANHs<P/|L<qG');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
