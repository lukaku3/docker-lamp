<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * データベース設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link https://ja.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** データベース設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define( 'DB_NAME', 'LAA0043869-wp20220824' );

/** データベースのユーザー名 */
define( 'DB_USER', 'LAA0043869' );

/** データベースのパスワード */
define( 'DB_PASSWORD', 'Cz0fHG0MwE6bdb' );

/** データベースのホスト名 */
define( 'DB_HOST', 'mysql205.phy.lolipop.lan' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define( 'DB_COLLATE', '' );

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'h)<W^6pC6PrW.Wq/*+K7#eJp$&o$e`[] 4a$X@GAr}qpM>rkO8,52CXM!FY-H:;Y' );
define( 'SECURE_AUTH_KEY',  'ar(M>fTrp2]C:I$+y#]2Fmm, V:)Yo|`6}0TM_|>]b_TV[LVVtQt19-{Sk.tvSLm' );
define( 'LOGGED_IN_KEY',    '#~puT`31/0EYBCo:,2&ox-7l;UfqW:XEl.E%argq;jtlp^|_A@:ZR:gpx3*d=`eR' );
define( 'NONCE_KEY',        '.w9bg-unRX}$9g$*tHLV[B1i^Vm )0W)s{JNpE8znEZ3S&9-hTcrS^zzWb~q+;Hh' );
define( 'AUTH_SALT',        '/.0[AVWg4ze>qGlP;??|;!co$P_O1[!TGf@p~k|zyucu*po36+7o<eC#PaY~$sm{' );
define( 'SECURE_AUTH_SALT', ')Z<-9RY900*Z%>^p8g[a3q;]y9d~oAs)3y|Fwx3?7hRq( -z{Bn]GhC^.(!}/e(h' );
define( 'LOGGED_IN_SALT',   '2!$?D~Sw&-U=^c0|=#?_417a#?BQ_YCJAi~L*O3GS7Kfk3_=N!L]OK(lqMI(DU*.' );
define( 'NONCE_SALT',       'MMjq;UzE{TbqY&a2S}JHwPvS:(PiWxHLPl(I>0>-_~D/7TE]Uoa4,4v El(a$~L}' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数についてはドキュメンテーションをご覧ください。
 *
 * @link https://ja.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* カスタム値は、この行と「編集が必要なのはここまでです」の行の間に追加してください。 */



/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
