# Search value from multidimensional array
Search value from multidimensional array

```bash 
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

$search = 'uitttttt';

echo search_value_from_multidimensional_array($array, $search);
// OutPut: uiuittttttttttttttju97766
```
