<?php

//action.php

include('database_connection.php');

if($_POST['action'] == 'edit')
{
 $data = array(
  ':name'  => $_POST['name'],
  ':roll'  => $_POST['roll'],
  ':sem'   => $_POST['sem'],
  ':dept'   => $_POST['dept'],
  ':id'    => $_POST['id']
 );

 $query = "
 UPDATE students 
 SET name = :name, 
 roll = :roll, 
 sem = :sem, 
 dept = :dept 
 WHERE id = :id
 ";
 $statement = $connect->prepare($query);
 $statement->execute($data);
 echo json_encode($_POST);
}

if($_POST['action'] == 'delete')
{
 $query = "
 DELETE FROM students 
 WHERE id = '".$_POST["id"]."'
 ";
 $statement = $connect->prepare($query);
 $statement->execute();
 echo json_encode($_POST);
}


?>
