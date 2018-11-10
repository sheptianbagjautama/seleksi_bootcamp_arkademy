<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">

<!-- jQuery library -->
<script src="js/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="js/bootstrap.min.js"></script>
<body>

	<?php 
		function count_handshake($jumlah_orang){
			$total = 0;
			for ($handshake=1; $handshake < $jumlah_orang ; $handshake++) { 
					$total = $total + $handshake;
					
				}
				echo $total;
			}

		//DONE

		//Hasil kasus pertama = 3 
		print(count_handshake(3));

		//Hasil kasus kedua = 15 
		print(count_handshake(6));

		//try other number
	?>
</body>
</html>
