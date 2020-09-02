<!-- Skrypt służący do obsługi tabelki i aktualizowania jej do bazy danych bez odświeżania strony -->
<?php
include_once("db_connect.php");
$input = filter_input_array(INPUT_POST);
echo $input['Zdjecie'];
echo $input['Nazwa'];
echo $input['delay'];
if ($input['action'] == 'edit') 
{	
	$update_field='';
	if(isset($input['Zdjecie'])) 
	{
		$update_field.= "Zdjecie='".$input['Zdjecie']."'";
	} 
	else if(isset($input['Nazwa'])) 
	{
		$update_field.= "Nazwa='".$input['Nazwa']."'";
	} 
	else if(isset($input['delay'])) 
	{
		$update_field.= "delay='".$input['delay']."'";
	}		
	if($update_field && $input['ID']) 
	{
		$sql_query = "UPDATE kosmos SET $update_field WHERE ID=1";	
		mysqli_query($conn, $sql_query) or die("database error:". mysqli_error($conn));		
	}
}


?>