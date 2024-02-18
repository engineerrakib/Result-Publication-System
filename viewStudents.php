<?php
include("config.php");
session_start();
if(!isset($_SESSION['email']))
{
	header("location:index.php");
}
$email=$_SESSION['email'];
$a=mysqli_query($al,"SELECT * FROM faculty WHERE email='$email'");
$b=mysqli_fetch_array($a);
$sem=$b['sem'];
?>

<html>
 
	 <head>
		  <title>View Students</title>
		  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		  <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
		  <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>  
		  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
		  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		  <script src="https://markcell.github.io/jquery-tabledit/assets/js/tabledit.min.js"></script>
		  <link rel="icon" href="icon/icon.png">
	 </head>
 
<body>
  <div class="container">
   <h3 align="center">View Students Registration List</h3>
   <br />
   <div class="panel panel-default">
    <div class="panel-heading">View Students</div>
    <div class="panel-body">
     <div class="table-responsive">
      <table id="sample_data" class="table table-bordered table-striped">
       <thead>
        <tr>
         <th>SL. No.</th>
         <th>Name</th>
         <th>Roll</th>
         <th>Semester</th>
         <th>Department</th>
        </tr>
       </thead>
       <tbody></tbody>
      </table>
     </div>
    </div>
   </div>
  </div>
  <br />
  <br />
 </body>
</html>

<script type="text/javascript" language="javascript" >
$(document).ready(function(){

 var dataTable = $('#sample_data').DataTable({
  "processing" : true,
  "serverSide" : true,
  "order" : [],
  "ajax" : {
   url:"fetch.php",
   type:"POST"
  }
 });

 $('#sample_data').on('draw.dt', function(){
  $('#sample_data').Tabledit({
   url:'action.php',
   dataType:'json',
   columns:{
    identifier : [0, 'id'],
    editable:[[1, 'name'], [2, 'roll'], [3, 'sem'], [4, 'dept']]
   },
   restoreButton:false,
   onSuccess:function(data, textStatus, jqXHR)
   {
    if(data.action == 'delete')
    {
     $('#' + data.id).remove();
     $('#sample_data').DataTable().ajax.reload();
    }
   }
  });
 });
  
}); 
</script>
