<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
    <meta charset="utf8"/>
	<meta name="author" content="Christian" />

	<title>Untitled 2</title>
</head>

<body>

<?php
$multiplicador=5;
    for($i=1;$i<11;$i++){
        for ($j=0;$j<$multiplicador;$j++){
            echo "# ";
        }
        echo "&#160&#160&#160 $multiplicador x $i = " . $multiplicador * $i . "<br>";
    }

?>

</body>
</html>