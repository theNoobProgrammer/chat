<?php

	$name = $_POST['name'];
	$msg = $_POST['msg'];
	echo "Te\n\t".$msg."\n";
	if(file_exists('chat.json')){
		$temp = file_get_contents('chat.json');
		$messages = json_decode($temp, true);
		
		$extra = array(
			'from' => $name,
			'message' => $msg,
			'time' => "asd"
		);
		
		array_push($messages['chat'], $extra);
		$final_data = json_encode($messages);
		file_put_contents('chat.json', $final_data);
		
		/*
		$messages['chat'] += $extra;
		$final_data = json_encode($messages);
		if(file_put_contents('chat.json', $final_data)){
			//sikeres
		}
		*/
	}
	
	//$name = $_POST['name'];
	
	/*if(file_exists('chat.json')){
		$temp = file_get_contents('chat.json');
		$messages = json_decode($temp, true);
		
		foreach($messages['chat'] as $mes){
			if($mes['from'] != $name)
				echo $mes['from']."\n\t".$mes['message']."\n";
			else
				echo "Te\n\t".$mes['message']."\n";
		}
	}*/


/*
	$messages = array();
	
	while(true){
	
		$name = $_POST['name'];
		$msg = $_POST['msg'];
			
		if($_POST['name'] != ""){
			$temp = array();
			array_push($temp, $name, $msg);
			array_push($messages, $temp);
			
			foreach($messages as $mes){
				echo "asdfdsfdsf";
				echo $mes[0];
				echo $mes[1];
			}
			
			$_POST['name'] = "";
		}
	}
	*/
?>