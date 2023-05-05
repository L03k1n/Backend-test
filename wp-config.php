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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'heroku_b148d4d482704d7');
define('DB_USER', 'bcc0dff0ab3dd2');
define('DB_PASSWORD', '1f7bbd54');
define('DB_HOST', 'eu-cdbr-west-03.cleardb.net');
define('DB_CHARSET', 'utf8mb4');
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
define( 'AUTH_KEY',         'h|B{5V%F;ZU9Z^ByP]U$b$qyHbu&cf#/96f,jA`bKW96Fvu%;U}[kmmfZz+z*6$7' );
define( 'SECURE_AUTH_KEY',  'iZl:+k?^~Jtl0%$Tsh/)XOpQ9N7Qr~X+#(5c#,0SWO-n)W`5wTNbL5oIdu,!&pFo' );
define( 'LOGGED_IN_KEY',    '@Y(<i091%tBz(K0hpLMNS_<fT:9RJ`pK|**I0ng?z,&bK(R+1x3~d*|ZUB|NPnb!' );
define( 'NONCE_KEY',        '0@KwFAehj`w)7Lr!w)9t3VnEof?qX<(4e aYO/<$3@.lVEo3._yP1U5>cQdNL(2Z' );
define( 'AUTH_SALT',        'RCw;b.IsMc Gtb2gK.^}eSR+{&BAeTnt/MtAz=Wd|Wj5,&8gH[)MmX?)8&knb0(!' );
define( 'SECURE_AUTH_SALT', 'Kb<rXY v;gdW.%z]NP7SDIyED,kIxt3{7t+uy1rRl%KJ|}K4jM.HS-@KZ^[*1]3F' );
define( 'LOGGED_IN_SALT',   'UMAz1Y++=mc:o*M)NBNW9Z26_/oS>jay;DYi7P|g8<X58G;qa9({$k|Ul(mE_YHz' );
define( 'NONCE_SALT',       '?O}$Uw[GxuGs~Sxnf7C#Q7z&NP@7*V62ieY6^rDCngnkMoGs<shVS0q|1|igR)c`' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
