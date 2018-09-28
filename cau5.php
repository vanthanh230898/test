<!DOCTYPE html>
<html>
<head>
	<?php require "user.php" ?>
	<title>cau5</title>
</head>
<body>
	<form>
		<input type="txt" name="seach" placeholder="nhap vao id">
		<input type="submit" name="timkiem" value="timkiem">
	</form>
	<table>
	<tr>
			<td>ID</td>
			<td>Name</td>
			<td>Gmail</td>
			<td>Yahoo</td>
		</tr>
	<?php 
		if(empty($_GET['seach']))
			echo "moi nhap id";
		else
		{
			for($i = 0; $i < count($user); $i++)
				if($user[$i]['id'] == $_GET['seach']) { ?>
					<tr>
						<td><?php echo $user[$i]['id'] ?></td>
						<td><?php echo $user[$i]['name'] ?></td>
						<td><?php echo $user[$i]['email']['gmail'] ?></td>
						<td><?php echo $user[$i]['email']['yahoo'] ?></td>
					</tr>
					<br>
					<?php
				break;
			}
				else
				{
					if($i == count($user)-1)
					{
						echo "khong tim thay";
					}
				}
		}
	?>
</table>
<br>
	<table>
		<tr>
			<td>ID</td>
			<td>Name</td>
			<td>Gmail</td>
			<td>Yahoo</td>
		</tr>
		<?php for($i=0; $i < count($user); $i++): ?>
			<tr>
				<td><?php echo $user[$i]['id'] ?></td>
				<td><?php echo $user[$i]['name'] ?></td>
				<td><?php echo $user[$i]['email']['gmail'] ?></td>
				<td><?php echo $user[$i]['email']['yahoo'] ?></td>
			</tr>
		<?php endfor; ?>
	</table>
	<style type="text/css">
		table tr td {
			border: 1px solid red;
			text-align: center;
		}
	</style>
	<?php sort($user) ?>
		<table>
		<tr>
			<td>ID</td>
			<td>Name</td>
			<td>Gmail</td>
			<td>Yahoo</td>
		</tr>
		<?php for($i=0; $i < count($user); $i++): ?>
			<tr>
				<td><?php echo $user[$i]['id'] ?></td>
				<td><?php echo $user[$i]['name'] ?></td>
				<td><?php echo $user[$i]['email']['gmail'] ?></td>
				<td><?php echo $user[$i]['email']['yahoo'] ?></td>
			</tr>
		<?php endfor; ?>
	</table>
	
</body>
</html>