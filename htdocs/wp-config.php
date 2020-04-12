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
 * * MySQL 設定
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

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define( 'DB_NAME', 'ishibashi' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'root' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', 'root' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '_qwvN~LV*a:lK8jp62MB_,^7w5WA6A(b&8NqK%fQGrIh1X*0sW]wa4mY*{OW)jyZ' );
define( 'SECURE_AUTH_KEY',  '=b2[~X7n;>R>|A-%CTQ! `k@:ukSz>w{92r-OZ82vLNXojK+Kl7qw^0<brci.zbl' );
define( 'LOGGED_IN_KEY',    'IeRWVc!7E`VKS&H,)4uC~vRBIaGXwe~7i&?A[IElRR4+WVt(mYV?xH}7]HC@6H+Z' );
define( 'NONCE_KEY',        '(}7:Nn~,ddum[`;#<W185.u4G orv86XMB9ls9z;faiyE9QCW#xg+xZaVd^<Yy>@' );
define( 'AUTH_SALT',        'bjZ@zd= =1[4*=dbB7T%4NIm:W+Jj}#%`#}t,K-bmy}CRp`ee):!NOUs4;Y*T#UJ' );
define( 'SECURE_AUTH_SALT', 'SgLaV`=nRf[3${sdrmI`[[/R+_4e`Wr8c=&2r{S{{Wp[%n8x&?K($nkh_6Ph@}rT' );
define( 'LOGGED_IN_SALT',   '+t.*u4>zmMZukX^?;,4UnQk_iT@`a*)_EQ&COSI)UEO<K<_OZ{BEB_K@&R#[q[!w' );
define( 'NONCE_SALT',       '8NElLuG#01agkp _UWeVq6DU/~eb=g9|m6/LQQ/SZf65*j@LV#@pV]Ke0ppP_=g|' );

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

/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
