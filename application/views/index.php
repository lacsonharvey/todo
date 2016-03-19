<html>
<head>
<title>Todo App</title>
<link rel="stylesheet" type="text/css" href="<?php echo asset_url();?>css/style.css">
</head>
<body>
<h1>Todo App</h1>
<table>
<thead>
<th>Username</th>
<th>Email</th>
</thead>
<tbody>
<?php 
foreach ($users as $user) {
	echo '<tr><td>' . $user->username . '</td>' . '<td>' . $user->email . '</td></tr>';	
}	
?>
</tbody>
</table>
</body>	
</html>
