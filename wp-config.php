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
define('DB_NAME', 'wp-project');

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
define('AUTH_KEY',         'e23uNFxyz>:QAK|P8sP)ZxA!roj;Xq%)I|XpGfhsuo(1g s9UmmNQra)KEc4+{[Z');
define('SECURE_AUTH_KEY',  'p?Zx}1JyXtY[F%rCaD!/($w}f14g,v8BNNlP*+-3&pp<g?<KhT+?(g%^A^JBBa^7');
define('LOGGED_IN_KEY',    '}yTy*OGhEBhdRp`bktoV^aq#nO(<2[5360uvUhEL[R]*V[DVAk[=fLQiGpy?DFqB');
define('NONCE_KEY',        '2eaiK?hz$2NP[{%wAm^3wOF=5gA81?,9/|~@twBH~BAYrw#uLJLqfd&jEGSm_cL{');
define('AUTH_SALT',        '<I{xQ$IA(l*ch;Mlp(qs-&C{S7@[Ps>;+*)]G+m2+J@lF1#z)-:Oxw6d<%e}|>y%');
define('SECURE_AUTH_SALT', 'x!fC|-F/**ra26PLVGjJ^~^uAAaSMyJIQtXr2tz-UV|z`DUX._5.]Uty[]J2~xTe');
define('LOGGED_IN_SALT',   'H#<H?%VaMe!zGVw<=C9N9_}ByBLP_-..]GA=M:c%L _dfFIEC;Yg]L~CdRo=a?C;');
define('NONCE_SALT',       ']_yhY#i[/)OI{Zj_|,.?fJ5b)l/yx _T6h_Z~Ipv@_1IRn%@3:a5f{yk5x|Xt/Sl');

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
