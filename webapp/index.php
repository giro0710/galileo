<?php
  /* PHP Test */
  # TEST 1: A
  function whileLoop () {
    $x = 0;
    $sum = 0;

    while ($x <= 10) {
      if ($x % 2 == 0) {
        $sum = $sum + $x;
      }
      $x++;
    }

    return $sum;
  } 

  # TEST 1: B
  function doWhileLoop () {
    $x = 0;
    $output = "";

    do {
      if ($x % 2 == 1) {
        $output = $output . $x . ", ";
      }
      $x++;
    } while ($x <= 10);

    return $output;
  }

  # TEST 1: C
  function forLoop () {
    $output = "";
    
    $n1 = 0;
    $n2 = 0;

    for ($x = 0; $x < 10; $x++) {
      $sum = $n1 + $n2;
      $output = $output . $sum . ", ";

      if ($sum == 0) {
        $n2 += 1;
      }

      $n1 = $n2;
      $n2 = $sum;
    }

    return $output;
  }

  # TEST 2: A
  function occurrence () {
    $names = array("Marvin", "Marco", "Marvin", "Marco", "Marco", "Marvin", "Christian");
    $scores = array_count_values($names);
    $ranking = "";

    $name = array();
    $occurrence = array();

    foreach ($scores as $key => $value) {
      $name[] = $key;
      $occurrence[] = $value;
    }

    array_multisort($occurrence, SORT_DESC, $name, SORT_ASC, $scores);
    
    foreach ($scores as $key => $value) {
      $ranking = $ranking . $key . ", ";
    }
    
    return $ranking;
  }

  # TEST 2: B
  function sorting () {
    $numbers = array(9863, 7127, 2020, 80, 131, 55, 100);

    for ($x = 0; $x < sizeof($numbers); $x++) {
      for ($y = 0; $y < sizeof($numbers) - 1; $y++) {
        if ($numbers[$y] > $numbers[$y + 1]) {
          $temp = ($numbers[$y] % 2 == 1) ? round($numbers[$y], -1) : $numbers[$y];
          $numbers[$y] = ($numbers[$y + 1] % 2 == 1) ? round($numbers[$y + 1], -1) : $numbers[$y + 1];
          $numbers[$y + 1] = $temp;
        }
      }
    }

   return implode(", ", $numbers);
  }

  # TEST 2: C 
  function notRepetitive () {
    $colors = array("red", "blue", "black", "red", "blue", "blue", "red", "gold");
    $scores = array_count_values($colors);
    $output = "";

    foreach ($scores as $key => $value) {
      if ($value == 1) {
        $output = $output . $key . ", ";
      }
    }

    return $output;
  }

  echo "TEST 1: A: " . whileLoop() . "<br />";
  echo "TEST 1: B: " . doWhileLoop() . "<br />";
  echo "TEST 1: C: " . forLoop() . "<br />";
  echo "<br />";
  echo "TEST 2: A: " . occurrence() . "<br />";
  echo "TEST 2: B: " . sorting() . "<br />";
  echo "TEST 2: C: " . notRepetitive() . "<br />";

?>