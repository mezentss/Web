<!DOCTYPE html>
<html>
    <style>

header {
    background-color: #4e8891;
    padding: 10px;
    font-size: 20px;
}

header a {
    list-style: none;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 0;
    color: #ffffff;
    font-size: 20px;
}

header h3{
    list-style: none;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 0;
    font-size: 25px;
}
        .menu {
            float: left;
            width: 20%;
        }
        .content {
            float: left;
            width: 80%;
        }
        table {
            
            width: 850px;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        .active {
            font-weight: bold;
        }
        footer {
            background-color: #4e8891;
            padding: 10px;
            text-align: center;
    font-size: 12px;
    color: #ffffff;
        }
        
    </style>
<head>

    <title>Меню и таблица умножения</title>
   
</head>
<body>

<header>
        <h3>Главное меню</h3>
        <a href="?type=table<?php if(isset($_GET['num'])) echo '&num='.$_GET['num']; ?>" <?php if(!isset($_GET['type']) || $_GET['type'] == 'table') echo 'class="active"' ?>>Табличная верстка</a><br>
        <a href="?type=block<?php if(isset($_GET['num'])) echo '&num='.$_GET['num']; ?>" <?php if(isset($_GET['type']) && $_GET['type'] == 'block') echo 'class="active"' ?>>Блочная верстка</a><br>
</header>
<?php
if(isset($_GET['num'])) {
    if($_GET['num'] != 'all') {
        echo '<h3>Таблица умножения на '.$_GET['num'].'</h3>';
        echo '<div style="display: flex; flex-wrap: wrap;">';
        for ($j=1; $j<=9; $j++) {
            $result = $_GET['num']*$j;
            echo '<div style="width: 100px; border: 1px solid black; padding: 8px; margin: 4px; font-size: 20px;">';
            if($result<10) {
                echo '<a href="?num='.$_GET['num'];
                if(isset($_GET['type'])) echo '&type='.$_GET['type'];
                echo '">'.$_GET['num'].'</a> x <a href="?num='.$j;
                if(isset($_GET['type'])) echo '&type='.$_GET['type'];
                echo '">'.$j.'</a> = <a href="?num='.$_GET['num'].'&result='.$result.'">'.$result.'</a><br>';
                echo '</div>';
            }
            else{
                echo '<a href="?num='.$_GET['num'];
                if(isset($_GET['type'])) echo '&type='.$_GET['type'];
                echo '">'.$_GET['num'].'</a> x <a href="?num='.$j;
                if(isset($_GET['type'])) echo '&type='.$_GET['type'];
                echo '">'.$j.'</a> = '.$result.'<br>';
                echo '</div>';
            }
        }
        echo '</div>';
    }
}
?>

<div class="content">
        <h3>Основное меню</h3>
        <a href="?num=all<?php if(isset($_GET['type'])) echo '&type='.$_GET['type']; ?>" <?php if(!isset($_GET['num']) || $_GET['num'] == 'all') echo 'class="active"' ?>>Всё</a><br>
        <?php 
        for ($i=2; $i<=9; $i++) {
            echo '<a href="?num='.$i;
            if(isset($_GET['type'])) echo '&type='.$_GET['type'];
            echo '" ';
            if(isset($_GET['num']) && $_GET['num'] == $i) echo 'class="active"';
            echo '>'.$i.'</a><br>';
        }
        ?>
    </div>

<h3>Таблица умножения</h3>
<?php
if(isset($_GET['type']) && $_GET['type'] == 'block') {
    echo '<div >';
    for ($i=1; $i<=9; $i++) {
        echo '<div style="width: 70px; border: 1px solid black; padding: 8px; margin: 4px; align: right;">';
        for ($j=1; $j<=9; $j++) {
             $result = $i*$j;
if ($result<10) {
    echo '<a href="?num='.$i;
    if(isset($_GET['num'])) echo '&num='.$_GET['num'];
    echo '">'.$i.'</a> x <a href="?num='.$j;
    if(isset($_GET['num'])) echo '&num='.$_GET['num'];
    echo '">'.$j.'</a> = <a href="?num='.$result;
    if(isset($_GET['num'])) echo '&num='.$_GET['num'];
    echo '">'.$result.'</a><br>';
}
else {
    echo '<a href="?num='.$i;
    if(isset($_GET['num'])) echo '&num='.$_GET['num'];
    echo '">'.$i.'</a> x <a href="?num='.$j;
    if(isset($_GET['num'])) echo '&num='.$_GET['num'];
    echo '">'.$j.'</a> = '.$result.'<br>';
}
        }
        echo '</div>';
    }
    echo '</div>';
} else {
    echo '<table>';
    for ($i=1; $i<=9; $i++) {
        echo '<tr>';
        for ($j=1; $j<=9; $j++) {
            $result = $i*$j;
            if ($result<10) {
            echo '<td><a href="?num='.$i;
            if(isset($_GET['type'])) echo '&type='.$_GET['type'];
            echo '">'.$i.'</a> x <a href="?num='.$j;
            if(isset($_GET['type'])) echo '&type='.$_GET['type'];
            echo '">'.$j.'</a> = <a href="?num='.($i*$j);
            if(isset($_GET['type'])) echo '&type='.$_GET['type'];
            echo '">'.($i*$j).'</a></td>';
            }
            else{
                echo '<td><a href="?num='.$i;
                if(isset($_GET['type'])) echo '&type='.$_GET['type'];
                echo '">'.$i.'</a> x <a href="?num='.$j;
                if(isset($_GET['type'])) echo '&type='.$_GET['type'];
                echo '">'.$j.'</a> = '.($i*$j).'</td>'; 
            }
        }
        echo '</tr>';
    }
    echo '</table>';
}
?>
</body>


<footer>
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
        }
    } else {
        echo 'Название таблицы умножения: Полная таблица (по умолчанию)<br>';
    }

    echo 'Дата и время: '.date("Y-m-d H:i:s").'<br>';
    ?>
</footer>

</html>
