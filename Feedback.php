<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="Feedback.css">
    <title>Полезные рецепты</title>
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

    <div id="inline">
        <h2>Онлайн заявка</h2>
        <form id="contact" action="Response.php" method="POST" name="contact" enctype="multipart/form-data">
            <label for="name">ФИО:</label>
            <input type="text" name="name" value="<?php if(isset($_POST['name'])) { echo $_POST['name']; } ?>" required>
            
            <label for="email">Email:</label>
            <input type="email" name="email" value="<?php if(isset($_POST['email'])) { echo $_POST['email']; } ?>" required>
            
            <label for="source">Откуда узнали о нас:</label>
            <label><input type="radio" name="source" value="Интернет" <?php if(isset($_POST['source']) && $_POST['source'] === 'Интернет') { echo 'checked'; } ?>> Интернет</label>
            <label><input type="radio" name="source" value="Рекомендации" <?php if(isset($_POST['source']) && $_POST['source'] === 'Рекомендации') { echo 'checked'; } ?>> Рекомендации</label>
            <label><input type="radio" name="source" value="Реклама" <?php if(isset($_POST['source']) && $_POST['source'] === 'Реклама') { echo 'checked'; } ?>> Реклама</label>
            
            <label for="type">Тип обращения:</label>
            <select name="type" required>
                <option value="Жалоба" <?php if(isset($_POST['type']) && $_POST['type'] === 'Жалоба') { echo 'selected'; } ?>>Жалоба</option>
                <option value="Предложение" <?php if(isset($_POST['type']) && $_POST['type'] === 'Предложение') { echo 'selected'; } ?>>Предложение</option>
            </select>
            
            <label for="message">Текст сообщения:</label>
            <textarea name="message" placeholder="Введите ваше сообщение" required><?php if(isset($_POST['message'])) { echo $_POST['message']; } ?></textarea>
            
            <label for="attachments">Вложения:</label>
            <input type="file" name="attachments">
            
            <label><input type="checkbox" name="consent" required> Даю согласие на обработку персональных данных</label>
            
            <button type="submit" name="submit" >Отправить</button>
        </form>
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
