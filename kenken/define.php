<?php
//
// define.php
// 定数を定義するファイル

//local
define( "DB_HOST", "localhost" );
define( "DB_USER", "root" );

// ケンケンのローカル
define( "DB_PASS", "699177" );
define( "DB_NAME", "yanyan" );

// 三木のローカル
// define( "DB_PASS", "yururinpanda" );
// define( "DB_NAME", "mmiki" );

// click
// define( "DB_HOST", "" );
// define( "DB_USER", "" );
// define( "DB_PASS", "" );
// define( "DB_NAME", "" );
// コメント切り替えで便利

//
// テーブル関係
//

// 認証テーブル
// define( "TBL_AUTH","php3_auth" );
// ユーザーテーブル
// define( "TBL_USER","php3_user" );

//
// パスワード関係
//

// ハッシュアルゴリズム
define( "HASH_ALG","sha256" );
// パスワードソルト
define( "HASH_SALT","PHP3" );

?>
