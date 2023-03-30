<?php 
  function func($a){
    switch ($a % 5){
      case 0:
        echo "Hello" ."<br/>";
        break;
      case 1:
        echo "How are you?" ."<br/>";
        break;
      case 2:
        echo "I'm doing well, thank you" ."<br/>";
        break;
      case 3:
        echo "See you later" ."<br/>";
        break;
      case 4:
        echo "Goodbye" ."<br/>";
        break;
      default:
        echo "Nhập số nguyên dương" ."<br/>";
        break;
    }
  }
  
  func(0);
  func(1);
  func(2);
  func(3);
  func(4);
?>