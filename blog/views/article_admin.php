<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Мой Блог</title>
    <link rel="stylesheet" href="../style1.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
   <div class="container">
       <h1>Мой блог разработчика</h1>
   <div class="cent">
       <form action="index.php?action=<?=$_GET['action']?>&id=<?=$_GET['id']?>" method="post">
           <label>
               Название<br>
               <input type="text" name="title" value="<?=$article['title']?>" class="form-item" autofocus required>
           </label><br>
           <label>
               Дата<br>
               <input type="date" name="date" value="<?=$article['date']?>" class="form-item" required>
           </label><br>
           <label>
               Содержимое<br>
               <textarea class="form-item" name="content" required cols="30" rows="10"><?=$article['content']?></textarea><br>
               <input type="submit" value="Сохранить" class="btn"><br>
           </label>
       </form>
       </div>
    <footer>
            <p>Мой блог<br> Copyright &copy; 2018 </p>
    </footer>
    </div>
</body>
</html>