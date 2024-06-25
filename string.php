<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>String Manipulations</title>
</head>
<body>
 <h1>String Manipulations</h1>
 <form action="" method="post">
 Enter a string: <input type="text" name="inputString">
 <br><br>
 <input type="submit" name="getLength" value="Get Length">
 <input type="submit" name="reverse" value="Reverse">
 <input type="submit" name="uppercase" value="Uppercase">
 <input type="submit" name="lowercase" value="Lowercase">
 <input type="submit" name="replace" value="Replace 'a' with 'x'">
 <input type="submit" name="checkPalindrome" value="Check 
Palindrome">
 <input type="submit" name="shuffle" value="Shuffle">
 <input type="submit" name="wordCount" value="Word Count">
 </form>
 <?php
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
 $inputString = $_POST["inputString"];
 if (isset($_POST["getLength"])) {
 echo "<p>Length of the string: " . strlen($inputString) . "</p>";
 }
 if (isset($_POST["reverse"])) {
 echo "<p>Reversed string: " . strrev($inputString) . "</p>";
 }
 if (isset($_POST["uppercase"])) {
 echo "<p>Uppercase string: " . strtoupper($inputString) . "</p>";
 }
 if (isset($_POST["lowercase"])) {
 echo "<p>Lowercase string: " . strtolower($inputString) . "</p>";
 }
 if (isset($_POST["replace"])) {
 echo "<p>String with 'a' replaced by 'x': " . str_replace('a', 'x', 
$inputString) . "</p>";
 }
 if (isset($_POST["checkPalindrome"])) {
 $reverseString = strrev($inputString);
 if ($inputString == $reverseString) {
 echo "<p>The string is a palindrome.</p>";
 } else {
 echo "<p>The string is not a palindrome.</p>";
 }
 }
 if (isset($_POST["shuffle"])) {
 echo "<p>Shuffled string: " . str_shuffle($inputString) . "</p>";
 }
 if (isset($_POST["wordCount"])) {
 $wordCount = str_word_count($inputString);
 echo "<p>Word count: $wordCount</p>";
 }
 }
 ?>
</body>
</html>