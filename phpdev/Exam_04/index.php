<?php
  function dateDifference ($startDate, $endDate) {
    $date1 = strtotime ($startDate);
    $date2 = strtotime ($endDate);
    $output = "";

    $diff = $date1 - $date2;

    $years =  floor($diff / (60 * 60 * 24 * 365));
    $months = floor(($diff - ($years * 60 * 60 * 24 * 365)) / (60 * 60 * 24 * 30));
    $days =  floor(($diff - ($years * 60 * 60 * 24 * 365) - ($months * 60 * 60 * 24 * 30)) / (60 * 60 * 24));
    

    if ($years > 0) {
      $output .= ($years > 1) ? $years . " years, " : $years . " year, ";
    }

    if ($months > 0) {
      $output .= ($months > 1) ? $months . " months, " : $months . " month, ";
    }

    if ($days > 0) {
      $output .= ($days > 1) ? $days . " days " : $days . " day";
    }
    
    return $output;
  }

  echo dateDifference("2019-05-31", "2018-04-05");
?>