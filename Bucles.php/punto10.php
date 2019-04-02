<html>
    <head>
          <title>TABLA DE MULTIPLICAR </title>
          <link rel="icon" type="image/ico" href="icons/calcu.png" />
    </head>
    <body bgcolor="#A6DC3F">

     <br><br>  
<form name="form1" action="punto10.php" method="POST">
<center><table border="0" align="center" color="red">
          <center><p>TABLA DE MULTIPLICAR </center>
          <tr>
            <td align="left"><font face="Times new Roman" size="3" color="#0E0000">DIGITE UN NUMERO POSITIVO
           </td>

            <td><input type="number" name="num1" border="1" placeholder="Digite un Numero " required></td>
          </tr>
	   <td colspan="2" align ="center"><br> <center><input type ="submit" value="CALCULAR"></center> </td>
    </table>

  </form>

    </body>
</html>

<?php
echo "<table border=0  >";
echo "Tabla descendente";
$n1=$_POST['num1'];
if ($n1<1 ) {
    }
else {
     echo "<h4>Tabla del $n1:</h4>";
     $i=1;
     while ($i<=10) {
           echo "$n1 x $i = ".$n1*$i."<br/>";
           $i++;
           }
     }

echo"</table><br>";


  ?>
