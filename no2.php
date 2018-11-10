<!DOCTYPE html>
<html>
<head>
	<title>Jawaban No. 2</title>
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
<center>
<div class="container"><br><br>
	<div class="jumbotron">
	  <h1>Jawaban No. 2</h1> 
	  <p>try with this (<b>qwert_QQ
·         lkjhg.AA</b>) or something in your mind </p> 
	</div>

	<!-- INTI CODING -->
	<?php
	// Membuat variable dan memasukkan nilai awal
	$username_error = "";
	$success = "";
	$username = "";

	function validasi_form($data) {
	    $data = trim($data);
	    $data = stripslashes($data);
	    $data = htmlspecialchars($data);
	    return $data;
	};

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	    if (empty($_POST["username"])) {
	        $username_error = '
	        <div class="alert alert-danger" role="alert">
				  <strong>Fail !</strong> Inputan tidak boleh kosong.
			
			</div>
	        ';
	    } else {
	        $username = validasi_form($_POST["username"]);
	        // Periksa jika username hanya mengandung huruf dan spasi
	        if (!preg_match("/^[a-z]{5}[_.]{1}[A-Z]{2}/",$username)) {
	            $username_error = '
	            <div class="alert alert-danger" role="alert">
				  <strong>Fail !</strong> Inputan anda tidak memenuhi kriteria ,<br> Format inputan : 5 karakter huruf kecil, 1 karakter harus space/titik dan 2 karakter harus huruf besar.
				</div>
	            ';
	        } else {
	          $success = '
	          <div class="alert alert-success" role="alert">
				  <strong>Success !</strong> Anda memenuhi syarat yang ditentukan.
				</div>
	          ';
	      }
	    }
	};
	?>

	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
		<div class="form-group col-6">
		    <label for="username"> Username :</label>
		    <input type="text" class="form-control" id="username" name="username">
	  	</div>
		<div class="form-group col-6">
			<input type="submit" name="submit" value="Submit" class="btn btn-primary"><br>
		</div>
		<?php echo $username_error;?>
		<?php echo $success;?>
	</form>
	<!-- END INTI CODING -->

</div>
</center>

</body>
</html>