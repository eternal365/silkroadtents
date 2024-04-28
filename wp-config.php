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
define('DB_NAME', 'silkroad_wp');

/** MySQL database username */
define('DB_USER', 'silkroad_wp');

/** MySQL database password */
define('DB_PASSWORD', 'YsNAZkD%!1rm');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         ']J/W>w|6@v>K>C`;mct1NKi{s&*88dnHat,856%x-^Z`-|*e$3.x1(RH4B==,C#0');
define('SECURE_AUTH_KEY',  '$pT~PVX$|H4KRm!jV.$Q(OkHQ3.~K:u^7C i ]{iXT$I(wqS9[^Us=$W[&tR9Drn');
define('LOGGED_IN_KEY',    ' jzxm*>/.&[%Nvt+K85O3->KaFU]Z^pVy#76AX=w^<$Ld^V[1_H`}]]Ehyv|}KrF');
define('NONCE_KEY',        '+qgJ$Xshe|=D|`1,7#ay{m<.{+,NRGr!J%m*HCoox=-L6tKgunzC)}=KX;-~%.<>');
define('AUTH_SALT',        'JNj713@}F/xY%D uE}8:Jcy!w@>ARd)-RUli/2yHIXb%YTMG_@GTtNW@9$.EM`p)');
define('SECURE_AUTH_SALT', '^4HiN]t:n;5rT=){~s#&s4d79*RZglt1ENN4zS1:/_1R<5gCRUy_y>HFwjJLK(Cu');
define('LOGGED_IN_SALT',   '/vZi!N}+J^BB[5D~T :sxeZ.WWLGGh~%&I1oYt_!v_;>~ ;<rca+I?+dy[_Wz7%K');
define('NONCE_SALT',       ';$.KyBd]0aH?_dH>0EYt<cQ6:/P50|beE!i0spDgp4@!}p_=;-:j0>-wa@Pz!OCk');

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
