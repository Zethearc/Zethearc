<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'LB}jccDB(?v_0jJt?e*:UK(=MrPSw&4zy[}##$^2/g[bUlK+mp <O4nym8swIC*G' );
define( 'SECURE_AUTH_KEY',   'QZ~lt9E (Pk>bk(P3CQR7Si4~@@v8c4LS5&ui+g8DNY@5-z5Crrpeb,6nLjJiJH!' );
define( 'LOGGED_IN_KEY',     '{a8pNxowpW-8rg)Yws..mxl;q^+38K)sY.Q3IzSWq|o`/ZIz8*Q;|%?HUl##d=<?' );
define( 'NONCE_KEY',         '`KgmX${B}=^cTC:;/*8quy@F4nO{f:[Xc?%%E*lA9iQ=h}zA=Zij#q3rds)A}p<q' );
define( 'AUTH_SALT',         'MNkQJP=jsAA. ==bY}EQ#}U=CXGxyI{n^BC!=Vw:5;,zy2/^9<5M?xr/}[f+RIT@' );
define( 'SECURE_AUTH_SALT',  '(sh8> @KRE(S]iRN(pgg<Dvlr1_d.OJ9;7Ek4AuM?FW9/wceN3e[9:s_EjDNHE@K' );
define( 'LOGGED_IN_SALT',    's.VYTOgp@BW2q@Vg|KImcA%>ne+SiDXBQqM IDNd#O}mQmeq/kAG7wF`1D_8((t(' );
define( 'NONCE_SALT',        '7}!!?#5T8l&sr{1M#5ZQo[n@8GiSU.`BYNguvgg6PzFE,L{?)Ym_Jg@X(cscVxUi' );
define( 'WP_CACHE_KEY_SALT', '+gYgELU_a#Pr/ye!q!4srIq(nKF}C1oXI(5LB*vYhNx&zUKwA91$WCZv@AOv/RII' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
