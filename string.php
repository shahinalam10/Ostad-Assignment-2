<?php

function processString($string) {
  $vowels = "aeiouAEIOU";
  $vowelCount = 0;
  $reversedString = strrev($string);

  // Count vowels
  for ($i = 0; $i < strlen($string); $i++) {
    if (strpos($vowels, $string[$i]) !== false) {
      $vowelCount++;
    }
  }

  return [
    "original" => $string,
    "vowelCount" => $vowelCount,
    "reversed" => $reversedString,
  ];
}

$strings = ["Hello", "World", "PHP", "Programming"];

foreach ($strings as $string) {
  $processedString = processString($string);
  echo "Original String: " . $processedString["original"] .", Vowels Count: " . $processedString["vowelCount"] . ", Reversed String: " . $processedString["reversed"]  .'<br>'. PHP_EOL;
}