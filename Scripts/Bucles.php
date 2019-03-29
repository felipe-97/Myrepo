
<html>
<head>
  <title>Calcular  </title>
  <link rel="icon" type="image/ico" href="icons/calcu.png" />
</head>
  <body bgcolor="A6DC3F">

<form name="frm1" action="bucles.php" method="POST">

<center> <table border="0" aling="center" width="10"> </center>

  <tr><td>
  <center>
  <P><br> MOSTRAR TABLAS <P/> </center>
  </td> </tr>

<tr>
<td> <br><font face "Times New Roman" size="4" color="#010200"> <b>Digite  Primer Numero </b> <br>
</td>
</tr>

<tr>
<td><input type="number" name="Numero1" placeholder="Ingrese Primer Numero" required > <br> <br> </center>
</td>
</tr>

<tr>
 <td> <center> <br>
   <input type ="submit" value="PROCESAR">
 </center> <br>
 </td>
</tr>

</form>
  </body>
</html>








<?php
//Generar lista de numeros del 1 al 10
//Script con while. for, do-while
echo "<b>Lista de numero con While</b>";
echo "<table border=1  >";
echo "Tabla Ascendente";

$nu1 = $_POST ['Numero1'];
$i=1 ;
while ($i <= $nu1) {

  if ($nu1%2==0){
    echo "<td bgcolor='green'>".$i ."</td>";
  }else{
   echo "<td bgcolor='yellow'>". $i."</td>";
  }
 $i++;//$i=$i+1
}
echo"</table><br>";


echo "Tabla Decendente";
echo "<table border=1  >";
$nu1 = $_POST ['Numero1'];
$i=$nu1;
while ($i >0) {


  if ($nu1%2==0){
    echo "<td bgcolor='green'>".$i ."</td>";
  }else{
   echo "<td bgcolor='yellow'>". $i."</td>";
  }
 $i--;//$i=$i+1
}
echo"</table><br>";

echo "<table border=1  >";
echo "Tabla Juntas";

$nu1 = $_POST ['Numero1'];
$i=1 ;
while ($i <= $nu1) {

  if ($nu1%2==0){
    echo "<td bgcolor='green'>".$i ."</td>";
  }else{
   echo "<td bgcolor='yellow'>". $i."</td>";
  }
 $i++;//$i=$i+1
}
   


echo "Tabla Decendente";
echo "<table border=1  >";
$nu1 = $_POST ['Numero1'];
$i=$nu1;
while ($i >0) {


  if ($nu1%2==0){
    echo "<td bgcolor='green'>".$i ."</td>";
  }else{
   echo "<td bgcolor='yellow'>". $i."</td>";
  }
 $i--;//$i=$i+1
}
echo"</table><br>";






 ?>
