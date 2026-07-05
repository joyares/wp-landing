<?php
/**
 * WordPress local dev config — Laragon (wp-landing)
 */

define( 'DB_NAME', 'wp_landing' );
define( 'DB_USER', 'root' );
define( 'DB_PASSWORD', '' );
define( 'DB_HOST', '127.0.0.1' );
define( 'DB_CHARSET', 'utf8mb4' );
define( 'DB_COLLATE', '' );

define( 'AUTH_KEY', 'w_s9}qe_?XDE9Kr^v|lPrOL@Kwfpdao=2+}{/Y5FRGseoJi,v:9JG5Gcoo-?{2+i' );
define( 'SECURE_AUTH_KEY', '!>pnO]xp4uv*+5w.W|nTv5-1][OC+.Y03e5Nep.vEAu?z#!BNK-&lHY>jq9d]=wd' );
define( 'LOGGED_IN_KEY', 'PF;Bu3!o+|/4!)lN3NRJ3v*kxU&6F8~K)q.9es0p+8%;w#<;HN[4p,ipEd:]fLI]' );
define( 'NONCE_KEY', 'GduSBVButzoJ%^>E%6Hz]]Ht/erltc2>RTLO2x!R2Datnhxj:=KwE3:NUd~]/s,t' );
define( 'AUTH_SALT', 'Ps98M64Jf]!w4G}Y>L{zbJC_(2dF3iUMD]L/m4DdkgfG58uV5jg8*i2IkisbOpk|' );
define( 'SECURE_AUTH_SALT', ']Php^lh00V3%fswdv69Ace51/H]*%g/miQsl58V,:l!7y*:S|5qClYp2#z@;NHt>' );
define( 'LOGGED_IN_SALT', '3P560MID34@|@~pw0R@rQ6Wt)C3Hv[@4@g_Pdr&<O!&JeF16V%|H=^:OREda!D3M' );
define( 'NONCE_SALT', '8*Uho=4p<v!~tU.KJpyLjLS?PNlrBIL_bHAEH+>VH@mX/g8mRi93FY_y0x[8Rvm^' );

$table_prefix = 'wp_';

// Local development settings
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );
define( 'WP_DEBUG_DISPLAY', false );
define( 'WP_ENVIRONMENT_TYPE', 'local' );
define( 'FS_METHOD', 'direct' );
define( 'WP_MEMORY_LIMIT', '256M' );

/* That's all, stop editing! Happy publishing. */

if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

require_once ABSPATH . 'wp-settings.php';
