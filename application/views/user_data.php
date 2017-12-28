<!DOCTYPE html>
<html>
<head>
	<title>User Date</title>
</head>
<body>
	<?php foreach ($data as $user):  ?>
		<table border="2px">
			<tr>
				<!-- <td><?= $user->Id?></td>
				<td><?= $user->user_name?></td>
				<td><?= $user->email?></td> -->
				<td><?= $user['Id']?></td>
				<td><?= $user['user_name']?></td>
				<td><?= $user['email']?></td> 
			</tr>
		</table>
	<?php endforeach;?>

</body>
</html>