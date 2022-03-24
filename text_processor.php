<html lang="ar" dir="rtl">
<head>
</head>
<?php
$pre = explode(" ", $text);
foreach ( $pre as $post) {
	$outp = $post;
	foreach ($libs as $key => $value) {
		if ( strtolower($post) == $key ) {
			$outp = $value;
		}
	}

	echo " " . $outp;
}
?>
<body>
</body>
</html>
