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
define('DB_NAME', 'wordpress-activity');

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
define('AUTH_KEY',         'qe%Ryr;~>$GDa{j|+JED[y4ehi7vB`nX5;srb1Qq?{F:r!A=AAt_2h(yrs]h$3%C');
define('SECURE_AUTH_KEY',  'I[#xBMT7zN*)7eIF(>*BKp_lg_+27~ez4%x~dbfLaE<+/YGCoGRpt7c|O|O=c{MI');
define('LOGGED_IN_KEY',    'YAA0]L,T;.r{,F?Uhyx:=P)C7P&Ipq,#gSxSl8Kxp4e+faAjRl/*75;C-YWHN.qt');
define('NONCE_KEY',        '?vAxWo9y,3wxt|/5tKzfrEk$+#s5Qe+RH}v6mS7c5k=;%0bN~YU r(EkU#HBa%Oq');
define('AUTH_SALT',        'D@M]+[}-V=xJp7XO-5V4u|@8lR8ks[vm$w7!#f,rdPJNLy&cGvo +Bgj3Hhs&~s>');
define('SECURE_AUTH_SALT', 'k9~HoUk}(PtzkBl.(?Qv*V)fn3bZ 95=h(6I+iA[e}F%-N cs!62^%>3+eaEk3fy');
define('LOGGED_IN_SALT',   't+p7F~qd^i|gD O>jyCcHPI8-w1=zdq2+!+[Kz|lOzu(V}2mwf{NV2.~J|N+wv2l');
define('NONCE_SALT',       '_Xe<sRx+2w!;#0V1`$`S^st7$;((0)JbYr+&V|Y?=Iuwv|HCm|F~bot-kQ|j>Tz]');

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
