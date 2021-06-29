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
define( 'DB_NAME', 'wordpress3' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '0ym||>rZR-+.c$ X87z(t<z}:[:*/q[4&O;.FOtuFjueUoS[{59!&pjiY5m/0&}d' );
define( 'SECURE_AUTH_KEY',  'Mn`?K=>X]>=h/jY_Z-EI>Q`0:EX_{8qtomn/&~UlDgUd.V5mZk-WWlLuG^!Kl<3C' );
define( 'LOGGED_IN_KEY',    'W1w&v 2E,|iI25:ff:nEc&)aoU2+y{V}m[t4D^|K0iht>-qI_|nRUXxTj.yRdXFp' );
define( 'NONCE_KEY',        '/OtDw9Giu[?)B6S9MK+8s#z,y0=XcFrW^6^_Y;0X3}kQ>_,)K,+k1C#-(]YfNH83' );
define( 'AUTH_SALT',        'iRgWr6IY2jlDPn=az}oizx7332>Ls1? &~CMlZ*HuMUOw/I@{B%xmxwlT?YZ {eb' );
define( 'SECURE_AUTH_SALT', 'TY|aVRT[/vefgr@~]aNNE4H1&7Rt~r^tl>S?-}I!}~2:3FD8^%e=w|V:FO==f6EF' );
define( 'LOGGED_IN_SALT',   ';%@q60IBH>o)|B6hM,:T+s&h<8hvC{O4IogQ1PI=R-?q24Q:dla*v^7~q LNOE$;' );
define( 'NONCE_SALT',       '?0Alxl;wCmZPA_$eZ=,TH$bWYp`Bx}u;HS47;OvSk<3./((MPXsNYIW60FTW=-vg' );

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
