<?php
/**
 * The development database settings. These get merged with the global settings.
 * 「パスワード」の部分には作業環境のデータベースパスワードを入力して下さい。
 * このファイルはコミット禁止ファイルです。
 */

return array(
	'default' => array(
		'connection'    => array(
			'hostname'        => 'localhost',
			'port'            => '3306',
			'username'        => 'root',
			'password'        => 'パスワード',
		),
	),
);
