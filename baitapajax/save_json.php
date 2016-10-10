<?php 

if (isset($_POST['submit'])) {

	if (file_exists('js/data')) {
		$curent_data 	= file_get_contents('js/data');
		$array_data 	= json_decode($curent_data, true);
		$extra 			= array(

			'Firstname' => $_POST['fname'],
		 	'Lastname' => $_POST['lname'],
		 	'Password' => $_POST['password'],
		 	'Email' => $_POST['email'],
			'Phone Number' => $_POST['fnumber']

			);

		$array_data[] 	= $extra;
		$final_data 	= json_encode($array_data);
		if (file_put_contents('js/data', $final_data)) {
			echo 'Data successfully saved';
		}
	}

};

 ?>