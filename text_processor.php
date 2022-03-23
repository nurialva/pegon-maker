<html lang="ar" dir="rtl">
<head>
</head>
<?php
$pre = explode(" ", $text);
foreach ( $pre as $post) {
	echo " " .switch_word ( strtolower ( $post ));
}
?>
<body>
</body>
</html>
