<?php 

	function deskripsi()
	{

		// $data['itemID']		= '12341822';
		// $data['itemName']	= 'basic t-shirt';
		// $data['price']		= 70000;
		// $data['availableColorAndSize'] = array(
		// 		'0' => array(
		// 				'color' => 'red',
		// 				'size'	=> 'S,M,L'
		// 		),
		// 		'1' => array(
		// 				'color' => 'solid black',
		// 				'size'	=> 'M,L'
		// 		),
		// );
		// $data['freeShiping'] = false;

		$data = array(
			'itemID' 				=> '12341822',
			'itemName'				=> 'basic t-shirt',
			'price'					=> 70000,
			'availableColorAndSize' => array(
											'0' => array(
													'color' => 'red',
													'size'	=> 'S,M,L'
											),
											'1' => array(
													'color' => 'solid black',
													'size'	=> 'M,L'
											),
										),
			'freeShiping'			=> false
		);	

		return json_encode($data);
	}

	echo deskripsi();

?>