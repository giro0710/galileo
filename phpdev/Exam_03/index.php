<?php
  function checkSquare ($num) {
    $squareRoot = (int)sqrt($num);
    $square = ($squareRoot * $squareRoot);

    return $square == $num;
  }
  function fibonacciCheck ($start, $end) {
    for ($x = $start; $x <= $end; $x++) {
      
      if (checkSquare(5 * $x * $x + 4) || checkSquare(5 * $x * $x - 4)) {
        echo $x . " is a Fibonacci Number <br />";
      } else {
        echo $x . " is not Fibonacci Number <br />";
      }
    }
  }

  fibonacciCheck(1, 10);
?>