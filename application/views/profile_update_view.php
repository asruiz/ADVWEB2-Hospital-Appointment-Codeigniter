<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>CI Insert Form</title>
</head>

<body>
	<form method="post" action="<?php echo base_url();?>index.php/profile/update">

	<table width="400" border="0" cellpadding="5">
		<tr>
		<th width="213" align="right" scope="row">Enter your first name</th>
		<td width="161"><input type="text" name="fname" size="20" value="<?php echo $ufname; ?>" /></td>
		</tr>

		<tr>
			<th align="right" scope="row">Enter your last name</th>
			<td><input type="text" name="lname" size="20" value="<?php echo $ulname; ?>" /></td>
		</tr>

		<tr>
			<th align="right" scope="row">Enter your email</th>
			<td><input type="text" name="email" size="20" value="<?php echo $uemail; ?>" /></td>
		</tr>

		<tr>
			<th align="right" scope="row">&nbsp;</th>
			<td>
				<input type="hidden" name="id" value="<?php echo $id; ?>" />
				<input type="submit" name="submit" value="Update" />
			</td>
		</tr>
	</table>
	</form>
</body>
</html>
