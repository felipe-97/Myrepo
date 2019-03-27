<?php //Mi Calculadora BASICA

$n1= $_POST['Numero1'];
$n2= $_POST['Numero2'];
$op= $_POST['OPERACIONES'];

//  echo "Numero1: ". $n1;
  ///echo "<br>Numero2: ". $n2;
  //echo "<br>operación: ". $op;

switch ($op) {
  case 'sum':

    echo "La suma es: ". ($n1+$n2);
    break;

    case 'res':
      echo "La resta es: ". ($n1-$n2);
      break;
      case 'mul':
        echo "La multiplicación es: ". ($n1*$n2);
        break;
        case 'div':
          echo "La divición es: ". ($n1/$n2);
          break;
          case 'pot':
            echo "La Potencia para el numero 1 es: ". ($n1*$n1);
            echo "<br> La Potencia para el numero 2 es: ". ($n2*$n2);
            break;
            case 'rc':
              echo "La Raiz Cuadrada para el numero 1 es: ". sqrt($n1);
                echo "<br>La Raiz Cuadrada para el numero 2 es: ". sqrt($n2);
              break;
              case 'tod':     
              echo "La suma es: ". ($n1+$n2);
                echo "<br>La resta es: ". ($n1-$n2);
                echo "<br>La multiplicación es: ". ($n1*$n2);
                  echo "<br>La divición es: ". ($n1/$n2);
                  echo "<br>La Potencia para el numero 1 es: ". ($n1*$n1);
                  echo "<br> La Potencia para el numero 2 es: ". ($n2*$n2);
                echo "<br>La Raiz Cuadrada para el numero 1 es: ". sqrt($n1);
                  echo "<br>La Raiz Cuadrada para el numero 2 es: ". sqrt($n2);
                break;

    default:
    echo "Opción incorrecta";
}
?>
