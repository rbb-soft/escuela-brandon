<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="Christian" />

	<title>Untitled 1</title>
    <style>
    table{
        font-size: 18pt;
        font-weight: bolder;
        width: auto;
        height:auto;
        font-family: sans-serif;
    }
    td {
        height:70px;
        width:70px;
        border: solid 2px; black;
        text-align: center;
        vertical-align: middle;
    }
    </style>
</head>

<body>
<table>
<?php
    $row=1;
    for($num=0;$num<101;$num++){
        echo  $row === 0 ? "\n<tr>" : "";
        echo "<td>$num</td>";
        if($row === 10 ){
             echo  "</tr>\n";
             $row=0;     
        }
           $row++; 
    }
?>

</table>


</body>
</html>