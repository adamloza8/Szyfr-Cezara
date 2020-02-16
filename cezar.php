<html>
<head></head>
<body>
<?php
$tekst = $_GET["text"];
$przesuniecie = $_GET["key"];
$nowytekst = $tekst;
for ($i=0;$i<strlen($tekst);$i++) {

  $ascii = ord($tekst[$i]);
  for($j=0;$j<$przesuniecie;$j++){
    if ($ascii >= 65 && $ascii <= 90) {
    	if($ascii == 90) { 
      	$ascii = 65; 
    	} 
    	else $ascii++;
    	}
    else if ($ascii >= 97 && $ascii <= 122) {
    	if($ascii == 122) { 
      	$ascii = 97; 
    	} 
    	else $ascii++;
    }
    else if ($ascii >= 48 && $ascii <= 57) {
    	if($ascii == 57) { 
      	$ascii = 48; 
    	} 
    	else $ascii++;
    }
    else $ascii == $ascii;
    }
  $nowytekst[$i] = chr($ascii);

}
echo $nowytekst;
?>
</body>
</html>