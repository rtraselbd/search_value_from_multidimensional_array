<?php

function search_value_from_multidimensional_array($value, $search)
{
	foreach ($value as $key => $data) {
		if (is_array($data)) {
			$result = search_value_from_multidimensional_array($data, $search);
			if (!empty($result)) {
				return $result;
			}
		} else {
			if (stripos($data, $search) !== false) {
				return $data;
			}
		}
	}
	return null;
}

$array = [
	'key1' => 'ewiuthg9843',
	'key2' => [
		'subkey1' => 'dwisjuhfnrgfhfgh',
		'subkey2' =>  [
			'subsubkey1' => 'uiuiju97766',
			'key2' => [
				'subkey1' => '456789458',
				'subkey2' =>  [
					'subsubkey1' => 'uiuittttttttttttttju97766'
				],
			]
		],
	]
];

$search = '456789458';

echo search_value_from_multidimensional_array($array, $search); // output 456789458
