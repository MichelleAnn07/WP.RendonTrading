<?php

/* Environment */
define( 'WP_ENVIRONMENT_TYPES', 'production' );

/* Database connection */
//PROD
define( 'DB_NAME', 'rendoing_wp_rendontrading' );
define( 'DB_USER', 'rendoing_RTDev' );
define( 'DB_PASSWORD', 'RTDev!123' );
define( 'DB_HOST', 'localhost' );
define( 'DB_CHARSET', 'utf8mb4' );
define( 'DB_COLLATE', 'utf8mb4_general_ci' );

//LOCAL
// define( 'DB_NAME', 'wp_rendontrading' );
// define( 'DB_USER', 'root' );
// define( 'DB_PASSWORD', 'root' );
// define( 'DB_HOST', 'localhost' );
// define( 'DB_CHARSET', 'utf8mb4' );
// define( 'DB_COLLATE', 'utf8mb4_general_ci' );

/* Tables */
$table_prefix = 'wpik03e9_';

/* Security */
/* Security Keys */
define( 'AUTH_KEY', 'NBb3.a~{4!y[uR2t{R=kC+qf^!:Cik2FpeX2L{sr&_Kax/k~t$^(%Tx[&yASmSEz' );
define( 'SECURE_AUTH_KEY', 'QZKmhg+ujUl9Q[|5uTh_0q=#2/.!0yBki#a,~/NKx,2d}<{8HI2U!r}*yU+A0P2T' );
define( 'LOGGED_IN_KEY', 'fn}qk]zj$Z!-PvSnHHd:_b)cN(U-Mx6&VyJ!Y(0*j5-_j,Q=R8OehJ)m4RT<~i5L' );
define( 'NONCE_KEY', '3<b1fcz<Z(Z~6(~_y:GTj92:~kO{{AE)?qAT;~Hp/t?<MhW7<bRmX]bCDyHy:v}&' );
define( 'AUTH_SALT', 'SnE,gXX#F2nuxBx0__SR=xk4I[~^!MzYIkpdQ?_.QK7f^)ca#X%Pa17G?q8pf&gQ' );
define( 'SECURE_AUTH_SALT', '(F>=w!|&QDnxtEY#!l1rlc63QQ]p4I8Omvb>W:=_vK?}wk@Bp|iX{-FytHc7)v#t' );
define( 'LOGGED_IN_SALT', '7}-.d/57+Au)OB^xCi*e>iKg~vG8WRm5hYJ1q!E[d57N6$GlE(sk*(bXcJ!0=!!!' );
define( 'NONCE_SALT', 'W^Zk90)/hK<$y$<>B%a:wfD;11ADE4mxqtmA}=x@S?_sS8hl>:LOp/$i#4l4S}W7' );
/* HTTPS */
define( 'WP_DISABLE_FATAL_ERROR_HANDLER', false );
define( 'WP_DISABLE_ADMIN_EMAIL_VERIFY_SCREEN', false );

/* URL / Path */

/* Cookies */
define( 'TEST_COOKIE', 'wordpress_test_cookie' );
define( 'COOKIEHASH', 'dWqeUu0PeIVGsF4DnSpaX0GsIhn0daEj2l7691Mg50pnMdnRkvWVlSUp0Tx4sFdN' );
define( 'LOGGED_IN_COOKIE', 'wordpress_logged_in_dWqeUu0PeIVGsF4DnSpaX0GsIhn0daEj2l7691Mg50pnMdnRkvWVlSUp0Tx4sFdN' );
define( 'SECURE_AUTH_COOKIE', 'wordpress_logged_in_dWqeUu0PeIVGsF4DnSpaX0GsIhn0daEj2l7691Mg50pnMdnRkvWVlSUp0Tx4sFdN' );
define( 'AUTH_COOKIE', 'wordpress_dWqeUu0PeIVGsF4DnSpaX0GsIhn0daEj2l7691Mg50pnMdnRkvWVlSUp0Tx4sFdN' );
define( 'PASS_COOKIE', 'wordpresspass_dWqeUu0PeIVGsF4DnSpaX0GsIhn0daEj2l7691Mg50pnMdnRkvWVlSUp0Tx4sFdN' );
define( 'USER_COOKIE', 'wordpressuser_dWqeUu0PeIVGsF4DnSpaX0GsIhn0daEj2l7691Mg50pnMdnRkvWVlSUp0Tx4sFdN' );
define( 'RECOVERY_MODE_COOKIE', 'wordpress_rec_dWqeUu0PeIVGsF4DnSpaX0GsIhn0daEj2l7691Mg50pnMdnRkvWVlSUp0Tx4sFdN' );

/* Content */
define( 'AUTOSAVE_INTERVAL', 30 );
define( 'WP_POST_REVISIONS', 5 );
define( 'MEDIA_TRASH', true );
define( 'EMPTY_TRASH_DAYS', 7 );
define( 'WP_MAIL_INTERVAL', 86400 );

/* Memory */
define( 'WP_MEMORY_LIMIT', '128M' );
define( 'WP_MAX_MEMORY_LIMIT', '256M' );

/* Updating */
define( 'AUTOMATIC_UPDATER_DISABLED', false );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
define( 'CORE_UPGRADE_SKIP_NEW_BUNDLED', true );

/* File edition */
define( 'DISALLOW_FILE_MODS', false );
define( 'DISALLOW_FILE_EDIT', true );
define( 'IMAGE_EDIT_OVERWRITE', true );

/* Performance */
define( 'WP_CACHE', true );
define( 'WP_CACHE_KEY_SALT', 'r06liefewl3eyhhl8j:' );
define( 'COMPRESS_CSS', true );
define( 'COMPRESS_SCRIPTS', true );
define( 'CONCATENATE_SCRIPTS', false );
define( 'ENFORCE_GZIP', true );

/* Cron */
define( 'DISABLE_WP_CRON', false );
define( 'ALTERNATE_WP_CRON', false );
define( 'WP_CRON_LOCK_TIMEOUT', 60 );

/* FTP Access */

/* Plugins Must-Use */

/* Filtering */
define( 'DISALLOW_UNFILTERED_HTML', false );
define( 'ALLOW_UNFILTERED_UPLOADS', false );

/* Feed reader */
define( 'MAGPIE_CACHE_ON', true );
define( 'MAGPIE_CACHE_DIR', 'cache' );
define( 'MAGPIE_CACHE_AGE', 3600 );
define( 'MAGPIE_CACHE_FRESH_ONLY', false );
define( 'MAGPIE_DEBUG', false );
define( 'MAGPIE_USER_AGENT', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:64.0) Gecko/20100101 Firefox/64.0' );
define( 'MAGPIE_FETCH_TIME_OUT', 5 );
define( 'MAGPIE_USE_GZIP', true );

/* MultiSite */
define( 'WP_ALLOW_MULTISITE', false );
define( 'WP_DEFAULT_THEME', 'twentytwenty' );

/* External URL Requests */
define( 'WP_HTTP_BLOCK_EXTERNAL', false );
if ( WP_HTTP_BLOCK_EXTERNAL ) {
	define( 'WP_ACCESSIBLE_HOSTS', '*.wordpress.org,*.github.com' );
}

/* File permissions */

/* Proxy */

/* Debug */
define( 'WP_DEBUG', false );
if ( WP_DEBUG ) {
	define( 'WP_DEBUG_DISPLAY', false );
	define( 'WP_DEBUG_LOG', false );
}
define( 'SCRIPT_DEBUG', false );
define( 'SAVEQUERIES', false );

/* Do not change anything else after this line! Thank you! */

if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );
require_once ABSPATH . 'wp-settings.php';