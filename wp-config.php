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
define( 'DB_NAME', 'wp-ecommerce' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         'T1$cVsDu#OJdBeVxgW!Xt=LL,?,*1NhRWJsj&}kstvNIOEeh^(IbuPL~;QEG3VKs' );
define( 'SECURE_AUTH_KEY',  '[z!;|?{q&0IZ2>/X,^ZgdrTo~ C/ss5+6V5ztfT},]kw#6fj%GP|a-W>{bWjn2w`' );
define( 'LOGGED_IN_KEY',    'uJnE]dEgd1!N.[Kvx&/w?-qy#fv1J+;PIjN05T$ )oQ${5*7<kMe/R,p|y-B7D&5' );
define( 'NONCE_KEY',        '4u;ey7:!Ds@t{Fea<HdD$7HH@8_4Db1u57SqZyOy{*i0zFT#m^Y*X,j1cWp{(.,0' );
define( 'AUTH_SALT',        'L?WXaFXAr)qNw$FJlIOtuY?1!(cXxP/@&J4fuL~Yr,TLtDtuM)*-o(o^yDK7svZ>' );
define( 'SECURE_AUTH_SALT', 'Hy=@FpEwPciX3:PIvL=`e@3s?]Zf)p+/2zCN%TzNR6vN fkfQ|+.y9(wXBKka{3%' );
define( 'LOGGED_IN_SALT',   '#yp~Zk)C!< }:sUPWaAR!!SC^#=*]=H2},%h]h_Vad`<Hn*3}pQ#<n3}]UNN:&vK' );
define( 'NONCE_SALT',       'NfF)d1Ge`j>Q`o#;phY.zRq%}C%Q^Q)aSCL[-gsJcAB,ntTtWCqa_y)-vfF`lMWP' );

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
