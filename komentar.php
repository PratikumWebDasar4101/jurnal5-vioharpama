<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form>
		<pre>
			Komentar	: <br>
			<textarea name="komnetar" cols="30" rows="10"></textarea><br>
			<input type="submit" value="KIRIM">
		</pre>
	</form>

</body>
</html>

<?php
	if (isset($_POST['Komentar'])) {
		$komnetar=$_POST['Komentar'];

		$jumlah=strlen($komnetar);
		if ($jumlah < 5) {
			?>
			<script>
				alert("EROR... (KOMENTAR KURANG DARI 5 HURUF)")
			</script>
			<?php
		} else {
			?>
			<pre>
				<?php
					echo "Jumlah Huruf Pada Komentar :".$jumlah."Huruf";
				?>
			</pre>
			<?php
		}
	}
?>
