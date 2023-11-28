<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $numbersString = $_POST['numbers'];

  // Ensure $numbersString is not empty
  if (empty($numbersString)) {
    echo "Input is empty.";
    exit;
  }

  // Explode the comma-separated string into an array of numbers
  $numbers = array_map('intval', explode(',', $numbersString));

  // Ensure $numbers is an array before performing operations
  if (!is_array($numbers)) {
    echo "Invalid input data. 'numbers' must be an array.";
    exit;
  }

  $count = count($numbers);

  if ($count === 0) {
    echo "Array is empty.";
    exit;
  }

  $average = array_sum($numbers) / $count;
  sort($numbers);
  $middle = floor(($count - 1) / 2);
  $median = ($numbers[$middle] + $numbers[$middle + 1 - $count % 2]) / 2;
  $standardDeviation = sqrt(array_sum(array_map('squareDiff', $numbers, array_fill(0, $count, $average))) / $count);
  $min = min($numbers);
  $max = max($numbers);
  echo "lab9.html";
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
