<body bgcolor="#A6DC3F">
<center>PUNTO 8</center>
<?php
$t= 1;
$acu1=0;
$acu2=0;
//echo "<hr>";
echo "<br>Números: <br>";
echo "<table border = '1' cellpadding='4'><br>";
while($t<=10){
  $tt=rand(1,100);
  echo $tt."&nbsp;&nbsp;";
  if($tt%2==0){
    $acu1++;
    }else {
    $acu2++;
  }
  $t++;
}
echo "</table>";
echo "<br><b>Reporte Final</br>";
echo "<table border=1>";
echo "<tr> <br><td>Total de pares:</td><td>".$acu1."</td></tr>";
echo "<tr><td>Total de impares:</td><td>".$acu2."</td></tr>";
echo "</table>";
    ?>
