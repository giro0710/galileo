<?php
  function checkPalindrome ($word) {
    $isPalindrome = false;
    $cleanWord = strtolower(str_replace(" ", "", $word));
    $reversedWord = strrev($cleanWord);

    if ($cleanWord == $reversedWord) {
      return true;
    } 

    return $isPalindrome;
  }

  echo checkPalindrome("level") ? "yes" : "no";
?>