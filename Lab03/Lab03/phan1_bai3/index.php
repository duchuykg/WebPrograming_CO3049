<?php 
  echo "Dùng vòng lặp for" ."<br />";
  for ($i = 0; $i <= 100; $i++) {
    if ($i % 2 == 1) echo $i ." ";
  }
  echo "<br />";
  echo "Dùng vòng lặp while" ."<br />";
  $i = 0;
  while ($i <= 100) {
    if ($i % 2 == 1) echo $i ." ";
    $i++;
  }
?>