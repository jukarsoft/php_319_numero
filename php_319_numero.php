<?php 
	if (isset($_COOKIE['contador'])) {
		$contador=$_COOKIE['contador']+1;
	} else {
		$contador=1;
	}
	$long=strlen($contador);
	$imagen=null;
	for ($i=0;$i<$long;$i++) {
		$tmp=substr($contador, $i,1);
		$imagen.="<img src='img/$tmp.png' height='100' width=''100' alt='contador'>";
		//echo $tmp;
	}
	
	setcookie("contador", $contador, time()+3600*24*365);
 ?>
 <!DOCTYPE html>
<html>
<head>
	<title>uso cookie y mostrar imagen</title>
</head>
<body>
	<h3><?=$imagen?></h3>
</body>
</html>