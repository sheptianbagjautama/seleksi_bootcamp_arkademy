<?php 

function myCountChar($x, $y)
{
	// if (!preg_match("/^[A-Za-z0-9_.]/",$x == !preg_match("/^[A-Za-z0-9_.]/",$y ))) {
	// 	$kata = array($x, $y);
	// 	$jumlah = count($kata);

	// 	echo $jumlah;
	// } else {
	// 	echo "Fail";
	// }

	$kalimat = $x;
	if (preg_match("/$y/i", $kalimat)) {
		$kata = array(
			preg_match("/$y/i", strlen($kalimat)),
		);
		$jumlah = count($kata);
		// -----------------------------------------------------
		// $kata = array($kalimat, $y);
		// $jumlah = count($kata);
		echo $jumlah.'Ketemu';
	} else {
		echo 'Tidak ketemu';
	}
}
	
// Mencari kata atau karakter yang sama sudah berhasil, tetapi untuk menghitung jumlah kata/karakternya belum dapet
myCountChar('bootcamp', 'o');
myCountChar('arkademy', 'k');

?>