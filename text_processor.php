<html lang="ar" dir="rtl">
<head>
<style media="screen">
@font-face {
  font-family: 'Arabic';
  font-style: normal;
	src:url('Traditional_Arabic.ttf') ;
}
body {
	font-family: 'Arabic';
	font-size: 20px;
}

</style>
</head>
<body>

<?php
$pre = explode(" ", $text);

foreach ( $pre as $post) {
	$post = str_replace(":", "" , $post);
	$post = str_replace(";", "" , $post);
	$post = str_replace(",", "" , $post);
	$post = str_replace(".", "" , $post);
	$outp = $post;

	foreach ($libs as $key => $value) {
		if ( strtolower($outp) == $key ) {
			$outp = $value;
		}
		if ( strtolower($outp) == "se".$key."nya" ) {
			$outp = "سَا".$value."يَا";
		}
		if ( strtolower($outp) == $key."mu" ) {
			$outp = $value."مُوْ";
		}
		if ( strtolower($outp) == "mem".$key."nya" ) {
			$outp = "مَامْـ".$value."يَا";
		}
		if ( strtolower($outp) == "mem".$key."nya" ) {
			$outp = "مَامْـ".$value."يَا";
		}



	}
	echo " " . $outp;
}
?>
</body>
</html>
