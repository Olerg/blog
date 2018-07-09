<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title>Мой блог</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
    <div>
        <h1>Мой блог разработчика</h1>
        <a href="admin">Панель Администратора</a>
        <div>
          <?php foreach($articles as $a): ?>
           <div class=article>
            <h2>
                <a href="article.php?id=<?=$a['id'] ?>"><?=$a['title'] ?></a>
            </h2>
            <p><?=$a['content'] ?></p>
            <em>Опубликовано:  <?=$a['date'] ?></em>
            </div>
            <?php endforeach?>
        </div>
        <footer>
            <p>Мой блог<br> Copyright &copy; 2018 </p>
        </footer>
    </div>
</body>
</html>
