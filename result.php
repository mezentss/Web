<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Text Analysis Result</title>
    <link rel="stylesheet" href="lab10.css">
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
        $letterCount = preg_match_all('/\p{L}/u', $inputText);
        $lowerCaseCount = preg_match_all('/\p{Ll}/u', $inputText);
        $upperCaseCount = preg_match_all('/\p{Lu}/u', $inputText);
        $punctuationCount = preg_match_all('/[[:punct:]]/', $inputText);
        $digitCount = preg_match_all('/\d/', $inputText);
        $wordArray = preg_split('/[\s\pP]+/u', $inputText, -1, PREG_SPLIT_NO_EMPTY);
        $wordCount = count($wordArray);
        $wordCountArray = array_count_values($wordArray);
        ksort($wordCountArray);

        $charCount = $letterCount + $punctuationCount;
        $charCount = mb_strlen($inputText, 'UTF-8');

        $charCountArray = preg_split('/(?<!^)(?!$)/u', $inputText, -1, PREG_SPLIT_NO_EMPTY);
        $charCountArray = array_count_values($charCountArray);
        arsort($charCountArray);
        ?>
       

<br><br>
        <?php
        echo "<table>";
        echo "<tr><th>Информация</th><th>Количество</th></tr>";
        echo "<tr><td>Количество символов</td><td>$charCount</td></tr>";
        echo "<tr><td>Количество букв</td><td>$letterCount</td></tr>";
        echo "<tr><td>Количество строчных букв</td><td>$lowerCaseCount</td></tr>";
        echo "<tr><td>Количество заглавных букв</td><td>$upperCaseCount</td></tr>";
        echo "<tr><td>Количество знаков препинания</td><td>$punctuationCount</td></tr>";
        echo "<tr><td>Количество слов</td><td>$wordCount</td></tr>";
        echo "<tr><td>Количество цифр</td><td>$digitCount</td></tr>";
        $inputText = mb_strtolower($_POST['inputText']);
        $charCountArray = preg_split('/(?<!^)(?!$)/u', $inputText, -1, PREG_SPLIT_NO_EMPTY);
        $charCountArray = array_count_values($charCountArray);
        arsort($charCountArray);
        echo "<tr><td>Количество вхождений каждого символа</td><td>";
        foreach ($charCountArray as $char => $count) {
            echo "$char: $count, ";
        }
        echo "</td></tr>";
        echo "</table>";
        ?>
            <br><br>
        <?php
        echo "<table>";
        echo "<tr><th>Слово</th><th>Количество вхождений</th></tr>";
        foreach ($wordCountArray as $word => $count) {
            echo "<tr><td>$word</td><td>$count</td></tr>";
        }
        echo "</table>";
    }
}
?>
<br>
<a href="lab10.html" style="text-align: center; color: #333; text-decoration: none; ">Другой анализ</a>
</body>

<footer>
    <p>2023 Мезенцева Софья Дмитриевна | Группа 221-361</p>
    <p>Лабораторная работа №10</p>
</footer>
</html>
