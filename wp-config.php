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
define( 'DB_NAME', 'webfrosch_1612607756' );

/** MySQL database username */
define( 'DB_USER', 'webfrosch_1612607756' );

/** MySQL database password */
define( 'DB_PASSWORD', '+bT_Vq+0Loo:Pj:p980tYIaILiFhjadF' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'I#%3<ItZ$DN-6SifO[g-`;c$[yp3ya-_?kY;}nu`X=>!!M%6P!g&zVyp;#{XNs5$' );
define( 'SECURE_AUTH_KEY',   '7p6KV{ad2T0k;LV?w*6SF9pyPmABBL*53u<LrL0G8e3vgleU00.(BA0&3Xir|zD{' );
define( 'LOGGED_IN_KEY',     'CW9uw:&,xDoQB3Jr=^r.a+i74T?UO4=+d~A|MhLULt,(NlY2$=a`aT8iHU~u_cbW' );
define( 'NONCE_KEY',         'LA?GjF$?1;6*kW-oG|lmudi``[.O^5RW]>z(^b(j(X9&=cNvlCp5g2yq<Jw6#vE7' );
define( 'AUTH_SALT',         'i5)BuK$L))v;GrC7l&RQT?ZmC=KRa!Pv/D?x8Lj=!ch:YQ;-!dmCs/G.MojPUY,Y' );
define( 'SECURE_AUTH_SALT',  'O?%O&Tkc|k%^#u>}3os-=54g`Qb>jd|]G1X_rO84`PUMx$uItguqZy3/8kN8LZl?' );
define( 'LOGGED_IN_SALT',    ';!i{iT@O+Rs `-85,OHE%MjiP<GefTi1ejCh]_C=E;sk>R-I@0CjuuRhG59:9/bO' );
define( 'NONCE_SALT',        '[(U/VM&UOGCCh4D:CptF:63q[@((O8)|YVzLLM8%73hxQ]tt1]?CZq8knbA]8xu*' );
define( 'WP_CACHE_KEY_SALT', 'Er-G3dehw&>SZ)h3{JO}3.vYg__[C#((E.Is1&VMuj5>|x5>v}!}_bA-2Ua)QPOA' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
