<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Interview Test</title>
	<style type="text/css" media="screen">
		body{padding:10%;text-align:center;font-family:arial;}
		table{width:800px;margin:30px auto;text-align:center;border:1px solid #ddd;border-collapse:collapse;vertical-align:middle;}
		table th{border:1px solid #444;padding:10px;background-color:#222;color:#fff;font-weight:600;}
		table td{border:1px solid #ddd;padding:15px;font-size:15px;}
		table tr:nth-child(2n){background-color:#f8f8f8;}
		table tr:hover{background-color:#f9f9f9;}
	</style>
</head>
<body>
	<?php
		$people = array(
		   array('id'=>1, 'first_name'=>'John', 'last_name'=>'Smith', 'email'=>'john.smith@hotmail.com'),
		   array('id'=>2, 'first_name'=>'Paul', 'last_name'=>'Allen', 'email'=>'paul.allen@microsoft.com'),
		   array('id'=>3, 'first_name'=>'James', 'last_name'=>'Johnston', 'email'=>'james.johnston@gmail.com'),
		   array('id'=>4, 'first_name'=>'Steve', 'last_name'=>'Buscemi', 'email'=>'steve.buscemi@yahoo.com'),
		   array('id'=>5, 'first_name'=>'Doug', 'last_name'=>'Simons', 'email'=>'doug.simons@hotmail.com')
		);
	?>
	<h1>Interview Test</h1>
	<table>
		<thead>
			<tr>
				<th>ID</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Email</th>
				<th>&nbsp;</th>
			</tr>
		</thead>
		<tbody>
			<?php
			foreach ($people as $person) {
				// print_r($person);
				echo "<tr id='row".$person["id"]."'>";
				foreach ($person as $key => $value) {
					echo "<td>".$value."</td>";
				}
				$alertText = 'Name: '.$person['first_name'].' '.$person['last_name'].' Email: '.$person['email'].'';
				$alertTextFix = '"'.$alertText.'"';		
				echo "<td><button type='button' id='nameEmail' onClick='alert(".$alertTextFix.")' >Click Me</button></td></tr>";
			}
			?>
		</tbody>
	</table>
</body>
</html>