<?php
header('Access-Control-Allow-Origin: *');
ini_set('memory_limit', '-1');
$cityname = $_POST['cityname'];
$name = $_POST['name'];
$myfile = fopen("tinder_".$cityname.".txt", "r") or die("Unable to open file!");
$json=json_decode(fread($myfile,filesize("tinder_".$cityname.".txt")));
fclose($myfile);

$arr=array();
foreach($json as $record){
  
    if(strtolower($record->name)==strtolower($name))
    	{	$arr_temp=array();
    		$arr_temp['schools'] =$record->schools;
    		$arr_temp['bio'] =$record->bio;
    		$arr_temp['gender'] =$record->gender;
    		$arr_temp['ping_time'] =$record->ping_time;
    		$arr_temp['photos'] =$record->photos;
    		$arr_temp['birth_date'] =$record->birth_date;
    		$arr_temp['name'] =$record->name;
    		array_push ($arr,$arr_temp);
		}

    
}
echo json_encode($arr);


?>