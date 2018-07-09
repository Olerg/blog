<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title>Мой блог</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>

<body>
    <div>
        <h1>Мой блог разработчика</h1>
        <div class="add">
            <a href="index.php?action=add">Добавить статью</a>
             <table class="admin-table">
                <tr>
                    <th class="col">Дата</th>
                    <th class="col">Заголовок</th>
                    <th colspan="2"></th>
<!--                    <th></th>-->
                </tr>
                <?php foreach($articles as $a): ?>
                <tr>
                    <td><?=$a['date']?></td>
                    <td><?=$a['title']?></td>
                    <td><a href="index.php?action=edit&id=><?=$a['id']?>">Редактировать</a></td>
                    <td><a href="index.php?action=delete&id=><?=$a['id']?>">Удалить</a></td>
                </tr>
                <?php endforeach?>
            </table>
        </div>
        <footer>
            <p>Мой блог<br> Copyright &copy; 2018 </p>
        </footer>
    </div>
</body>

</html>
