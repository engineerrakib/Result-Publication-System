<?php

//fetch.php

include('database_connection.php');

$column = array("id", "name", "roll", "sem", "dept");

$query = "SELECT * FROM students";

if(isset($_POST["search"]["value"]))
{
 $query .= '
 WHERE name LIKE "%'.$_POST["search"]["value"].'%" 
 OR roll LIKE "%'.$_POST["search"]["value"].'%" 
 OR sem LIKE "%'.$_POST["search"]["value"].'%" 
 OR dept LIKE "%'.$_POST["search"]["value"].'%" 
 ';
}

if(isset($_POST["order"]))
{
 $query .= 'ORDER BY '.$column[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' ';
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

$statement = $connect->prepare($query);

$statement->execute();

$number_filter_row = $statement->rowCount();

$statement = $connect->prepare($query . $query1);

$statement->execute();

$result = $statement->fetchAll();

$data = array();

foreach($result as $row)
{
 $sub_array = array();
 $sub_array[] = $row['id'];
 $sub_array[] = $row['name'];
 $sub_array[] = $row['roll'];
 $sub_array[] = $row['sem'];
 $sub_array[] = $row['dept'];
 $data[] = $sub_array;
}

function count_all_data($connect)
{
 $query = "SELECT * FROM students";
 $statement = $connect->prepare($query);
 $statement->execute();
 return $statement->rowCount();
}

$output = array(
 'draw'   => intval($_POST['draw']),
 'recordsTotal' => count_all_data($connect),
 'recordsFiltered' => $number_filter_row,
 'data'   => $data
);

echo json_encode($output);

?>
