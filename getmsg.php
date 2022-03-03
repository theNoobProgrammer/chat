<?php
	$name = $_POST['name'];
	
	if(file_exists('chat.json')){
		$temp = file_get_contents('chat.json');
		$messages = json_decode($temp, true);
		
		foreach($messages['chat'] as $mes){
			if($mes['from'] != $name)
				echo $mes['from']."\n\t".$mes['message']."\n";
			else
				echo "Te\n\t".$mes['message']."\n";
		}
	}
?>