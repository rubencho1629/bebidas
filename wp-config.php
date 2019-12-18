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
define( 'DB_NAME', 'id11975873_bebisdascalidad' );

/** MySQL database username */
define( 'DB_USER', 'id11975873_bebisdascalidad' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Colombia123' );

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
define( 'AUTH_KEY',         'O6R)40FTW|eh2mooGtEJP 8l ?bcUlw]60sriCrm]/K2|9Ito%<yr@:8A0,-hKq%' );
define( 'SECURE_AUTH_KEY',  'iq>ES&C<fJ2p[bkJD??T{HIhD1LmcYF4U vlLA{/M/VRccZRI5;/.]p&qRu?4!>~' );
define( 'LOGGED_IN_KEY',    'M_WD|;EK]?{ncm=KjO&[?IwZC*4SbnNcFIhy~gE5FL>WbfTG#;WG1AhJ1T8yjP }' );
define( 'NONCE_KEY',        'E{_8rG^f<z`I.6#c$DlggidVkOHhfK+eQ7{YIXT(xz#xSexZ0idxuhYz@<HS9v/f' );
define( 'AUTH_SALT',        'nku<Rv{}-/DW_yH|ZfGFw6oy@XUPx2baCbedX*CqP06AUGtEO{f4d2Q!MDo)rj,W' );
define( 'SECURE_AUTH_SALT', '(RG0.rzk]Xp-o5$GY{3f4v+)+IcXvBz+<+h*75TsBIg$oCDBL[q(|2aHkO%DM@lv' );
define( 'LOGGED_IN_SALT',   'm|xFdDsMmxhE(e.3pp$9Se|AB,$Bd&oKbRXBWPJQgmq7q0SilLNSU=9A=rH+B*Ei' );
define( 'NONCE_SALT',       '~J7*012i#=zv(mv>j^gt^85Jsz`6&V1m%>SVAQ_u_-)19EI;=J$8[Rk6ZyRX$`KC' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'rt_';

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
