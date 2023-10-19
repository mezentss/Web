<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
        $pageTitle = "Полезные рецепты"; 
        echo "<title>$pageTitle</title>"; 
    ?>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="Category.css">

</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="<?php echo 'MainPage.php'; ?>" class="<?php echo ''; ?>">Главная</a></li>
                <li><a href="<?php echo 'Recepies.php'; ?>" class="<?php echo ''; ?>">Рецепты</a></li>
                <li><a href="<?php echo 'Category.php'; ?>" class="<?php echo ''; ?>">Категории</a></li>
                <li><a href="<?php echo 'Feedback.php'; ?>" class="<?php echo ''; ?>">Обратная связь</a></li>
                <li><a href="<?php echo '#'; ?>" class="<?php echo ''; ?>">О нас</a></li>
                <li><a href="<?php echo 'Entrance.html'; ?>" class="<?php echo ''; ?>">Вход</a></li>
            </ul>
        </nav>
    </header>

    

<main>
<br><br><br><br><br><br> 
<div class="container">
  <div>
<label for="x">Введите число:</label>
<input type="number" id="x" required>
<br>
<label for="n">Введите степень:</label>
<input type="number" id="n" required>
<br><br><br>
<input type="button" value="Возвести в степень" onclick="powMy()">
    
<div id="result"></div>
</div>


<div>
<label for="x2">Введите число:</label>
<input type="number" id="x2" required>
<br><br><br>
<input type="button" value="Наименьшая цифра" onclick="findMinDigit()">

<div id="minDigitResult"></div>
</div>

<div>   
<label for="a">Введите первое число:</label>
<input type="number" id="a" required>
<br>
<label for="b">Введите второе число:</label>
<input type="number" id="b" required>
<br><br><br>
<input type="button" value="Найти НОД" onclick="calculateGCD()">

<div id="gcdResult"></div>
</div>
<br>


</div>

<br><br>


<div class="container">
  <div>
<label for="n2">Введите число:</label>
<input type="number" id="n2" required>
<br>
<br><br>
<input type="button" value="Великий и могучий русский язык" onclick="pluralize()">

<div id="pluralizeResult"></div>
</div>

<br><br>

<div>
<label for="n3">Введите число:</label>
<input type="number" id="n3" required>
<br><br><br>
<input type="button" value="Фибоначчи" onclick="calculateFibonacci()">
<div id="fibonacciResult"></div>
</div>
<br><br>
</div></div>
<br><br><br><br><br><br>  
</main>

<script>
    function powMy() {
            var x = parseInt(document.getElementById("x").value);
            var n = parseInt(document.getElementById("n").value);
            var result = 1;
            for (var i = 0; i < n; i++) {
                result *= x;
            }
            document.getElementById("result").innerHTML = "Результат возведения в степень: " + result;
        }
    
        function gcd(a, b) {
        while (b !== 0) {
            var temp = b;
            b = a % b;
            a = temp;
        }
        return a;
    }

    function minDigit(x) {
        var digits = x.toString().split('');
        return Math.min(...digits);
    }

    function pluralizeRecords(n) {
        if (n === 1) {
            return "В результате выполнения запроса была найдена 1 запись";
        } else if (n % 10 === 1 && n % 100 !== 11) {
            return "В результате выполнения запроса было найдено " + n + " запись";
        } else if (n % 10 >= 2 && n % 10 <= 4 && (n % 100 < 10 || n % 100 >= 20)) {
            return "В результате выполнения запроса было найдено " + n + " записи";
        } else {
            return "В результате выполнения запроса было найдено " + n + " записей";
        }
    }

    function fibb(n) {
        if (n === 0) {
            return 0;
        } else if (n === 1) {
            return 1;
        } else {
            var a = 0;
            var b = 1;
            for (var i = 2; i <= n; i++) {
                var temp = a + b;
                a = b;
                b = temp;
            }
            return b;
        }
    }

    function calculateGCD() {
        var a = parseInt(document.getElementById("a").value);
        var b = parseInt(document.getElementById("b").value);
        var result = gcd(a, b);
        document.getElementById("gcdResult").innerHTML = "НОД " + a + " и " + b + ": " + result;
    }

    function findMinDigit() {
        var x = parseInt(document.getElementById("x2").value);
        var result = minDigit(x);
        document.getElementById("minDigitResult").innerHTML = "Минимальная цифра в числе " + x + ": " + result;
    }

    function pluralize() {
        var n = parseInt(document.getElementById("n2").value);
        var result = pluralizeRecords(n);
        document.getElementById("pluralizeResult").innerHTML = result;
    }

    function calculateFibonacci() {
        var n = parseInt(document.getElementById("n3").value);
        var result = fibb(n);
        document.getElementById("fibonacciResult").innerHTML = "Число Фибоначчи на позиции " + n + ": " + result;
    }
</script>

    <footer>
        <?php
            $currentDateTime = date("d.m.Y в H:i:s"); 
            echo "<p>Сформировано $currentDateTime</p>"; 
        ?>
        <p>Контактная информация: no@no.com | Телефон: 123-456-7890</p>
        <p>© 2023 Полезные рецепты.</p>
    </footer>
</body>
</html>