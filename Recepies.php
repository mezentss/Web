<?php
$servername = "localhost";
$username = "root";
$password = "00000000";
$dbname = "web";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die(":(");
}

$sql = "SELECT name FROM dishes LIMIT 10";
$result = $conn->query($sql);

?>

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
        <li><a href="<?php echo '#'; ?>" class="<?php echo ''; ?>">Категории</a></li>
        <li><a href="<?php echo 'Feedback.php'; ?>" class="<?php echo ''; ?>">Обратная связь</a></li>
        <li><a href="<?php echo '#'; ?>" class="<?php echo ''; ?>">О нас</a></li>
        <li><a href="<?php echo 'Entrance.html'; ?>" class="<?php echo ''; ?>">Вход</a></li>
    </ul>
</nav>
    </header>

    <table>
        <tr>
            <th>Блюдо</th>
            <th>Изображение</th>
        </tr>
        <?php
        if ($result->rowCount() > 0) {
            while($row = $result->fetch(PDO::FETCH_ASSOC)) {
                echo "<tr>";
                echo "<td>" . $row["name"] . "</td>";
                echo "<td><img src='Рецепты\\" . $row["name"]. '.jpg'. "'></td>";
                echo "</tr>";
            }
        } 
        ?>
    </table>

    <?php
    $conn = null;
    ?>
</body>

<footer>
        <?php
            $currentDateTime = date("d.m.Y в H:i:s"); 
            echo "<p>Сформировано $currentDateTime</p>"; 
        ?>
        <p>Контактная информация: no@no.com | Телефон: 123-456-7890</p>
        <p>© 2023 Полезные рецепты.</p>
    </footer>

</html>