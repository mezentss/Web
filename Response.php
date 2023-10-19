<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="MainPage.css">
    <title>Подтверждение</title>
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

    <div id="inline">
        <?php
            
            $name = $_POST['name'];
            $type = $_POST['type'];
            $message = $_POST['message'];
            $attachments = $_FILES['attachments'];

            
            echo "<h2>Мы получили вашу " . ($type === 'Жалоба' ? 'жалобу' : 'заявку') . "</h2>";
            echo "<p>Уважаемый(ая) $name, спасибо за обращение! Мы рассмотрим вашу " . ($type === 'Жалоба' ? 'жалобу' : 'заявку') . " в ближайшее время.</p>";
            echo "<p>Текст вашей " . ($type === 'Жалоба' ? 'жалобы' : 'заявки') . ": $message</p>";

        
            if($attachments['error'] === UPLOAD_ERR_OK) {
                $fileName = $attachments['name'];
                echo "<p>Прикрепленный файл: $fileName</p>";
            }
        ?>
        <button onclick="history.go(-1);">Вернуться</button>
    </div>

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