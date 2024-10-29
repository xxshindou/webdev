<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $grade = (int) $_POST['grade'];
    $letterGrade = '';

   if ($grade >= 90 && $grade <= 100) {
    $letterGrade = 'A';
   } elseif ($grade >= 80) {
    $letterGrade = 'B';
   } elseif ($grade >= 70) {
    $letterGrade = 'C';
   } elseif ($grade >= 60) {
    $letterGrade = 'D';
   } elseif ($grade >= 0) {
    $letterGrade = 'F';
   } else {
    $letterGrade = 'Inavalid grade';
   }
    header("Location: index.php?result= ".urlencode($letterGrade));
    exit();
}
?>