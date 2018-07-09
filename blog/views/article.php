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
        <div>
           <div class=article>
            <h2>
                <?=$article['title'] ?>
            </h2>
            <p><?=$article['content'] ?></p>
            <em>Опубликовано:  <?=$article['date'] ?></em>
            </div>
        </div>
        <footer>
            <p>Мой блог<br> Copyright &copy; 2018 </p>
        </footer>
    </div>
</body>

</html>
