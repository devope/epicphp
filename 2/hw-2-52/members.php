<pre>
<? 
$members = array(
	'AlexManWell' => array(
		'name' => 'Alex',
		'surname' => 'ManWell',
		'city' => 'Kiev',
		'email' => 'alexmanwell@gmail.com',
		'vkid' => '2alex12345',
		'interest' => 'web development'
	),
		'KirillGolodny' => array(
		'name' => 'Kirill',
		'surname' => 'Golodny',
		'city' => 'Saint-Petersburg',
		'email' => 'devope@icloud.com',
		'vkid' => '231634207',
		'interest' => 'creating'
	)

);

foreach ($members as &$member) {
	$name = $member['name'];
	$surname = $member['surname'];
	$city = $member['city'];

	$member['name'] = $surname;
	$member['surname'] = $city;
	$member['city'] = $name;
}


var_dump($members);

?>
</pre>