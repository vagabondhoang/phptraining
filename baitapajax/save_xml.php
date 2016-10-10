<?php 


if (isset($_POST['submit'])) {
	$fname 		= $_POST['fname'];
	$lname 		= $_POST['lname'];
	$password 	= $_POST['password'];
	$email 		= $_POST['email'];
	$fnumber 	= $_POST['fnumber'];

	function array2XML($obj, $array){

		foreach ($array as $key => $value){

			if(is_numeric($key))
				$key = 'item' . $key;

			if (is_array($value)){

				$node = $obj->addChild($key);
				array2XML($node, $value);
			}
			else
			{
				$obj->addChild($key, htmlspecialchars($value));
			}
		}
	}

	$my_array = array(

		'fname' => $fname,
		'lname'	=> $lname,
		'password' => $password,
		'email' => $email,
		'fnumber' => $fnumber

		);

	$xml = new SimpleXMLElement('<table/>');

	array2XML($xml, $my_array);

	// echo (($xml->asXML('data.xml')) ? 'Your XML file has been generated successfully!' : 'Error generating XML file!');
}




$xml=simplexml_load_file("data.xml");
?>
<table border='1'>
	<tr>
		<th>fname</th>
		<th>lname</th>
		<th>password</th>
		<th>email</th>
		<th>fnumber</th>
	</tr>
	<tr>
		<th><?php echo $xml->fname; ?></th>
		<th><?php echo $xml->lname; ?></th>
		<th><?php echo $xml->password; ?></th>
		<th><?php echo $xml->email; ?></th>
		<th><?php echo $xml->fnumber; ?></th>
	</tr>

</table>


