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
define('DB_NAME', 'bootstrap2wordpress');

/** MySQL database username */
define('DB_USER', 'bootman');

/** MySQL database password */
define('DB_PASSWORD', '8AQYanpEzt85HBTs');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '(u@+w1ZJ@S<2G^911[9N-D}*7Tx@]++nN)#P8NEu@,_,w(c;Ov]d^INX)|ORr$?N');
define('SECURE_AUTH_KEY',  'HpdW:2yH{6+h]_+mM?tW}_,IKN4Cf0L9lC]{T-$JD}izZu](jN|VL~(*(AMbhQ3N');
define('LOGGED_IN_KEY',    'Y9hh9t&!F%(Q^+hn1hrEt(I^$=sc4HxiCIW%~oBb-OQGU@I=>3Ps)j%s)XZHw(VC');
define('NONCE_KEY',        '=@vW7EF5EA~ ,(q.DA^RT+6fjei:t}V$-#*`XGX=&Sb|T26;6<} o[hf(<.RZ>@A');
define('AUTH_SALT',        'Z%K*SuExj9xO-rco(ZyI,TY*6,F|zhC*[IT0B+rl-xt,b[[U_04C[SKaB-J,:7yx');
define('SECURE_AUTH_SALT', 'rghW{+uP7,vpS?.HO9(C-q>!h+I_dsvZ~{N=+JNm.bqU|O,+2,s1H$UF=|.sX/Kd');
define('LOGGED_IN_SALT',   'M}#SFRGx- fcv*qccIbDlo)}I{m,*nwg! F->Xv=JiVE3A=VXRrOxCuO1LfH+/z+');
define('NONCE_SALT',       ',c8.OcW.bd:ZN5d)6Iel4+|?Bg]Pi/y{pi6ym78=C@~dMC,e5 Ox%+X@RH!u*z<M');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'dbbs_';

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
