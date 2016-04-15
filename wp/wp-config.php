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
define('DB_NAME', 'vive');

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
define('AUTH_KEY',         '@3^c)Q ?+o.!%a-q MCr-4y.~7,|-w67T%2Hog+:ovyT[R17h#%*BdenNhk:>}z2');
define('SECURE_AUTH_KEY',  '~L8?+y:jdm[;N6KyE_qu-JnD1|~<FyDE<-G-P|PSY)W<Gm29m-PY/3`J-+xu<Jb+');
define('LOGGED_IN_KEY',    'AVo-6;l+#`tW%;.ns%sc[]UnH-=|?ZcJn9+%/DD-FEo-L+{Mm*0 H]0//^q}V$%-');
define('NONCE_KEY',        '#@/J9U6i*<q(=a$7Q6@@<wljI@pO%Bl@5Zp#$C+OXHn^Qt H&MpRSznv%gD2+,XP');
define('AUTH_SALT',        '5ZX}.-d7n]7L;%MpA2%99<~oZp!sz8A3Cbau7If)%Xxg]^a%vx@YU@Zz)D0RWU_5');
define('SECURE_AUTH_SALT', '2_QM<V)&|U;GJm7Om$[3}ey:)_I9/_q>T5||32(@7x6wFT[m<+7072 *ZF|U1Vr{');
define('LOGGED_IN_SALT',   'lKj/P-J.LGBN[>vdUMhhBAj7vsx#8$PvT]x8nL -8=?%[&?c&emBngaIDs@J|N/l');
define('NONCE_SALT',       '{m[~(aUCqP[Q:YI=_@QwGt)V+(qoTA{$?bZRR[m8dv}<d,^d?Q(nfjfwTuQspOnm');

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
