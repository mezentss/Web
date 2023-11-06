<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Лабораторная работа №9, Вариант 2 (12)</title>
    <link rel="stylesheet" href="lab9styles.css">
</head>
<body>
    <header class="header">
        <img class="logo" src="logo.jpg" alt="Logo">
    </header>

    <main>

        <form method="post" action="">
            <label for="initialValue">Начальное значение аргумента функции:</label>
            <input type="number" id="initialValue" name="initialValue" required><br>

            <label for="numValues">Количество вычисляемых значений функции:</label>
            <input type="number" id="numValues" name="numValues" required><br>

            <label for="step">Шаг изменения значения аргумента:</label>
            <input type="number" id="step" name="step" required><br>

            <label for="maxValue">Максимальное значение функции:</label>
            <input type="number" id="maxValue" name="maxValue" required><br>

            <label for="minValue">Минимальное значение функции:</label>
            <input type="number" id="minValue" name="minValue" required><br>

            <label for="type">Тип формируемой верстки:</label>
            <select id="type" name="type" required>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value="D">D</option>
                <option value="E">E</option>
            </select><br>

            <input type="submit" value="Вычислить">
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $initialValue = $_POST['initialValue']; // начальное значение аргумента функции
            $numValues = $_POST['numValues']; // количество вычисляемых значений функции
            $step = $_POST['step']; // шаг изменения значения аргумента
            $maxValue = $_POST['maxValue']; // максимальное значение функции, после которого вычисления останавливаются
            $minValue = $_POST['minValue']; // минимальное значение функции, после которого вычисления останавливаются

            $type = $_POST['type']; // тип формируемой верстки ('A', 'B', 'C', 'D', 'E')

            $values = array();
            $arguments = array();

            for ($i = 0; $i < $numValues; $i++) {
                $argument = $initialValue + ($i * $step);
                if ($argument <= 10) {
                    $value = (10 + $argument) / $argument;
                } elseif ($argument > 10 && $argument < 20) {
                    $value = ($argument / 7) * ($argument - 2);
                } else {
                    $value = ($argument * 8) + 2;
                }

                if ($value > $maxValue || $value < $minValue) {
                    break;
                }

                $values[] = $value;
                $arguments[] = $argument;
            }

            switch ($type) {
                case 'A':
                    foreach ($values as $key => $value) {
                        echo "f($arguments[$key])=$value<br>";
                    }
                    break;
                case 'B':
                    echo "<ul>";
                    foreach ($values as $key => $value) {
                        echo "<li>f($arguments[$key])=$value</li>";
                    }
                    echo "</ul>";
                    break;
                case 'C':
                    echo "<ol>";
                    foreach ($values as $key => $value) {
                        echo "<li>f($arguments[$key])=$value</li>";
                    }
                    echo "</ol>";
                    break;
                case 'D':
                    echo "<table border='1' style='border-collapse: collapse'>";
                    echo "<tr><th>№</th><th>Аргумент</th><th>Значение функции</th></tr>";
                    foreach ($values as $key => $value) {
                        echo "<tr><td>$key</td><td>$arguments[$key]</td><td>$value</td></tr>";
                    }
                    echo "</table>";
                    break;
                case 'E':
                    foreach ($values as $key => $value) {
                        echo "<div style='display: inline-block; border: 2px solid red; margin-right: 8px;'>f($arguments[$key])=$value</div>";
                    }
                    break;
            }

            $max = max($values);
            $min = min($values);
            $average = array_sum($values) / count($values);
            $sum = array_sum($values);

            echo "Максимальное значение: $max<br>";
            echo "Минимальное значение: $min<br>";
            echo "Среднее арифметическое: $average<br>";
            echo "Сумма значений: $sum";
        }
        ?>
        <br><br><br><br><br><br>

    </main>

    <footer class="footer">
        &copy; 2023 Мезенцева Софья Дмитриевна | Группа 221-361 | Лабораторная работа №9, Вариант 2 (12)
    </footer>
</body>
</html>