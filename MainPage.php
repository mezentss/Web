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
    <link rel="stylesheet" href="MainPage.css">
    
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
        <h1>Самые вкусные рецепты у нас!</h1>
        <?php
            $seconds = date("s"); 

            if ($seconds % 2 == 0) {
                echo '<img src="recipe1.png" alt="Рецепт">'; 
            } else {
                echo '<img src="recipe2.png" alt="Рецепт">'; 
            }
        ?>
        <table>
            <tr>
                <th>Ингредиенты:</th>
                <th>Инструкция:</th>
            </tr>
            <tr>
                <td>Спагетти, мидии, креветки, ламинарии в соусе, чеснок, зелень. </td>
                <td>1. Обжарить на сковороде очищенные морепродукты с чесноком. </td>
                <td>  2. Смешать с отваренной до готовности пастой. </td>
                <td> 3. В готовое блюдо добавить мелко натёртый сыр и зелень</td>
            </tr>
        </table>

        <br><br><br>

       <ul class="recipe-list">
    <h2 class="recipe-list-title">Скоро появится категория завтраков:</h2>

    <h3 class="recipe-type">
    <?php
        $recipes = array(
                "Омлет с каперсами",
                " ~ ",
                "Творожные вафли",
                " ~ ",
                "Яичный скрэмбл с кунжутной заправкой",
                " ~ ",
                "Панкейки на греческом йогурте с малиной",
                " ~ ",
                "Овсянка с яйцом, сыром и секретным ингредиентом"
        );

        foreach ($recipes as $recipe) {
            echo '<li class="recipe-item">' .$recipe. '</li>';
        }
    ?>
    </h3>
</ul>

    </main>

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