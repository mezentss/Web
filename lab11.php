<!DOCTYPE html>
<html>
<head>
    <title>Меню и таблица умножения</title>
    <style>
        .menu {
            float: left;
            width: 20%;
        }
        .content {
            float: left;
            width: 80%;
        }
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="menu">
        <h3>Главное меню</h3>
        <a href="?type=table">Табличная верстка</a><br>
        <a href="?type=block">Блочная верстка</a><br>
    </div>
    <div class="content">
        <h3>Основное меню</h3>
        <a href="?num=all">Всё</a><br>
        <?php
        for ($i=2; $i<=9; $i++) {
            echo '<a href="?num='.$i.'">'.$i.'</a><br>';
        }
        ?>
    </div>

    <h3>Информация о содержании страницы</h3>
    <?php
    if(isset($_GET['type'])) {
        echo 'Тип верстки: '.$_GET['type'].'<br>';
    } else {
        echo 'Тип верстки: табличная (по умолчанию)<br>';
    }

    if(isset($_GET['num'])) {
        if($_GET['num'] == 'all') {
            echo 'Название таблицы умножения: Полная таблица<br>';
        } else {
            echo 'Название таблицы умножения: Таблица умножения на '.$_GET['num'].'<br>';
            echo '<table>';
            for ($j=1; $j<=9; $j++) {
                echo '<tr>';
                echo '<td><a href="?num='.$j.'">'.$j.'</a>x'.$_GET['num'].'='.($_GET['num']*$j).'</td>';
                echo '</tr>';
            }
            echo '</table>';
        }
    } else {
        echo 'Название таблицы умножения: Полная таблица (по умолчанию)<br>';
    }

    echo 'Дата и время: '.date("Y-m-d H:i:s").'<br>';
    ?>

    <h3>Таблица умножения</h3>
    <?php
    if(isset($_GET['type']) && $_GET['type'] == 'block') {
        echo '<div style="display: flex; flex-wrap: wrap;">';
        for ($i=1; $i<=9; $i++) {
            echo '<div style="width: 100px; border: 1px solid black; padding: 8px; margin: 4px;">';
            for ($j=1; $j<=9; $j++) {
                echo $i.'x'.$j.'='.($i*$j).'<br>';
            }
            echo '</div>';
        }
        echo '</div>';
    } else {
        echo '<table>';
        for ($i=1; $i<=9; $i++) {
            echo '<tr>';
            for ($j=1; $j<=9; $j++) {
                echo '<td>'.$i.'x'.$j.'='.($i*$j).'</td>';
            }
            echo '</tr>';
        }
        echo '</table>';
    }
    ?>
</body>
</html>
