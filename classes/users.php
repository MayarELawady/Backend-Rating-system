<?php 
include('Database.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Table V03</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>

	
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100 ver1 m-b-110">
					<div class="table100 ver2 m-b-110">
						<h1>All users</h1>
					<table data-vertable="ver2">
						<thead>
							<tr class="row100 head">
								<th class="column100 column1" data-column="column1">Username</th>
								<th class="column100 column2" data-column="column2">User id</th>
								<th class="column100 column3" data-column="column3">First name</th>
								<th class="column100 column4" data-column="column4">Last name</th>
								<th class="column100 column5" data-column="column5">Email</th>
								<th class="column100 column6" data-column="column6">phone number</th>
								<th class="column100 column7" data-column="column7">Address</th>
								<th class="column100 column8" data-column="column8">Country</th>
							</tr>
						</thead>
						<tbody>
<?php 
	$db= new Database(); 
  $userdata =$db->getdata('users',$data= array(''),'*');


while ($result= mysqli_fetch_assoc($userdata)){
         $uid =$result['u_id'];
         $firstname= $result['f_name'];
         $lastname = $result['l_name'];
         $email2   = $result['e_mail']; 
         $Add   = $result['Addess'];
         $num   = $result['Phone'];
         $count   = $result['country'];
         // echo $fisrtname;
         // echo $uid;
         // echo $email2;
         // echo $Add;
         // echo $phone;
         //  echo $count;
         //echo $lastname;

       
        
      echo              '<tr class="row100">
								<td class="column100 column1" data-column="column1">'.$firstname.$lastname.'</td>
								<td class="column100 column2" data-column="column2">'.  $uid .'</td>
								<td class="column100 column3" data-column="column3">'.  $firstname.' </td>
								<td class="column100 column4" data-column="column4">'.  $lastname .'</td>
								<td class="column100 column5" data-column="column5">'. $email2.' </td>
								<td class="column100 column6" data-column="column6">'.$num.'</td>
								<td class="column100 column7" data-column="column7">'.$Add.'</td>
								<td class="column100 column8" data-column="column8">'.$count.'</td>
							</tr>';
	}	?>
						</tbody>
					</table>
				</div>

				</div>
			</div>
		</div>
	</div>


	

<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>