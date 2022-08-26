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
define( 'AUTH_KEY',         'f=q[$L}2TQ5L5M)Xer6u!^%FH80!9M7yeKe+g)MpC< F=sl _Xqpe{A|oGm~;GBP' );
define( 'SECURE_AUTH_KEY',  'Fd^_yQh>% =7!yv7Ep1~D+tqy?!B~@MF|}9tNBfM$KFPwR-?Se=On(#/P_1z7bk7' );
define( 'LOGGED_IN_KEY',    'e  *Cm=Pp0;y &-`uPG4n[^e}=Z+Q=&@3N+YYEuWZEAd;Ic*|gRU}x[,PoM2HL+7' );
define( 'NONCE_KEY',        '&!Ci-bXYBPoFk{_5vD5bQF`B+q}0j2CUkk9OhE^Qk6,ZR.y5er@rdef!TiSDI0K-' );
define( 'AUTH_SALT',        '4^JDsH.tsM_.x~w5<q9fnaX({+:5-d[(_dF:W$:sJbx~5W{E1anAxJ7npxmu]=nL' );
define( 'SECURE_AUTH_SALT', '2=&%S^{n<|W[0Yc>wR2fo;W|cT%f(u~H%yP>SYH{0Vgr1EGQ:Sc?qx6w8K&B;|Q ' );
define( 'LOGGED_IN_SALT',   'R^-4F!}(QJbWF59,_=EadZNwD`tBm)C736N]l%;;#3(90hHth=Dh%:U(yP# 5JS6' );
define( 'NONCE_SALT',       'k`U%`y})3QpZbsE^5o@v={I]cSBlD]=K`,@9]U30m/]kz3dkxB9_A7Q^R>Ji4hhI' );

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
