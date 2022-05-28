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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', getenv('MYSQL_DATABASE'));

/** MySQL database username */
define( 'DB_USER', getenv('MYSQL_USER'));

/** MySQL database password */
define( 'DB_PASSWORD', getenv('MYSQL_PASSWORD'));

/** MySQL hostname */
define( 'DB_HOST', 'mariadb');

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '?!6(,-e*k?qqyA=^S ffd6C9[>~wWDu9:;2->^+V YmOW0 nT]|^@C<P@*J!+:`9');
define('SECURE_AUTH_KEY',  'YAis@1Fu;3|4V!fanJ/5598B][|=r`IMH];G=V7v5x.,B`B-sii!>&5Q!Fx93J<k');
define('LOGGED_IN_KEY',    'Ba@uvCuJ[T`](E]jpR0WHUuz3G6=:p&H0hqYgFiO=|_|XIQ2uSJ]4|R)#nm6~;7d');
define('NONCE_KEY',        'vp[ODN-D*2b/K3d&g[G.=[u]TX6$:YezER]s+ohSpeh2X<=[|+x*~[x5jZj^`LG0');
define('AUTH_SALT',        ':u3=4VDD,HjZ2,kRA!_cfJ}2IhmiUZ&h@z0-skl0&0-CW(Y>3]9jd}yLQDTec^4i');
define('SECURE_AUTH_SALT', 'n`H)E*q=%I5|=s,H;TGD>~ch<._0n$3G$w:ObIas1-[ydRhYSDDN=AK*cu#8^41y');
define('LOGGED_IN_SALT',   'hyz5ffh,wU4?4]Hi]CB}tdw1jH,:GP4X|$PYko<^gT|G8YCEG#>K^4X#PO?E|HfQ');
define('NONCE_SALT',       'es+c@|rutJ5RN]m~dX(8X+r8YCUVYL.;B{&2>k1Lw+o%x~s }2i*yf|u},}N_]d5');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/* That's all, stop editing! Happy publishing. */
/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
        define( 'ABSPATH', __DIR__ . '/' );
}

define('CONCATENATE_SCRIPTS', false);

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
?>
