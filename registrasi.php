<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form>
		<pre>
			REGISTRASI
			Nim	:<input type="text" name="nama" pattern="\d*" maxlength="10"><br><br>
			Nama 	:<input type="text" name="nama" maxlength="25"><br><br>
			Email 	:<input type="email" name="nama" maxlength="25"><br><br>
			<input type="submit" value="KIRIM">
		</pre>
	</form>
</body>
</html>

<?php
	if(isset($_POST['nim'])){
		$nim=$_POST['nim'];
		$nama=$_POST['nama'];
		$email=$_POST['email'];
	}
?>
	<script>
		alert("Registrasi Berhasil")
	</script>
