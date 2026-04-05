<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'ajaykumar_db');

/** Database username */
define('DB_USER', 'root');

/** Database password */
define('DB_PASSWORD', 'root');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

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
define('AUTH_KEY', '[q  6u1eb{GiJC+?OJUH-hGEG1Tkc![+7URLq?JC`/{k;%|>^KWk`yWCU(h-4Upl');
define('SECURE_AUTH_KEY', 'No8Qa%$-G{qjkeE<tw/B34Y0^JA*2Zo}O<_aAv|S$Ha>|}V%v3B<$W^A5|Ei#xA3');
define('LOGGED_IN_KEY', '`C%-]qdunVn4kw/-?c)(X{w3>5~?@w%ZXM21v#-[[%G`WL2Bi}:1Y?;WEjdTTMKW');
define('NONCE_KEY', 'i#Z7.W|-Q(9+JW7t0<rR(/7DFhWDKNw^<o*Gjcb6n!Jl&x3>x=7f>_k3+Ow+K+Kj');
define('AUTH_SALT', 'R|,smexkoANj%k6$133OZ]:4IX@3zcc)|V`9;kVdKmX0!3RpJ.nL4BX--b1(rjOV');
define('SECURE_AUTH_SALT', 'w~`_C+M)zrN,i:xh`XAt-E%e}AY.YkhU/OpvyFpGwHs)Ql)psn7}^2#?vh%kbiTt');
define('LOGGED_IN_SALT', 'wkx=$9!dMv-&}rzRWO+::y(;(W(eywd9@|zXUJ^(NV6<` Kl[3lIZ`cBx^oo_nXQ');
define('NONCE_SALT', 'Zac]}HIzV_|q~;y>gvZ)O{t$e}zA]|W((1d!oA_T{`X-By}MJvhB22M38k1k[>H2');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define('WP_DEBUG', true);





/* SMTP Settings */
define('SMTP_HOST', 'smtp.elasticemail.com');
define('SMTP_USER', 'nHXSwCHPK4@managedcloudhostingemail.com');
define('SMTP_PASS', '6A6C945BEA8D045B70130F6AEB3A4FB6F2FECE82BC6DF87F920C57A19F7AED13DAFEF9A4A855B7CD0150D7C5324FEE29');
define('SMTP_PORT', 2525); 
define('SMTP_SECURE', 'tls');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';