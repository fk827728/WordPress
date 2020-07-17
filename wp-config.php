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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'udVqkbv]a$`r@OnSOw*J36+r Skk6zve56&-<fkVUPwpsn`(M?#T0~j8O]d[IbR}' );
define( 'SECURE_AUTH_KEY',  '=Y7Ht{/Z[5:5w$l}cs~SIB!x .O;?&@dmM|R3@=F.j/5^e`k!a$bGVL~Lr()ZQ=w' );
define( 'LOGGED_IN_KEY',    '0pV$9D!iqN$Ry1gG288z+)i`J=5#ZI}c;}P4C:S;n5aQYbUne8M1o95Lq04zS/Bk' );
define( 'NONCE_KEY',        '5_G?t,<&7b,*ck_cX}A~glHhmx_-0?v*pS].T&*o#e<U=4n2yN0|K7RuMe>;PsZ{' );
define( 'AUTH_SALT',        'To*laHx:B!|Z:Zs5zD|s+sG|h}COk$W2ej[Uv}Hq8`D+phu]~W`#~%-h18eZ#W*4' );
define( 'SECURE_AUTH_SALT', '#`#bW9Vn {lR2Eo ^U[o+#QXtD(jxsX@aNk:__))BR$`!*rjRQ u?FeKno <Cwk^' );
define( 'LOGGED_IN_SALT',   'O|TGH:D{Zv#!7k{^-O]W#:DuT3rcF#IEGK{ #EpJbu[uW~#[t}t_g%/^B@mo~SUu' );
define( 'NONCE_SALT',       'mb`{|L!aa<uQ)$qrq0.4sc7)kxn1%Jy=[ZE2?=!x<zrZt[T#V>g3%*8$AGo;AqBZ' );

define('JWT_AUTH_SECRET_KEY', 'secret');
define('JWT_AUTH_CORS_ENABLE', true);


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

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
