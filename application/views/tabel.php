<!DOCTYPE html>
<html>
<head>
	<title>Data Pengguna</title>
</head>
<body>
	<table border="1" style="border-collapse: collapse;">
		<tr>
			<th>Nama</th>
		</tr>
		<?php foreach($data1 as $a){ ?>
		<tr>
			<td><?php echo $a['id_provinsi']; ?></td>
			<td><?php echo $a['provinsi']; ?></td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>