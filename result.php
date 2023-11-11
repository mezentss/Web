<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Text Analysis Result</title>
    <style>
        table {
            border-collapse: collapse;
        }
        td, th {
            border: 1px solid black;
            padding: 5px;
        }
    </style>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $inputText = $_POST['inputText'];
    echo "<p class='result'>Исходный текст: $inputText </p>";
    if (empty($inputText)) {
        echo "<p> Нет текста для анализа</p>";
    } else {
        $charCount = strlen($inputText);
        $letterCount = preg_match_all('/\p{L}/u', $inputText);
        $lowerCaseCount = preg_match_all('/\p{Ll}/u', $inputText);
        $upperCaseCount = preg_match_all('/\p{Lu}/u', $inputText);
        $punctuationCount = preg_match_all('/[[:punct:]]/', $inputText);
        $digitCount = preg_match_all('/\d/', $inputText);
        $wordArray = str_word_count($inputText, 1, 'ёЁа-яА-Я');
        $wordCount = count($wordArray);
        
        echo "<table>";
        echo "<tr><th>Информация</th><th>Количество</th></tr>";
        echo "<tr><td>Количество символов</td><td>$charCount</td></tr>";
        echo "<tr><td>Количество букв</td><td>$letterCount</td></tr>";
        echo "<tr><td>Количество строчных букв</td><td>$lowerCaseCount</td></tr>";
        echo "<tr><td>Количество заглавных букв</td><td>$upperCaseCount</td></tr>";
        echo "<tr><td>Количество знаков препинания</td><td>$punctuationCount</td></tr>";
        echo "<tr><td>Количество цифр</td><td>$digitCount</td></tr>";
        echo "<tr><td>Количество слов</td><td>$wordCount</td></tr>";
        echo "</table>";
    }
}
?>
<br>
<a href="lab10.html">Другой анализ</a>
</body>
</html>
