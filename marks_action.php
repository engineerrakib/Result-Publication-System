<?php

//marks_action.php

include('database_connection.php');

if($_POST['action'] == 'edit')
{
 $data = array(
  ':roll'  => $_POST['roll'],
  ':sem'  => $_POST['sem'],
  ':s1'   => $_POST['s1'],
  ':s2'   => $_POST['s2'],
  ':s3'   => $_POST['s3'],
  ':s4'   => $_POST['s4'],
  ':s5'   => $_POST['s5'],
  ':id'    => $_POST['id']
 );

 $query = "
 UPDATE marks 
 SET roll = :roll, 
 sem = :sem, 
 s1 = :s1, 
 s2 = :s2, 
 s3 = :s3, 
 s4 = :s4, 
 s5 = :s5 
 WHERE id = :id
 ";
 $statement = $connect->prepare($query);
 $statement->execute($data);
 echo json_encode($_POST);
}

if($_POST['action'] == 'delete')
{
 $query = "
 DELETE FROM marks 
 WHERE id = '".$_POST["id"]."'
 ";
 $statement = $connect->prepare($query);
 $statement->execute();
 echo json_encode($_POST);
}


?>
