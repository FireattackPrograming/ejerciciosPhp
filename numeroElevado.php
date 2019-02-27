<html>
  <head>
    <title>Ejercicio de potencia</title>
  </head>
  <body>
    <table>
    <tr>
      <td>A</td>
      <td>B</td>
      <td>A ^ B</td>
    </tr>
    <?php
    $num=1;
    $pot=2;
    for($i=0;$i<6;$i++){
      echo '
        <tr>
          <td>'.$num.'</td>
          <td>'.$pot.'</td>
          <td>'.pow($num,$pot).'</td>
        </tr>
      ';
      $num+=1;
      $pot+=1;
    }
    ?>
    </table>

  </body>
</html>
