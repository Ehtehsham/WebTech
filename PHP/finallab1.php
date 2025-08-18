<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>PHP Array & String Programs</title>
</head>
<body>

<h2>1. Sum of the elements of an array</h2>
<?php
$arr = [5.5, 8.5, 1.2, 3.6, 7.4];
echo "Array: " . implode(", ", $arr) . "<br>";
echo "Sum: " . array_sum($arr);
?>

<hr>

<h2>2. Find the second maximum number of an array</h2>
<?php
$arr = [5.5, 1.2, .8, .20, .7];
rsort($arr); 
echo "Array: " . implode(", ", $arr) . "<br>";
echo "Second Maximum: " . $arr[1];
?>

<hr>

<h2>3. Generate a Right-Angled Star Triangle</h2>
<?php
$n = 5;
for ($i = 1; $i <= $n; $i++) {
    echo str_repeat("*", $i) . "<br>";
}
?>

<hr>

<h2>4. Reverse a string</h2>
<?php
$str = "webtech";
echo "Original: $str <br>";
echo "Reversed: " . strrev($str);
?>

<hr>

<h2>5. Separate the vowels and consonants of a given word</h2>
<?php
$word = "Example";
$vowels = "aeiouAEIOU";
$v = "";
$c = "";

for ($i = 0; $i < strlen($word); $i++) {
    if (strpos($vowels, $word[$i]) !== false) {
        $v .= $word[$i];
    } else {
        $c .= $word[$i];
    }
}

echo "Word: $word <br>";
echo "Vowels: " . $v . "<br>";
echo "Consonants: " . $c;
?>

</body>
</html>
