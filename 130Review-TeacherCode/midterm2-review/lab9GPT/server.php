<?php

if ($_SERVER['REQUEST_METHOD'] === 'GET' || $_SERVER['REQUEST_METHOD'] === 'POST') {
  $jsonData = $_REQUEST['data'];
  $data = json_decode($jsonData, true);

  $numbers = $data['numbers'];

  $average = array_sum($numbers) / count($numbers);
  sort($numbers);
  $count = count($numbers);
  $middle = floor(($count - 1) / 2);
  $median = ($numbers[$middle] + $numbers[$middle + 1 - $count % 2]) / 2;
  $standardDeviation = sqrt(array_sum(array_map('squareDiff', $numbers, array_fill(0, $count, $average))) / $count);
  $min = min($numbers);
  $max = max($numbers);

  $result = [
    'average' => $average,
    'median' => $median,
    'standardDeviation' => $standardDeviation,
    'min' => $min,
    'max' => $max,
  ];

  echo json_encode($result);
}

function squareDiff($x, $mean)
{
  return pow($x - $mean, 2);
}
?>
