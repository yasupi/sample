<?php
/**
 * Use this file to override global defaults.
 *
 * See the individual environment DB configs for specific config information.
 * このファイルはコミット禁止ファイルです。（修正も不可）
 */

return array(
	'default' => array(
		'type'    => 'mysqli',
		'connection'    => array(
			'database'        => 'bakuhatsutaro',
			'persistent'      => false,
			'compress'        => false,
		),
		'identifier'    => '`',
		'table_prefix'  => '',
		'charset'       => 'utf8',
		'enable_cache'  => true,
		'profiling'     => false,
	),
);
