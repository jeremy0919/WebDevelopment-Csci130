<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET' || $_SERVER['REQUEST_METHOD'] === 'POST') {
  if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $jsonData = $_GET['numbers'];
  } else {
    $jsonData = $_POST['numbers'];
  }

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

  echo "<h1>Traditional PHP Page</h1>";
  echo "<p>Average: $average</p>";
  echo "<p>Median: $median</p>";
  echo "<p>Standard Deviation: $standardDeviation</p>";
  echo "<p>Min: $min</p>";
  echo "<p>Max: $max</p>";
}

function squareDiff($x, $mean)
{
  return pow($x - $mean, 2);
}
?>