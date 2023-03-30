<?php 
  echo '<table align="center" border="1" width="35%" bgcolor="yellow"';
  
  for($i = 1; $i <= 7; $i ++) {
    echo '<tr align="center">';
    for($j = 1; $j <= 7; $j ++) {
      echo '<td align="center">';
      if ($j == 1) echo "&nbsp" .($i * $j) ."&nbsp";
      else echo $i * $j ;
      echo '</td>';
    }
    echo '</tr>';   
  }
  echo '</table>';
?>


