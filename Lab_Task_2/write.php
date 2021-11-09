<?php

$formcontrol = array(
	'FirstName'=>$_POST["FirstName"],
	'LastName' =>$_POST["LastName"],
	'Age' => $_POST["Age"],
  'Designation' =>@$_POST["Designation"],
  'Designation' =>@$_POST["Designation"],
	'language1' =>@$_POST["language1"],
	'language2' =>@$_POST["language2"],
	'language3' =>@$_POST["language3"],
	'Email' =>$_POST["Email"],
	'Password' =>$_POST["Password"],
  'file' => @$_POST["File"]
);

$existingdata = file_get_contents('data.json');
$tempJSONdata = json_decode($existingdata);
$tempJSONdata[] =$formcontrol;
$jsonconvert = json_encode($tempJSONdata, JSON_PRETTY_PRINT);
if(file_put_contents("data.json",$jsonconvert))
{
	echo "Data Saved Successfully";
}
else

	echo " not saved";


?>