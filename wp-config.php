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
define( 'DB_NAME', 'database_db' );

/** MySQL database username */
define( 'DB_USER', 'sawdia rustam' );

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
define( 'AUTH_KEY',         'rtA7@gHT{MU%R=*/Si+iG%e5dZmiGe3!a#vWs=Jn%iptr=u0w~Gt:LqDO{?j}4?*' );
define( 'SECURE_AUTH_KEY',  ';>p@xNKw-.mw@9q9s>a<L,N:B}s.ZOVI_p<?8JpP%V|(:xo4T;DOS5e4HAc;|BB7' );
define( 'LOGGED_IN_KEY',    'lG48Z.U0t)O^8QX=pwSdnO)81,18mlkz%z@C/Ul5hazqHo84N(W;LU+/kn;![tM_' );
define( 'NONCE_KEY',        '/qg5)TjXouLfN^{o4^$=rJnM1G!v6EmD<)lWDe~cC]$AK_s:I.g]}bG:~H)hn o!' );
define( 'AUTH_SALT',        'nv#^&W?h3(UlNqmG/eogeN#GPht+I$he~qS1_Js+ }BaDy[CSf/K@RmNTX1U`<0@' );
define( 'SECURE_AUTH_SALT', 'j3}Y(DwX*K<07X=!p#sVdfzg%c]T@:|zk6K4pj=W*JMj[5U0tGG~[A]}U4_J4VOr' );
define( 'LOGGED_IN_SALT',   'zl&RNKG.6Bu*6,/GO->0,UdLb$eiCM&eML^P?qDl>|oW%K`IVN6-<cFBUNsO8.#t' );
define( 'NONCE_SALT',       'n^6Doifqk;4n_[q7o11CbHI=3,<mU>.4y~Y68Eu`BEt#9Q1+lJC@3LE16TA{EVT;' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'rs_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
