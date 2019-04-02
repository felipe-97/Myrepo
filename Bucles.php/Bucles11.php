<html>
    <head>
          <title>CALCULADORA </title>
          <link rel="icon" type="image/ico" href="icons/calcu.png" />
    </head>
    <body bgcolor="#A6DC3F">

     <br><br>
<form name="form1" action="Bucles11.php" method="POST">
<center><table border="0" align="center" color="red">
          <center><p>CALCULADORA BASICA</center>
          <tr>
            <td align="left"><font face="Times new Roman" size="3" color="#0E0000">DIGITE UN NUMERO
           </td>

            <td><input type="number" name="num1" border="1" placeholder="Digite un Numero " required></td>
          </tr>
	   <td colspan="2" align ="center"><br> <center><input type ="submit" value="CALCULAR"></center> </td>
    </table>

  </form>

    </body>
</html>

<?php

//Generar lista de numeros del 1 al 10
//Script con while. for, do-while
$n1=$_POST['num1'];
echo "<table border=1  >";
echo "Tabla ascendente";
$i=1;
while ($i <= $n1) {
  if ($i%2==0){

    echo "<td bgcolor='green'>". $i ."</td>";
  }else{
    echo "<td bgcolor='yellow'>". $i ."</td>";
  }
  $i++;//$i=$i+1
}
echo"</table><br>";


   

echo "<table border=1  >";
echo "Tabla descendente";
$i=$n1;
while ($i >0 ) {
  if ($i%2==0){
    echo "<td bgcolor='green'>". $i ."</td>";
  }else{
    echo "<td bgcolor='yellow'>". $i ."</td>";
  }
  $i--;//$i=$i+1
}
echo"</table><br>";


//TABLAS JUNTAS
echo "TABLA JUNTAS";
echo "<table  width=1% cellpadding=1 cellspacing=3 align=center  border=1>";
echo "<tr>";
echo "<td width=60% >";
echo "<table border=1>";

$i=1;
while ($i <= $n1) {
  if ($i%2==0){
    echo "<tr>";
    echo "<td bgcolor='green'>". $i ."     </td>";
    echo "</tr>";
  }else{
    echo "<td bgcolor='yellow'>". $i ."</td>";
  }

  $i++;//$i=$i+1
  echo "</tr>";
};

echo"</table>";
echo"</td>";
echo "<td width=60% >";
echo "<table  border=1>";
$i=$n1;
while ($i >0 ) {
  echo "<tr>";
  if ($i%2==0){
    echo "<td bgcolor='green'>". $i ."     </td>";
  }else{
    echo "<td bgcolor='yellow'>". $i ."</td>";
  }
  $i--;//$i=$i+1
  echo "</tr>";
}
echo"</table>";
echo"</td>";
echo"</tr>";
echo"</table>";

 ?>
