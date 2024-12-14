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
define('DB_NAME', 'andreyz11288_wordpress_8');

/** MySQL database username */
define('DB_USER',       'wordpress_a0');

/** MySQL database password */
define('DB_PASSWORD',       'RUDc#g15k9');

/** MySQL hostname */
define('DB_HOST', 'localhost:3306');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',       'tR%sT3x#z9!U@l1K#hHmGI@H7vVCm7VdpNnZ#%DrTOxmM)We8DmPMqMHp6jC8QaB');
define('SECURE_AUTH_KEY',       'Bi*!K^S@xZGQMbgzcGot&XwyKrNdjgAY*3(br!wsjg@zaEPrJaVn859DlwTgVHu!');
define('LOGGED_IN_KEY',       'QZ8uAp6u2CoAPZ*YXEepTWjTvqWhjg)DhAk^h2!@8d7*eDxRFqR(dJ(xejPp)w%O');
define('NONCE_KEY',       'ofIgIkolCATLl*G5zADi!0Wjj5ScHSBA*YsS4iSWI#ux8oZ0T*!fQtoM)F8pzbp6');
define('AUTH_SALT',       'wWk^CfDt@tnPooJVufX3&pID5SFc&QOX@&Jfa62VhjO4PNRc!boIvpudO0%nRA^4');
define('SECURE_AUTH_SALT',       'Pz)oTdnoZ@uNv9jLPcsRvM3sEnyvKK1snFf7C@3ycrGpV9l)2d1f707TIcVN)iDh');
define('LOGGED_IN_SALT',       '3S4YyRrgNRG*naJFXE8nyQSIji53Q1Ntg@FC@zEAfLzhZDXh8yUe*Vpmzm7!&)y8');
define('NONCE_SALT',       'pq(OOElSe7FYK!J&e(kwEn!i0wl2s!1B8n@I67lCO(HQVGdbj%Ix!0@YpP1P*&f4');
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

define( 'WP_ALLOW_MULTISITE', true );

define ('FS_METHOD', 'direct');
