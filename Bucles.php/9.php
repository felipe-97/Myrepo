<body bgcolor="#A6DC3F">
<center>PUNTO 9</center>
<?php
$n= 1;
$acumu3=0;
$acumu4=0;
$acumu5=0;
$acumu6=0;
//echo "<hr>";
echo "Números: <br> ";
echo "<table border = '1' cellpadding='4'><br>";
while($n<=10){
  $nn=rand(-100,100);
  echo $nn."&nbsp;&nbsp;";
  if($nn%2==0){
    if($nn>=0){
    $acumu3++;   
    }else{
      $acumu5++;
      }
  }else {
    if($nn>=0){
    $acumu4++;
    }else{
      $acumu6++;
      }
  }
  $n++;
}
echo "</table>";
echo "<br><b>Reporte Final Tabla <br> <br>";
echo "<table border=1>";
echo "<tr><td>Total de pares positivos:</td><td>". $acumu3 ."</td></tr>";
echo "<tr><td>Total de impares positivos:</td><td>". $acumu4 ."</td></tr>";
echo "<tr><td>Total de pares negativos:</td><td>". $acumu5 ."</td></tr>";
echo "<tr><td>Total de impares negativos:</td><td>". $acumu6 ."</td></tr>";
echo "</table>";

    ?>
